<div class="p-4">
    <div class="row mb-3">
        <?= $this->session->flashdata('message') ?>
        <div class="col">


            <div class="modal fade text-dark" id="inputRekamMedis<?= $this->uri->segment(4) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-dark">
                            <h5 class="modal-title" id="exampleModalLabel">Input Rekam Medis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">

            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body ">
                    <p>Data Pasien</p>


                    <?php for ($i = 0; $i < 1; $i++) : ?>
                        <div class="smaller mb-5">
                            <div class="row text-dark">
                                <div class="col-sm-2">
                                    <p>Nama</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['nama'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['tgl_lahir'] ?></p>
                                </div>
                            </div>
                            <div class="row text-dark">
                                <div class="col-sm-2">
                                    <p>Email</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['email'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Agama</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['agama'] ?></p>
                                </div>
                            </div>
                            <div class="row text-dark">
                                <div class="col-sm-2">
                                    <p>Whatsapp</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['whatsapp'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <?php if ($detail_user[0]['jk'] == 'p') : ?>
                                        <p>Pria</p>
                                    <?php else : ?>
                                        <p>Wanita</p>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="row text-dark">
                                <div class="col-sm-2">
                                    <p>Alamat</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['alamat'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Kota</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['kota'] ?></p>
                                </div>
                            </div>
                            <div class="row text-dark">
                                <div class="col-sm-2">
                                    <p>Provinsi</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['provinsi'] ?></p>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2">
                                    <p>Negara</p>
                                </div>
                                <div class="col-sm-1 text-center">
                                    <p>:</p>
                                </div>
                                <div class="col-sm-2">
                                    <p><?= $detail_user[0]['negara'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>

                    <div class="row">
                        <div class="col table-responsive">
                            <table class="table table-sm table-bordered table-hover table-striped mt-5 tabledata">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="align-middle text-center">No</th>
                                        <th rowspan="2" class="align-middle text-center">Tanggal Terapi</th>
                                        <th rowspan="2" class="align-middle text-center">Layanan</th>
                                        <th colspan="2" class="align-middle text-center">Tajam Pengelihatan Minus</th>
                                        <th colspan="2" class="align-middle text-center">Tajam Pengelihatan Plus</th>
                                        <th colspan="3" class="align-middle text-center">Tajam Penglihatan Warna</th>
                                        <th colspan="5" class="align-middle text-center">Pemeriksaan Meliputi</th>
                                        <th rowspan="2" class="align-middle text-center">Vitamin</th>
                                        <th rowspan="2" class="align-middle text-center">Kesimpulan</th>
                                    </tr>
                                    <tr>
                                        <th class="align-middle text-center">Mata Kanan</th>
                                        <th class="align-middle text-center">Mata Kiri</th>
                                        <th class="align-middle text-center">Mata Kanan</th>
                                        <th class="align-middle text-center">Mata Kiri</th>
                                        <th class="align-middle text-center">Buta Warna </th>
                                        <th class="align-middle text-center">Buta Warna Parsial</th>
                                        <th class="align-middle text-center">Buta Warna Total</th>
                                        <th class="align-middle text-center">Lampu 15 Titik</th>
                                        <th class="align-middle text-center">Lampu Terang Gelap</th>
                                        <th class="align-middle text-center">Osilator Listrik</th>
                                        <th class="align-middle text-center">Stik Magnet</th>
                                        <th class="align-middle text-center">Snellen Chart minus & plus</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rekam_medis as $re) : ?>
                                        <?php
                                        $diss = $id_terapis == $re['id_terapis'] ? "" : "disabled";
                                        ?>
                                        <tr data-toggle="modal" data-target="#updateRekamMedis<?= $re['id_rekam'] ?>">
                                            <td class="text-center align-middle"><?= $i; ?></td>
                                            <td class="text-center align-middle"><?= $re['tanggal_terapi']; ?></td>
                                            <td class="text-center align-middle"><?= $re['layanan']; ?></td>
                                            <td class="text-center align-middle"><?= $re['mata_kanan_minus']; ?></td>
                                            <td class="text-center align-middle"><?= $re['mata_kiri_minus']; ?></td>
                                            <td class="text-center align-middle"><?= $re['mata_kanan_plus']; ?></td>
                                            <td class="text-center align-middle"><?= $re['mata_kiri_plus']; ?></td>
                                            <td class="text-center align-middle"><?= $re['buta_warna']; ?></td>
                                            <td class="text-center align-middle"><?= $re['buta_warna_parsial']; ?></td>
                                            <td class="text-center align-middle"><?= $re['buta_warna_total']; ?></td>
                                            <td class="text-center align-middle"><?= $re['lampu15Titik']; ?></td>
                                            <td class="text-center align-middle"><?= $re['lampuTerangGelap']; ?></td>
                                            <td class="text-center align-middle"><?= $re['stikMagnet']; ?></td>
                                            <td class="text-center align-middle"><?= $re['osilatorListrik']; ?></td>
                                            <td class="text-center align-middle"><?= $re['snelled']; ?></td>
                                            <td class="text-center align-middle"><?= $re['nama_obat']; ?></td>
                                            <td class="text-center align-middle"><?= $re['kesimpulan']; ?></td>


                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>









</div>
</section>