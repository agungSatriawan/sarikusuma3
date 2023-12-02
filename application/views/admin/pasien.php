<div class="p-4">
    <div class="row mb-3">
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
                        <form action="<?= base_url('admin/addPasien') ?>" method="POST">
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordered table-sm  text-light">
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
                            <?php if ($d['jk'] == 'L') : ?>
                                <td class="align-middle text-center">Laki laki</td>
                            <?php elseif ($d['jk'] == 'P') : ?>
                                <td class="align-middle text-center">Perempuan</td>
                            <?php else : ?>
                                <td class="align-middle text-center"></td>
                            <?php endif; ?>

                            <td class="align-middle"><?= $d['alamat'] ?></td>
                            <td class="align-middle"><?= $d['kota'] ?></td>
                            <td class="align-middle"><?= $d['provinsi'] ?></td>
                            <td class="align-middle"><?= $d['negara'] ?></td>
                            <td class="align-middle p-2">
                                <button class="btn btn-info mx-3">Edit</button>
                                <button data-delete="<?= $d['id'] ?>" class="btn btn-danger deleteUser">Delete</button>
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