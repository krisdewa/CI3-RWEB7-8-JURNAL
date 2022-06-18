<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <?php $this->load->view('templates/header'); ?>
</head>

<body style="background-color: hsl(0, 0%, 96%)">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-light p-5" >
                    <h1 class="mb-3 text-center">LOGIN</h1>
                    <div mb-2>
                        <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                        <?php if ($this->session->flashdata('login')) :
                            echo $this->session->flashdata('login');
                        endif; ?>
                    </div>
                    <?php echo form_open('Login/login_aksi'); ?>            
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" />
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" />
                            <small class="text-danger">
                                <?php echo form_error('password') ?>
                            </small>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                    <!-- Register buttons -->
                    <!-- <div class="text-center">
                        <p>Not a member? <a href="#!">Register</a></p>
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    </form>
    
    <script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    });    
    </script>
</body>

</html>
