<div class="p-4">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Data Vitamin</h2>
        </div>
    </div>
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>

        <div class="col-sm-3">
            <button class="btn btn-purple" data-toggle="modal" data-target="#addObat">Tambah Data</button>
            <!-- Modal -->
            <div class="modal fade" id="addObat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Vitamin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/addObat') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama">Foto</label>
                                    <input type="file" class="form-control" id="foto" required name="foto_obat" aria-describedby="foto" placeholder="Masukan Foto Vitamin" accept="image/*">

                                </div>
                                <div class="form-group mt-3">
                                    <label for="nama">Nama Vitamin</label>
                                    <input type="text" class="form-control" id="nama" required name="nama_obat" aria-describedby="nama" placeholder="Masukan Nama Vitamin">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control rupiah" id="harga" required name="harga" aria-describedby="harga" placeholder="Masukan harga Vitamin">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="harga">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" required name="keterangan" aria-describedby="keterangan" cols="30" rows="10"></textarea>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Vitamin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col table-responsive">
            <table class="table table-bordered table-sm  tabledata">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Gambar Produk</th>
                        <th class="text-center align-middle">Nama Vitamin</th>
                        <th class="text-center align-middle">Harga</th>
                        <th class="text-center align-middle">Keterangan</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle text-center">
                                <?php if ($d['image'] != '') : ?>
                                    <a href="<?= base_url('assets/obat/' . $d['image']) ?>" data-lightbox="image-1" data-title="<?= $d['nama_obat'] . "-" . $d['keterangan'] ?>">
                                        <img src="<?= base_url('assets/obat/' . $d['image']) ?>" class="img-thumbnail" width="100" alt="">
                                    </a>

                                <?php else : ?>
                                    <p class="text-danger"> Tidak Ada Gambar Produk</p>

                                <?php endif ?>
                            </td>
                            <td class="align-middle"><?= $d['nama_obat'] ?></td>
                            <td class="align-middle rupiah"><?= $d['harga'] ?></td>
                            <td class="align-middle"><?= $d['keterangan'] ?></td>

                            <td class="align-middle p-2">
                                <button class="btn btn-sm btn-info mx-1" data-toggle="modal" data-target="#editObat<?= $d['id'] ?>">Edit</button>

                                <div class="modal fade" id="editObat<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Vitamin</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/editObat') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $d['id'] ?>" hidden name="id">

                                                        <?php if ($d['image'] != '') : ?>
                                                            <a class="d-block mb-3 text-center" href="<?= base_url('assets/obat/' . $d['image']) ?>" data-lightbox="image-1" data-title="<?= $d['nama_obat'] . "-" . $d['keterangan'] ?>">
                                                                <img src="<?= base_url('assets/obat/' . $d['image']) ?>" class="img-thumbnail" width="300" alt="">
                                                            </a>

                                                        <?php else : ?>
                                                            <p class="d-block text-danger"> Tidak Ada Gambar Produk</p>

                                                        <?php endif ?>
                                                        <label for="nama">Produk Vitamin</label>
                                                        <input type="file" class="form-control mb-3" id="foto" name="foto_obat" aria-describedby="foto" placeholder="Masukan Foto Vitamin" accept="image/*">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <input type="text" value="<?= $d['id'] ?>" hidden name="id">
                                                        <label for="nama">Nama Vitamin</label>
                                                        <input type="text" class="form-control" id="nama" required name="nama_obat" aria-describedby="nama" placeholder="Masukan Nama Obat" value="<?= $d['nama_obat'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="harga">Harga</label>
                                                        <input type="text" class="form-control rupiah" id="harga" required name="harga" aria-describedby="harga" placeholder="Masukan harga Obat" value="<?= $d['harga'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="harga">Keterangan</label>

                                                        <textarea class="form-control" id="keterangan" required name="keterangan" aria-describedby="keterangan" cols="30" rows="10"><?= $d['keterangan'] ?></textarea>

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


                                <button data-delete="<?= $d['id'] ?>" class="btn btn-danger deleteObat  btn-sm">Delete</button>
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