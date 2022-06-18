<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jurnal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jurnal_model"); //load model jurnal
        
        // Cek session id dan nama
        // Untuk mencegah user masuk kedalam dashboard tanpa login
        if(!$this->session->userdata('id') && !$this->session->userdata('nama')){
            $this->session->set_flashdata('login', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Hayo mau ngapain, login dulu brey !!!
            </div>' );
        redirect('/');
        }
    }
    //method pertama yang akan di eksekusi
    public function index()
    {

        $data["title"] = "List Data Jurnal";
        //ambil fungsi getAll untuk menampilkan semua data jurnal
        $data["data_jurnal"] = $this->jurnal_model->getAll();
        //load view header.php pada folder views/templates
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        //load view index.php pada folder views/jurnal
        $this->load->view('jurnal/index', $data);
        $this->load->view('templates/footer');
    }

    //method add digunakan untuk menampilkan form tambah data jurnal
    public function add()
    {
        $jurnal = $this->jurnal_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($jurnal->rules()); //menerapkan rules validasi pada jurnal_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada jurnal_model
        if ($validation->run()) {
            $jurnal->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data jurnal berhasil disimpan. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            )
            ;
            redirect("jurnal");
        }

        $data["title"] = "Tambah Data jurnal";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('jurnal/add', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id_jurnal = null)
    {
        if (!isset($id_jurnal)) redirect('jurnal');

        $jurnal = $this->jurnal_model;
        $validation = $this->form_validation;
        $validation->set_rules($jurnal->rules());

        if ($validation->run()) {
            $jurnal->update();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data jurnal berhasil disimpan. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
            redirect("index.php/jurnal");
        }
        $data["title"] = "Edit Data Jurnal";
        $data["data_jurnal"] = $jurnal->getById($id_jurnal);
        if (!$data["data_jurnal"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('jurnal/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id_jurnal)
    {
        // $id_jurnal = $this->input->get('id_jurnal');
        if (!isset($id_jurnal)) show_404();
        $this->jurnal_model->delete($id_jurnal);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data jurnal berhasil dihapus. 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        $this->output->set_output(json_encode($msg));
        // redirect 
        redirect('index.php/jurnal');
    }
}