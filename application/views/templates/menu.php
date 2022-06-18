
<nav class="navbar navbar-expand-md bg-warning">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="jurnal">Aplikasi Jurnal</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('jurnal'); ?>">Jurnal</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<//?= base_url('Login/logout'); ?>">LOGOUT</a>
                </li> -->
            </ul>
        </div>
        <span class="navbar-text">
            <a class="nav-item mr-3 nav-link p-2" href="<?= base_url('Login/logout'); ?>">LOGOUT</a>
        </span>
    </div>
</nav>