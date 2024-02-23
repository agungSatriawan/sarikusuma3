<section>
    <div class="content">
        <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
            <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
            <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
                <img class="rounded-pill img-fluid" width="65" src="<?= base_url('assets/image/logo1.jpeg') ?>" alt="">
                <div class="ms-2">
                    <h5 class="fs-6 mb-0">
                        <a class="text-decoration-none" href="#"><?= ucwords($this->session->userdata('username')) ?> Sari Kusuma 99</a>
                    </h5>
                    <p class="mt-1 mb-0">Sehat Optimal | Ibadah Sempurna</p>
                </div>
            </div>
            <ul class="categories list-unstyled">
                <?php if ($this->session->userdata('role_id') < 2) : ?>
                    <li class="">
                        <i class="uil-estate fa-fw"></i><a href="<?= base_url('admin') ?>"> Dashboard</a>
                    </li>
                    <li class="">
                        <i class="uil uil-file-edit-alt"></i><a href="<?= base_url('admin/reservasi') ?>"> Reservasi</a>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil uil-usd-circle fa-fw"></i><a href="#"> Transaksi</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="<?= base_url('admin/pembayaran') ?>">pembayaran</a></li>
                            <li><a href="<?= base_url('admin/historyPembayaran') ?>" target="_blank">History</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <i class="uil-user"></i><a href="<?= base_url('admin/pasien') ?>"> Daftar Pasien</a>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil-envelope-download fa-fw"></i><a href="#"> Rekam Medis</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="<?= base_url('admin/pemeriksaan') ?>">Pemeriksaan</a></li>
                            <li><a href="<?= base_url('admin/historyRekamMedis') ?>" target="_blank">History</a></li>

                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <i class="uil-setting"></i><a href="#"> Master</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="<?= base_url('admin/dataTerapis') ?>">Data Terapis</a></li>
                            <li><a href="<?= base_url('admin/dataObat') ?>">Data Vitamin</a></li>
                            <li><a href="<?= base_url('admin/pasien') ?>">Data Pasien</a></li>
                            <li><a href="<?= base_url('admin/layanan') ?>">Data Layanan</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="has-dropdown">
                        <i class="uil-envelope-download fa-fw"></i><a href="#"> Rekam Medis</a>
                        <ul class="sidebar-dropdown list-unstyled">
                            <li><a href="<?= base_url('admin/pemeriksaan') ?>">Pemeriksaan</a></li>
                            <li><a href="<?= base_url('admin/historyRekamMedis') ?>" target="_blank">History</a></li>

                        </ul>
                    </li>
                <?php endif ?>

            </ul>
        </aside>
        <section id="wrapper">