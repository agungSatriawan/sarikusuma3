<div class="p-4">
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>
    <div class="row">

        <div class="col table-responsive">
            <table class="table table-bordered table-sm  tabledata mt-3">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama</th>
                        <th class="text-center align-middle">Tanggal Lahir</th>
                        <th class="text-center align-middle">Usia</th>
                        <th class="text-center align-middle">Jenis Kelamin</th>
                        <th class="text-center align-middle">Terapi</th>
                        <th class="text-center align-middle">Tanggal Terapi</th>
                        <th class="text-center align-middle">Status</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pemeriksaan as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['nama'] ?></td>
                            <td class="align-middle text-center"><?= $d['tgl_lahir'] ?></td>
                            <td class="align-middle text-center"><?= hitung_umur($d['tgl_lahir']) ?></td>
                            <?php if ($d['jk'] == 'p') : ?>
                                <td class="align-middle text-center">Laki laki</td>
                            <?php elseif ($d['jk'] == 'w') : ?>
                                <td class="align-middle text-center">Perempuan</td>
                            <?php else : ?>
                                <td class="align-middle text-center"></td>
                            <?php endif; ?>

                            <td class="align-middle"><?= $d['terapi'] ?></td>
                            <td class="align-middle"><?= $d['tanggal_terapi'] ?></td>
                            <?php if ($d['status_reservasi'] == 1) : ?>
                                <td class="align-middle text-success">Selesai</td>
                            <?php else : ?>
                                <td class="align-middle text-danger">Menunggu</td>
                            <?php endif ?>


                            <td class="align-middle p-2 text-nowrap">

                                <div class="row">
                                    <div class="col">
                                        <a href="<?= base_url('admin/kelolaRekamMedis/' . $d['id_reservasi'] . '/' . $d['iduser']) ?>" class="btn btn-info mt-1 kelolaRekamMedis btn-sm" target="_blank">Lihat Rekam Medis</a>
                                    </div>
                                </div>





                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>









</div>
</section>