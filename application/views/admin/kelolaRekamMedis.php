<div class="p-4">
    <div class="row mb-3">
        <?= $this->session->flashdata('message') ?>
        <div class="col">
            <button class="btn btn-sm btn-primary mt-1 mx-1" data-toggle="modal" data-target="#inputRekamMedis<?= $this->uri->segment(4) ?>">Input Rekam Medis</button>

            <div class="modal fade text-dark" id="inputRekamMedis<?= $this->uri->segment(4) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-dark">
                            <h5 class="modal-title" id="exampleModalLabel">Input Rekam Medis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/inputRekamMEdis/' . $this->uri->segment(3) . '/' . $this->uri->segment(4)) ?>" method="POST">
                            <div class="modal-body">
                                <input type="text" value="<?= $this->uri->segment(3) ?>" hidden name="id">
                                <?php foreach ($detail_user as $d) : ?>
                                    <div class="smaller">
                                        <div class="row text-dark">
                                            <div class="col-sm-2">
                                                <p>Nama</p>
                                            </div>
                                            <div class="col-sm-1 text-center">
                                                <p>:</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p><?= $d['nama'] ?></p>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-2">
                                                <p>Tanggal Lahir</p>
                                            </div>
                                            <div class="col-sm-1 text-center">
                                                <p>:</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p><?= $d['tgl_lahir'] ?></p>
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
                                                <p><?= $d['email'] ?></p>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-2">
                                                <p>Agama</p>
                                            </div>
                                            <div class="col-sm-1 text-center">
                                                <p>:</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p><?= $d['agama'] ?></p>
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
                                                <p><?= $d['whatsapp'] ?></p>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-2">
                                                <p>Jenis Kelamin</p>
                                            </div>
                                            <div class="col-sm-1 text-center">
                                                <p>:</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <?php if ($d['jk'] == 'p') : ?>
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
                                                <p><?= $d['alamat'] ?></p>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-2">
                                                <p>Kota</p>
                                            </div>
                                            <div class="col-sm-1 text-center">
                                                <p>:</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p><?= $d['kota'] ?></p>
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
                                                <p><?= $d['provinsi'] ?></p>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-2">
                                                <p>Negara</p>
                                            </div>
                                            <div class="col-sm-1 text-center">
                                                <p>:</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p><?= $d['negara'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <hr>


                                <ol type="a">
                                    <li>Tajam Pengelihatan Minus
                                        <div class="form-group row mt-3">
                                            <input type="text" hidden name="id_reservasi" value="<?= $this->uri->segment(3) ?>">
                                            <label for="mata_kanan_minus" class="col col-form-label">Mata Kanan</label>
                                            <div class="col">
                                                <input type="text" class="form-control" name="mata_kanan_minus" id="mata_kanan_minus">

                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="mata_kiri_minus" class="col col-form-label">Mata Kiri</label>
                                            <div class="col">
                                                <input type="text" class="form-control" name="mata_kiri_minus" id="mata_kiri_minus">

                                            </div>
                                        </div>

                                    </li>
                                    <li>Tajam Pengelihatan Plus
                                        <div class="form-group row mt-3">
                                            <label for="mata_kanan_plus" class="col col-form-label">Mata Kanan</label>
                                            <div class="col">
                                                <input type="text" class="form-control" name="mata_kanan_plus" id="mata_kanan_plus">

                                            </div>
                                        </div>

                                        <div class="form-group row mt-3">
                                            <label for="mata_kiri_plus" class="col col-form-label">Mata Kiri</label>
                                            <div class="col">
                                                <input type="text" class="form-control" name="mata_kiri_plus" id="mata_kiri_plus">

                                            </div>
                                        </div>

                                    </li>

                                    <li>
                                        Tajam Penglihatan Warna
                                        <div class="form-group row mt-3">
                                            <label for="buta_warna" class="col col-form-label">Buta Warna </label>
                                            <div class="col">
                                                <select name="buta_warna" id="buta_warna" class="form-control">
                                                    <option value="">Pilih Salah Satu</option>
                                                    <option value="ya">Ya</option>
                                                    <option value="tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="buta_warna_parsial" class="col col-form-label"> Buta Warna Parsial</label>
                                            <div class="col">
                                                <select name="buta_warna_parsial" id="buta_warna_parsial" class="form-control">
                                                    <option value="">Pilih Salah Satu</option>
                                                    <option value="ya">Ya</option>
                                                    <option value="tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="buta_warna_total" class="col col-form-label"> Buta Warna Total</label>
                                            <div class="col">
                                                <select name="buta_warna_total" id="buta_warna_total" class="form-control">
                                                    <option value="">Pilih Salah Satu</option>
                                                    <option value="ya">Ya</option>
                                                    <option value="tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                </ol>

                                <div class="row mt-3">
                                    <div class="col">
                                        <h5>Pemeriksaan Meliputi</h5>
                                        <div class="pemeriksaan" style="padding-left: 30px;">
                                            <div class="form-group row mt-3">
                                                <label for="lampu15Titik" class="col col-form-label"> Lampu 15 Titik</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="lampu15Titik">
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label for="lampuTerangGelap" class="col col-form-label">Lampu Terang Gelap</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="lampuTerangGelap">
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label for="osilatorListrik" class="col col-form-label"> Osilator Listrik</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="osilatorListrik">
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label for="stikMagnet" class="col col-form-label"> Stik Magnet</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="stikMagnet">
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label for="snelled" class="col col-form-label"> Snellen Chart minus & plus</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="snelled">
                                                </div>
                                            </div>

                                            <div class="form-group row mt-3">
                                                <label for="obat" class="col col-form-label"> Vitamin</label>
                                                <div class="col">

                                                    <select name="obat[]" class="form-control multiple" id="" multiple="multiple">
                                                        <?php foreach ($vitamin as $v) : ?>
                                                            <option value="<?= $v['id'] ?>"><?= $v['nama_obat'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label for="kesimpulan" class="col-sm-12 col-form-label">KESIMPULAN </label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" name="kesimpulan" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Input</button>
                            </div>
                        </form>
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
                <div class="card-body">
                    <p>Data Pasien</p>


                    <?php for ($i = 0; $i < count($detail_user); $i++) : ?>
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

                    <table class="table table-sm table-bordered table-hover table-striped mt-5 tabledata">
                        <thead>
                            <tr>
                                <th class="align-middle text-center">No</th>
                                <th class="align-middle text-center">Nama Terapis</th>
                                <th class="align-middle text-center">Tanggal Pemeriksaan</th>
                                <th class="align-middle text-center">Rekam Medis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>

                            <?php foreach ($rekam_medis as $re) : ?>
                                <?php
                                $diss = $id_terapis == $re['id_terapis'] ? "" : "disabled";
                                ?>
                                <tr data-toggle="modal" data-target="#updateRekamMedis<?= $re['id_rekam'] ?>">
                                    <td class="text-center"><?= $i; ?></td>
                                    <td><?= $re['nama_terapis']; ?></td>
                                    <td class="text-center"><?= $re['tanggal_periksa']; ?></td>
                                    <td class="text-center">Detail</td>
                                    <!-- modal rekam medis -->
                                    <div class="modal fade text-dark" id="updateRekamMedis<?= $re['id_rekam'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-dark">
                                                    <h5 class="modal-title" id="exampleModalLabel">Kelola Rekam Medis</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?= base_url('admin/updateRekamMedis/' . $re['id_rekam']) . '/' . $re['id'] ?>" method="POST">
                                                    <div class="modal-body">
                                                        <input type="text" value="<?= $re['id'] ?>" hidden name="id">
                                                        <div class="smaller">
                                                            <div class="row text-dark">
                                                                <div class="col-sm-2">
                                                                    <p>Nama</p>
                                                                </div>
                                                                <div class="col-sm-1 text-center">
                                                                    <p>:</p>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <p><?= $re['nama'] ?></p>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <p>Tanggal Lahir</p>
                                                                </div>
                                                                <div class="col-sm-1 text-center">
                                                                    <p>:</p>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <p><?= $re['tgl_lahir'] ?></p>
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
                                                                    <p><?= $re['email'] ?></p>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <p>Agama</p>
                                                                </div>
                                                                <div class="col-sm-1 text-center">
                                                                    <p>:</p>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <p><?= $re['agama'] ?></p>
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
                                                                    <p><?= $re['whatsapp'] ?></p>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <p>Jenis Kelamin</p>
                                                                </div>
                                                                <div class="col-sm-1 text-center">
                                                                    <p>:</p>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <?php if ($re['jk'] == 'p') : ?>
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
                                                                    <p><?= $re['alamat'] ?></p>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <p>Kota</p>
                                                                </div>
                                                                <div class="col-sm-1 text-center">
                                                                    <p>:</p>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <p><?= $re['kota'] ?></p>
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
                                                                    <p><?= $re['provinsi'] ?></p>
                                                                </div>
                                                                <div class="col-sm-1"></div>
                                                                <div class="col-sm-2">
                                                                    <p>Negara</p>
                                                                </div>
                                                                <div class="col-sm-1 text-center">
                                                                    <p>:</p>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <p><?= $re['negara'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>


                                                        <ol type="a">
                                                            <li>Tajam Pengelihatan Minus
                                                                <div class="form-group row mt-3">
                                                                    <input type="text" hidden name="id_reservasi" required value="<?= $this->uri->segment(3) ?>">
                                                                    <label for="mata_kanan_minus" class="col col-form-label">Mata Kanan</label>
                                                                    <div class="col">
                                                                        <input type="text" <?= $diss ?> class="form-control" name="mata_kanan_minus" value="<?= $re['mata_kanan_minus'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-3">
                                                                    <label for="mata_kiri_minus" class="col col-form-label">Mata Kiri</label>
                                                                    <div class="col">
                                                                        <input type="text" <?= $diss ?> class="form-control" required name="mata_kiri_minus" value="<?= $re['mata_kiri_minus'] ?>">
                                                                    </div>
                                                                </div>

                                                            </li>
                                                            <li>Tajam Pengelihatan Plus
                                                                <div class="form-group row mt-3">
                                                                    <label for="mata_kanan_plus" class="col col-form-label">Mata Kanan</label>
                                                                    <div class="col">
                                                                        <input type="text" <?= $diss ?> class="form-control" required name="mata_kanan_plus" value="<?= $re['mata_kanan_plus'] ?>">

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-3">
                                                                    <label for="mata_kiri_plus" class="col col-form-label">Mata Kiri</label>
                                                                    <div class="col">
                                                                        <input type="text" <?= $diss ?> class="form-control" required name="mata_kiri_plus" value="<?= $re['mata_kiri_plus'] ?>">

                                                                    </div>
                                                                </div>

                                                            </li>


                                                            <li>
                                                                Tajam Penglihatan Warna
                                                                <div class="form-group row mt-3">
                                                                    <label for="buta_warna" class="col col-form-label">Buta Warna </label>
                                                                    <div class="col">
                                                                        <select name="buta_warna" <?= $diss ?> required id="buta_warna" class="form-control">
                                                                            <option value="  <?= ucwords($re['buta_warna']) ?>"> <?= ucwords($re['buta_warna']) ?></option>
                                                                            <option value="ya">Ya</option>
                                                                            <option value="tidak">Tidak</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-3">
                                                                    <label for="buta_warna_parsial" class="col col-form-label"> Buta Warna Parsial</label>
                                                                    <div class="col">
                                                                        <select <?= $diss ?> name="buta_warna_parsial" required id="buta_warna_parsial" class="form-control">
                                                                            <option value="<?= ucwords($re['buta_warna_parsial']) ?>"><?= ucwords($re['buta_warna_parsial']) ?></option>
                                                                            <option value="ya">Ya</option>
                                                                            <option value="tidak">Tidak</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-3">
                                                                    <label for="buta_warna_total" class="col col-form-label"> Buta Warna Total</label>
                                                                    <div class="col">
                                                                        <select <?= $diss ?> name="buta_warna_total" required id="buta_warna_total" class="form-control">
                                                                            <option value=" <?= ucwords($re['buta_warna_total']) ?>"> <?= ucwords($re['buta_warna_total']) ?></option>
                                                                            <option value="ya">Ya</option>
                                                                            <option value="tidak">Tidak</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>

                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <h5>Pemeriksaan Meliputi</h5>
                                                                <div class="pemeriksaan" style="padding-left: 30px;">
                                                                    <div class="form-group row mt-3">
                                                                        <label for="lampu15Titik" class="col col-form-label"> Lampu 15 Titik</label>
                                                                        <div class="col">
                                                                            <input type="text" <?= $diss ?> required class="form-control" name="lampu15Titik" value="lampu15Titik">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="lampuTerangGelap" class="col col-form-label">Lampu Terang Gelap</label>
                                                                        <div class="col">
                                                                            <input type="text" <?= $diss ?> required class="form-control" name="lampuTerangGelap" value="lampuTerangGelap">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="osilatorListrik" class="col col-form-label"> Osilator Listrik</label>
                                                                        <div class="col">
                                                                            <input type="text" <?= $diss ?> required class="form-control" name="osilatorListrik" value="<?= $re['osilatorListrik'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="stikMagnet" class="col col-form-label"> Stik Magnet</label>
                                                                        <div class="col">
                                                                            <input type="text" <?= $diss ?> required class="form-control" value="<?= $re['stikMagnet'] ?>" name="stikMagnet">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="snelled" class="col col-form-label"> Snellen Chart minus & plus</label>
                                                                        <div class="col">
                                                                            <input type="text" <?= $diss ?> required value="<?= $re['snelled'] ?>" class="form-control" name="snelled">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <?php
                                                                        $vitaminLoad = '';
                                                                        if ($re['obat'] != null || $re['obat'] != '') {
                                                                            $vitaminLoad = $this->db->query("select GROUP_CONCAT(id) id, GROUP_CONCAT(nama_obat) nama_obat from data_obat where id in (" . $re['obat'] . ") ")->row_array();
                                                                        }



                                                                        ?>
                                                                        <label for="obat" class="col col-form-label"> Vitamin</label>
                                                                        <div class="col">
                                                                            <select name="obat[]" <?= $diss ?> required class="form-control multiple" id="" multiple="multiple">
                                                                                <?php if ($re['obat'] != null || $re['obat'] != '') : ?>
                                                                                    <option selected value="<?= $vitaminLoad['id'] ?>"><?= $vitaminLoad['nama_obat'] ?></option>
                                                                                <?php endif ?>



                                                                                <?php foreach ($vitamin as $v) : ?>
                                                                                    <option value="<?= $v['id'] ?>"><?= $v['nama_obat'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                            <!-- <input type="text" class="form-control" name="obat" value="<?= $re['obat'] ?>"> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="kesimpulan" required class="col-sm-12 col-form-label">KESIMPULAN </label>
                                                                        <div class="col-sm-12">
                                                                            <textarea <?= $diss ?> class="form-control" name="kesimpulan" id="" cols="30" rows="10"><?= $re['kesimpulan'] ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" <?= $diss ?> data-delete="<?= $re['id_rekam'] ?>" data-reservasi="<?= $this->uri->segment(3) ?>" data-user="<?= $re['id'] ?>" class="btn btn-danger delete_rekam_medis" data-dismiss="modal">Delete</button>
                                                        <button type="submit" <?= $diss ?> class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
</section>