<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->model('login_model');//load model login
            $this->load->library('form_validation');           
    }
    public function index(){
        $this->load->view('Auth/login');
    }
    
    function login_aksi(){ 
        $login=array( 
            'email'=>$this->input->post('email'), 
            'password'=>$this->input->post('password') 
        ); 
        
        $this->form_validation->set_rules('email','Email','trim|required'); 
        $this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
        
        if($this->form_validation->run() != false){
            $data=$this->login_model->login_admin($login['email'],$login['password']);
            if($data) { 
                $this->session->set_userdata('id',$data['id']); 
                $this->session->set_userdata('nama',$data['nama']); 
                
                $this->session->set_flashdata('login', '<div class="alert alert-success alert-dismissible fade show" role="alert"> 
                Selamat Datang Di Website Sistem Informasi Jurnal </div>');

                redirect("jurnal");
            } else { 
                // echo "Gagal Login";
                $this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                                                        Email atau password anda salah </div>');
                redirect("/"); 
            } 
        } else { 
            $this->load->view('Auth/login'); } 
    }

    public function logout()
	{
        session_destroy();
		redirect(site_url());
	}
}

