<div class="p-4">
    <div class="welcome">
        <div class="content rounded-3 p-3">
            <h1 class="fs-3">Welcome to Dashboard</h1>
            <p class="mb-0">Hello <?= ucwords(strtolower($username['username'])) ?>, welcome to Sarikusuma dashboard!</p>
        </div>
    </div>






    <section class="statis mt-4 text-center">
        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 rekap_user">
                <div class="box bg-danger p-3">
                    <i class="uil-user"></i>
                    <h3><?= $jumlah_register["id"] ?></h3>
                    <p class="lead">User registered</p>
                    <small><a href="<?= base_url('admin/detail_user') ?>">detail</a></small>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 rekap_user">
                <div class="box bg-info p-3">
                    <i class="uil-document-layout-center"></i>
                    <h3>Laporan </h3>
                    <p class="lead">Rekam Medis</p>
                    <small><a href="<?= base_url('admin/detal_laporan_rekam_medis') ?>">detail</a></small>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <div class="box bg-warning p-3">
                    <i class="uil-shopping-cart"></i>
                    <h3>5,154</h3>
                    <p class="lead">Product sales</p>
                </div>
            </div> -->
            <!-- <div class="col-md-6 col-lg-3">
                <div class="box bg-success p-3">
                    <i class="uil-feedback"></i>
                    <h3>5,154</h3>
                    <p class="lead">Transactions</p>
                </div>
            </div> -->
        </div>
    </section>


</div>
</section>