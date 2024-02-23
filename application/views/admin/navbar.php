<nav class="navbar navbar-expand-md">
    <div class="container-fluid mx-2">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="uil-bars text-white"></i>
            </button>
            <a class="navbar-brand" href="#"><?= ucwords($this->session->userdata('username')) ?><span class="main-color"> Sari Kusuma 99</span></a>


        </div>
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="<?= base_url('home/logout') ?>" class="nav-link active">Logout</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="p-4">