<div class="p-4">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Data Layanan</h2>
        </div>
    </div>
    <div class="row mb-3">

        <div class="flash mt-5 mb-3">
            <?= $this->session->flashdata('message') ?>
        </div>

        <div class="col-sm-3">
            <button class="btn btn-purple" data-toggle="modal" data-target="#addLayanan">Tambah Data</button>
            <!-- Modal -->
            <div class="modal fade" id="addLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Layanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/addLayanan') ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">

                                    <label for="nama">Nama Layanan</label>
                                    <input type="text" class="form-control" id="nama" required name="nama_layanan" aria-describedby="nama" placeholder="Masukan Nama Layanan">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control rupiah" id="harga" required name="harga" aria-describedby="harga" placeholder="Masukan harga Harga">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah Layanan</button>
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
                        <th class="text-center align-middle">Nama Layanan</th>
                        <th class="text-center align-middle">Harga</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detail_user as $d) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $d['layanan'] ?></td>
                            <td class="align-middle rupiah"><?= $d['harga'] ?></td>

                            <td class="align-middle p-2">
                                <button class="btn btn-sm btn-info mx-1" data-toggle="modal" data-target="#editObat<?= $d['id'] ?>">Edit</button>

                                <div class="modal fade" id="editObat<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Layanan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/editLayanan') ?>" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $d['id'] ?>" hidden name="id">
                                                        <label for="nama">Nama Layanan</label>
                                                        <input type="text" class="form-control" id="nama" required name="nama_layanan" aria-describedby="nama" placeholder="Masukan Nama Layanan" value="<?= $d['layanan'] ?>">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="harga">Harga</label>
                                                        <input type="text" class="form-control rupiah" id="harga" required name="harga" aria-describedby="harga" placeholder="Masukan harga Obat" value="<?= $d['harga'] ?>">
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


                                <button data-delete="<?= $d['id'] ?>" class="btn btn-danger deleteLayanan  btn-sm">Delete</button>
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