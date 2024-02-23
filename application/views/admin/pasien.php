<div class="p-4">
    <div class="row mb-3">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Data Pasien</h2>
            </div>
        </div>
        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
            <?= form_error('no_ktp', '<p class="text-danger">', '</p>') ?>

        </div>

        <div class="col-sm-3">
            <button class="btn btn-purple" data-toggle="modal" data-target="#addUser">Tambah Data</button>
            <!-- Modal -->
            <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/pasien') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" required name="nama" aria-describedby="nama" placeholder="Masukan Nama Pasien" value="<?= set_value('nama') ?>">
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No KTP</label>
                                    <input type="number" class="form-control no_ktp is-invalid" id="no_ktp" required name="no_ktp" aria-describedby="no_ktp" placeholder="Masukan No KTP Pasien" value="<?= set_value('no_ktp') ?>">
                                    <?= form_error('no_ktp', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="email" required name="email" aria-describedby="email" placeholder="Masukan email Pasien" value="<?= set_value('email') ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="whatsapp">whatsapp</label>
                                    <input type="number" class="form-control" id="whatsapp" required name="whatsapp" aria-describedby="whatsapp" placeholder="Masukan whatsapp Pasien" value="<?= set_value('whatsapp') ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="tanggal_lahir">tanggal_lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" required name="ttl" aria-describedby="tanggal_lahir" placeholder="Masukan Tanggal Lahir Pasien" value="<?= set_value('ttl') ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="agama">agama</label>
                                    <select name="agama" id="agama" class="form-control" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="islam">Islam</option>
                                        <option value="katholik">Katholik</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                    </select>



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
                                    <input type="text" class="form-control" id="alamat" required name="alamat" aria-describedby="alamat" placeholder="Masukan Alamat Pasien" value="<?= set_value('alamat') ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="kota">kota</label>
                                    <input type="text" class="form-control" id="kota" required name="negara" aria-describedby="kota" placeholder="Masukan kota Pasien" value="<?= set_value('kota') ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="provinsi">provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" required name="provinsi" aria-describedby="provinsi" placeholder="Masukan provinsi Pasien" value="<?= set_value('provinsi') ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="Negara">Negara</label>
                                    <input type="text" class="form-control" id="Negara" required name="negara" aria-describedby="Negara" placeholder="Masukan Negara Pasien" value="<?= set_value('negara') ?>">
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary daftar_pasien">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <a href="<?= base_url('admin/reservasi') ?>" class="btn btn-info text-light">Reservasi</a>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordered table-sm tabledata">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama</th>
                        <th class="text-center align-middle">No KTP</th>
                        <th class="text-center align-middle">Email</th>
                        <th class="text-center align-middle">WhatsApp</th>
                        <th class="text-center align-middle">Tanggal Lahir</th>
                        <th class="text-center align-middle">Agama</th>
                        <th class="text-center align-middle">Jenis Kelamin</th>
                        <th class="text-center align-middle">Alamat</th>
                        <th class="text-center align-middle">Kota</th>
                        <th class="text-center align-middle">Provinsi</th>
                        <!-- <th class="text-center align-middle">Negara</th> -->
                        <th class="text-center align-middle text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['nama'] ?></td>
                            <td class="align-middle"><?= $d['no_ktp'] ?></td>
                            <td class="align-middle"><?= $d['email'] ?></td>
                            <td class="align-middle"><?= $d['whatsapp'] ?></td>
                            <td class="align-middle text-center text-nowrap"><?= $d['tgl_lahir'] ?></td>
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
                            <!-- <td class="align-middle"><?= $d['negara'] ?></td> -->
                            <td class="align-middle p-2">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-info mx-1 mb-1" data-toggle="modal" data-target="#editUser<?= $d['id'] ?>">Edit</button>

                                        <div class="modal fade" id="editUser<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Pasien</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/editPasien') ?>" method="POST">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <input type="text" value="<?= $d['id'] ?>" hidden name="id">
                                                                <label for="nama">Nama</label>
                                                                <input type="text" class="form-control" id="nama" required name="nama" aria-describedby="nama" placeholder="Masukan Nama Pasien" value="<?= $d['nama'] ?>">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="email">email</label>
                                                                <input type="text" class="form-control" id="email" required name="email" aria-describedby="email" placeholder="Masukan email Pasien" value="<?= $d['email'] ?>">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="whatsapp">whatsapp</label>
                                                                <input type="text" class="form-control" id="whatsapp" required name="whatsapp" aria-describedby="whatsapp" placeholder="Masukan whatsapp Pasien" value="<?= $d['whatsapp'] ?>">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="tanggal_lahir">tanggal_lahir</label>
                                                                <input type="date" class="form-control" id="tanggal_lahir" required name="ttl" aria-describedby="tanggal_lahir" placeholder="Masukan Tanggal Lahir Pasien" value="<?= $d['tgl_lahir'] ?>">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="agama">agama</label>
                                                                <input type="text" class="form-control" id="agama" required name="agama" aria-describedby="agama" placeholder="Masukan agama Pasien" value="<?= $d['agama'] ?>">
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="jk">Jenis Kelamin</label>
                                                                <select required name="jk" id="jk" class="form-control" required name="jk">

                                                                    <option value="">Pilih Salah Satu</option>
                                                                    <option selected value="<?= $d['jk'] ?>"><?= $d['jk'] == 'p' ? 'Pria' : 'Wanita' ?></option>
                                                                    <option value="p">Pria</option>
                                                                    <option value="w">Wanita</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <label for="alamat">alamat</label>
                                                                <input type="text" class="form-control" id="alamat" required name="alamat" aria-describedby="alamat" placeholder="Masukan Alamat Pasien" value="<?= $d['alamat'] ?>">
                                                            </div>

                                                            <div class="form-group mt-3">
                                                                <label for="negara">Negara</label>
                                                                <input type="text" class="form-control" id="negara" required name="negara" aria-describedby="negara" placeholder="Masukan Negara Pasien" value="<?= $d['negara'] ?>">
                                                            </div>

                                                            <div class="form-group mt-3">
                                                                <label for="provinsi">provinsi</label>
                                                                <input type="text" class="form-control" id="provinsi" required name="provinsi" aria-describedby="provinsi" placeholder="Masukan provinsi Pasien" value="<?= $d['provinsi'] ?>">
                                                            </div>

                                                            <div class="form-group mt-3">
                                                                <label for="kota">Kota</label>
                                                                <input type="text" class="form-control" id="kota" required name="kota" aria-describedby="kota" placeholder="Masukan kota Pasien" value="<?= $d['kota'] ?>">
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <button data-user="<?= $d['id_user'] ?>" data-delete="<?= $d['id'] ?>" class="btn btn-danger deleteUser btn-sm">Delete</button>
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