<div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Data Rekam Medis Pasien</h2>
        </div>
    </div>
    <div class="row mb-3 mt-3 justify-content-end">
        <div class="col-sm-3">
            <label for="">Mulai</label>
            <input type="date" class="form-control mulai rentang">
        </div>
        <div class="col-sm-3">
            <label for="">Sampai</label>
            <input type="date" class="form-control sampai rentang">
        </div>
    </div>
    <div class="row">

        <div class="col">
            <table class="table table-bordered tabledata tableUser">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama</th>
                        <th class="text-center align-middle">Email</th>
                        <th class="text-center align-middle">WhatsApp</th>
                        <th class="text-center align-middle">Lihat Laporan</th>
                    </tr>
                </thead>
                <tbody class="dataUserLaporanRekamMedis">
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $du) : ?>
                        <tr>
                            <td class="text-center"><?= $i ?></td>
                            <td><?= $du['nama'] ?></td>
                            <td><?= $du['email'] ?></td>
                            <td><?= $du['whatsapp'] ?></td>
                            <td class="text-center"><a href="<?= base_url('admin/detailLaporanPasien/' . $du['id']) ?>">Lihat Laporan Pasien</a></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>









</div>
</section>