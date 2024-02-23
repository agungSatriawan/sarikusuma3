<div class="p-4">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Data Terapis</h2>
        </div>
    </div>
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>

        <div class="col-sm-3">
            <button class="btn btn-purple" data-toggle="modal" data-target="#addUser">Tambah Data</button>
            <!-- Modal -->
            <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Terapis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/addTerapis') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama">Nama Terapis</label>
                                    <input type="text" class="form-control" id="nama" required name="nama" aria-describedby="nama" placeholder="Masukan Nama Terapis">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="text">Spesialis</label>
                                    <input type="text" class="form-control" id="spesialis" required name="spesialis" aria-describedby="spesialis" placeholder="Masukan Spesialis">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" required name="jabatan" aria-describedby="jabatan" placeholder="Masukan jabatan Terapis">
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
            <table border="1px white solid" class="table table-bordered table-sm  tabledata">
                <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Nama Terapis</th>
                        <th class="text-center align-middle">Spesialis</th>
                        <th class="text-center align-middle">Jabatan</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['nama_terapis'] ?></td>
                            <td class="align-middle"><?= $d['spesialis'] ?></td>
                            <td class="align-middle"><?= $d['jabatan'] ?></td>


                            <td class="align-middle p-2">
                                <button class="btn btn-sm btn-info mx-1" data-toggle="modal" data-target="#editUser<?= $d['id'] ?>">Edit</button>

                                <div class="modal fade" id="editUser<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pasien</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/editTerapis') ?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $d['id'] ?>" hidden name="id">
                                                        <label for="nama">Nama Terapis</label>
                                                        <input type="text" class="form-control" id="nama" required name="nama" aria-describedby="nama" placeholder="Masukan Nama Terapis" value="<?= $d['nama_terapis'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="text">Spesialis</label>
                                                        <input type="text" class="form-control" id="spesialis" required name="spesialis" aria-describedby="spesialis" placeholder="Masukan email Pasien" value="<?= $d['spesialis'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="jabatan">Jabatan</label>
                                                        <input type="text" class="form-control" id="jabatan" required name="jabatan" aria-describedby="jabatan" placeholder="Masukan jabatan Terapis" value="<?= $d['jabatan'] ?>">
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


                                <button data-delete="<?= $d['id'] ?>" class="btn btn-danger deleteTerapis btn-sm">Delete</button>
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