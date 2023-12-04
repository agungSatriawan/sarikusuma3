<div class="p-4">
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>

        <!-- <div class="col-sm-3"> -->
        <!-- <button class="btn btn-purple" data-toggle="modal" data-target="#addUser">Tambah Data</button> -->
        <!-- Modal -->
        <!-- <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/addRekamMedis') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" required name="nama" aria-describedby="nama" placeholder="Masukan Nama Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" required name="email" aria-describedby="email" placeholder="Masukan email Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="whatsapp">whatsapp</label>
                                    <input type="text" class="form-control" id="whatsapp" required name="whatsapp" aria-describedby="whatsapp" placeholder="Masukan whatsapp Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="tanggal_lahir">tanggal_lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" required name="ttl" aria-describedby="tanggal_lahir" placeholder="Masukan Tanggal Lahir Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="agama">agama</label>
                                    <input type="text" class="form-control" id="agama" required name="agama" aria-describedby="agama" placeholder="Masukan agama Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select required name="jk" id="jk" class="form-control" required name="jk">
                                        <option value="">Pilih Salah Satu</option>
                                        <option value="p">Pria</option>
                                        <option value="w">Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="alamat">alamat</label>
                                    <input type="text" class="form-control" id="alamat" required name="alamat" aria-describedby="alamat" placeholder="Masukan Alamat Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="kota">kota</label>
                                    <input type="text" class="form-control" id="kota" required name="negara" aria-describedby="kota" placeholder="Masukan kota Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="provinsi">provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" required name="provinsi" aria-describedby="provinsi" placeholder="Masukan provinsi Pasien">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="Negara">Negara</label>
                                    <input type="text" class="form-control" id="Negara" required name="kota" aria-describedby="Negara" placeholder="Masukan Negara Pasien">
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->
    </div>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordered table-sm  tabledata mt-3">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama</th>
                        <th class="text-center align-middle">Email</th>
                        <th class="text-center align-middle">WhatsApp</th>
                        <th class="text-center align-middle">Tanggal Lahir</th>
                        <th class="text-center align-middle">Agama</th>
                        <th class="text-center align-middle">Jenis Kelamin</th>
                        <th class="text-center align-middle">Alamat</th>
                        <th class="text-center align-middle">Kota</th>
                        <th class="text-center align-middle">Provinsi</th>
                        <th class="text-center align-middle">Negara</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['nama'] ?></td>
                            <td class="align-middle"><?= $d['email'] ?></td>
                            <td class="align-middle"><?= $d['whatsapp'] ?></td>
                            <td class="align-middle text-center"><?= $d['tgl_lahir'] ?></td>
                            <td class="align-middle text-center"><?= $d['agama'] ?></td>
                            <?php if ($d['jk'] == 'p') : ?>
                                <td class="align-middle text-center">Laki laki</td>
                            <?php elseif ($d['jk'] == 'w') : ?>
                                <td class="align-middle text-center">Perempuan</td>
                            <?php else : ?>
                                <td class="align-middle text-center"></td>
                            <?php endif; ?>

                            <td class="align-middle"><?= $d['alamat'] ?></td>
                            <td class="align-middle"><?= $d['kota'] ?></td>
                            <td class="align-middle"><?= $d['provinsi'] ?></td>
                            <td class="align-middle"><?= $d['negara'] ?></td>
                            <td class="align-middle p-2 text-nowrap">

                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-primary mt-1 mx-1" data-toggle="modal" data-target="#inputRekamMedis<?= $d['id'] ?>">Input Rekam Medis</button>

                                        <div class="modal fade text-dark" id="inputRekamMedis<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-dark">
                                                        <h5 class="modal-title" id="exampleModalLabel">Input Rekam Medis</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/inputRekamMEdis') ?>" method="POST">
                                                        <div class="modal-body">
                                                            <input type="text" value="<?= $d['id'] ?>" hidden name="id">
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
                                                            <hr>


                                                            <ol type="a">
                                                                <li>Tajam Pengelihatan Sentral
                                                                    <div class="form-group row mt-3">
                                                                        <label for="mata_kanan" class="col col-form-label">Mata Kanan</label>
                                                                        <div class="col">
                                                                            <select name="mata_kanan" id="mata_kanan" class="form-control">
                                                                                <option value="">Pilih Salah Satu</option>
                                                                                <option value="kacamata">Pakai kaca mata</option>
                                                                                <option value="tidak_kacamata">tanpa kaca mata</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="mata_kanan_pinhole" class="col col-form-label">Mata Kanan dengan pinhole</label>
                                                                        <div class="col">
                                                                            <select name="mata_kanan_pinhole" id="mata_kanan_pinhole" class="form-control">
                                                                                <option value="">Pilih Salah Satu</option>
                                                                                <option value="kacamata">Pakai kaca mata</option>
                                                                                <option value="tidak_kacamata">tanpa kaca mata</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="mata_kiri" class="col col-form-label">Mata Kiri</label>
                                                                        <div class="col">
                                                                            <select name="mata_kiri" id="mata_kiri" class="form-control">
                                                                                <option value="">Pilih Salah Satu</option>
                                                                                <option value="kacamata">Pakai kaca mata</option>
                                                                                <option value="tidak_kacamata">tanpa kaca mata</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-3">
                                                                        <label for="mata_kiri_pinhole" class="col col-form-label">Mata Kiri dgn pinhole </label>
                                                                        <div class="col">
                                                                            <select name="mata_kiri_pinhole" id="mata_kiri_pinhole" class="form-control">
                                                                                <option value="">Pilih Salah Satu</option>
                                                                                <option value="kacamata">Pakai kaca mata</option>
                                                                                <option value="tidak_kacamata">tanpa kaca mata</option>
                                                                            </select>
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
                                                                            <label for="visus_ods" class="col col-form-label"> VISUS ODS</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" name="visus_ods">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mt-3">
                                                                            <label for="tio_ods" class="col col-form-label"> TIO ODS</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" name="tio_ods">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mt-3">
                                                                            <label for="segmen_ant_ods" class="col col-form-label"> SEGMENT ANT ODS</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" name="segmen_ant_ods">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mt-3">
                                                                            <label for="fundus_ods" class="col col-form-label"> FUNDUS ODS</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" name="fundus_ods">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mt-3">
                                                                            <label for="ishihara_test_ods" class="col col-form-label"> ISHIHARA TEST ODS</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" name="ishihara_test_ods">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mt-3">
                                                                            <label for="obat" class="col col-form-label"> OBAT</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" name="obat">
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
                                    <div class="col">
                                        <a href="<?= base_url('admin/kelolaRekamMedis/' . $d['id']) ?>" class="btn btn-info mt-1 kelolaRekamMedis btn-sm" target="_blank">Kelola Rekam Medis</a>
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