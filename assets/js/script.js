
$(document).ready(function () {


    const base_url = window.location.origin + '/sarikusuma3';

    $('.tabledata').DataTable();
    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        startDate: '-3d',
        todayHighlight: true
    });

    function rupiah() {
        new AutoNumeric.multiple('.rupiah', {
            onInvalidPaste: 'truncate',
            modifyValueOnWheel: false,
            watchExternalChanges: true,
            decimalPlaces: 0,
            currencySymbol: 'Rp. ',
            decimalPlacesRawValue: 2,
            decimalPlacesShownOnBlur: 0,
            unformatOnSubmit: true,
            styleRules: {
                "positive": "autoNumeric-positive",
                "negative": "autoNumeric-negative"
            },
            decimalCharacterAlternative: '.',

            // negativeBracketsTypeOnBlur: '(,)'

        });
    }
    rupiah();


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('.deleteUser').click(function () {
        let id = $(this).data('delete');
        let id_user = $(this).data('user');

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + '/admin/hapusUser',
                    method: 'post',
                    data: {
                        id: id,
                        id_user: id_user

                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/pasien"
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Data anda Gagal dihapus.",
                                icon: "error"
                            });
                        }
                    }
                })

            }
        });

    })
    $('.deleteTerapis').click(function () {
        let id = $(this).data('delete');

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + '/admin/hapusTerapis',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/dataTerapis"
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Data anda Gagal dihapus.",
                                icon: "error"
                            });
                        }
                    }
                })

            }
        });

    })
    // $('.deleteObat').click(function () {
    $('body').on('click', '.deleteObat', function () {
        let id = $(this).data('delete');

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + '/admin/hapusObat',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        // console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/dataObat"
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Data anda Gagal dihapus.",
                                icon: "error"
                            });
                        }
                    }
                })

            }
        });

    })
    $('body').on('click', '.deleteLayanan', function () {
        let id = $(this).data('delete');

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + '/admin/hapusLayanan',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        // console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/layanan"
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Data anda Gagal dihapus.",
                                icon: "error"
                            });
                        }
                    }
                })

            }
        });

    })
    $('.delete_rekam_medis').click(function () {
        let id = $(this).data('delete');
        let id_user = $(this).data('user');
        let id_reservasi = $(this).data('reservasi');

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + '/admin/hapusRekamMedis',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/kelolaRekamMedis/" + id_reservasi + "/" + id_user
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Data anda Gagal dihapus.",
                                icon: "error"
                            });
                        }
                    }
                })

            }
        });

    })
    // $('.deleteReservasi').click(function () {
    $('body').on('click', '.deleteReservasi', function () {
        let id = $(this).data('delete');

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data yang terhapus tidak dapat dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + '/admin/hapusReservasi',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        // console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/reservasi/"
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Data anda Gagal dihapus.",
                                icon: "error"
                            });
                        }
                    }
                })

            }
        });

    })

    function $_(selector) {
        return document.querySelector(selector)
    }

    function find(el, selector) {
        let finded
        return (finded = el.querySelector(selector)) ? finded : null
    }

    function siblings(el) {
        const siblings = []
        for (let sibling of el.parentNode.children) {
            if (sibling !== el) {
                siblings.push(sibling)
            }
        }
        return siblings
    }

    const showAsideBtn = $_('.show-side-btn')
    const sidebar = $_('.sidebar')
    const wrapper = $_('#wrapper')

    // showAsideBtn.addEventListener('click', function () {
    //      $_(`# $_{this.dataset.show}`).classList.toggle('show-sidebar')
    //     wrapper.classList.toggle('fullwidth')
    // })

    if (window.innerWidth < 767) {
        sidebar.classList.add('show-sidebar');
    }

    window.addEventListener('resize', function () {
        if (window.innerWidth > 767) {
            sidebar.classList.remove('show-sidebar')
        }
    })

    // dropdown menu in the side nav
    var slideNavDropdown = $_('.sidebar-dropdown');

    $_('.sidebar .categories').addEventListener('click', function () {
        // event.preventDefault()

        const item = event.target.closest('.has-dropdown')

        if (!item) {
            return
        }

        item.classList.toggle('opened')

        siblings(item).forEach(sibling => {
            sibling.classList.remove('opened')
        })

        if (item.classList.contains('opened')) {
            const toOpen = find(item, '.sidebar-dropdown')

            if (toOpen) {
                toOpen.classList.add('active')
            }

            siblings(item).forEach(sibling => {
                const toClose = find(sibling, '.sidebar-dropdown')

                if (toClose) {
                    toClose.classList.remove('active')
                }
            })
        } else {
            find(item, '.sidebar-dropdown').classList.toggle('active')
        }
    })

    $('.select2').select2({
        dropdownParent: $('#addReservasi')
    });
    $('.multiple').select2();


    $('.cari').change(function () {
        let cari = $(this).val();
        $.ajax({
            url: base_url + '/admin/cariPasien',
            method: 'post',
            dataType: 'json',
            data: {
                cari: cari
            },
            beforeSend: function () {

            },
            success: function (data) {
                $('#nama').html('')
                $('#email').html('')
                $('#whatsapp').html('')
                $('#tgl_lahir').html('')
                $('#agama').html('')
                $('#jk').html('')
                $('#alamat').html('')
                $('#kota').html('')
                $('#provinsi').html('')
                $('#negara').html('')
                let jenis_kelamin = data.jk == 'p' ? 'Pria' : 'Wanita'

                $('#nama').html(data.nama)
                $('#email').html(data.email)
                $('#whatsapp').html(data.whatsapp)
                $('#tgl_lahir').html(data.tgl_lahir)
                $('#agama').html(data.agama)
                $('#jk').html(jenis_kelamin)
                $('#alamat').html(data.alamat)
                $('#kota').html(data.kota)
                $('#provinsi').html(data.provinsi)
                $('#negara').html(data.negara)
            }

        })
    })



    $('.tanggal_transaksi').change(function () {
        let day = $(this).val();
        $.ajax({
            url: base_url + '/admin/loadTransaksi',
            type: 'post',
            dataType: 'json',
            data: {
                day: day
            },
            beforeSend: function () {

            },
            success: function (data) {
                $('.loadDataTransaksi').html('');
                let isi = '';

                let no = 1;
                data.forEach(e => {
                    let status_payment = '';
                    let color = '';
                    let jk = '';
                    let id_layanan = '';
                    status_payment = e.status_payment == 1 ? 'Selesai' : 'Menunggu';
                    color = e.status_payment == 1 ? 'success' : 'danger';
                    id_layanan = e.id_layanan == 1 ? 'Mata' : '';
                    jk = e.jk == 'w' ? 'Wanita' : 'Pria';
                    isi += `    <tr>
                                    <td class="align-middle text-center">`+ no + `</td>
                                    <td class="align-middle">`+ e.nama + `</td>
                                    <td class="align-middle text-center">`+ e.tgl_lahir + `</td>
                                    <td class="align-middle text-center"><?= hitung_umur(`+ e.tgl_lahir + `) ?></td>
                                    <td class="align-middle text-center">`+ jk + `</td>
                                  

                                    <td class="align-middle">`+ id_layanan + `</td>
                                    <td class="align-middle">`+ e.tanggal_terapi + `</td>
                                    <td class="align-middle text-`+ color + `">` + status_payment + `</td>
                                
                                    <td class="align-middle p-2 text-nowrap">
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-primary detNota" data-rekam="<?= $d['id_reservasi'] ?>" data-bs-toggle="modal" data-bs-target="#pembayaran`+ e.id_reservasi + `">Lihat Nota</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="pembayaran`+ e.id_reservasi + `" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="sidebar-header d-flex  align-items-center px-3 py-4">
                                                                    <img class="rounded-pill img-fluid" width="65" src="<?= base_url('assets/image/logo1.jpeg') ?>" alt="">
                                                                    <div class="ms-2">
                                                                        <h5 class="fs-6 mb-0">
                                                                            <a class="text-decoration-none" href="#">Sari Kusuma</a>
                                                                        </h5>
                                                                        <p class="mt-1 mb-0">Sehat Optimal | Ibadah Sempurna</p>
                                                                    </div>
                                                                    <hr>

                                                                </div>

                                                                <div class="row mb-5">
                                                                    <div class="col">
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
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-sm-1">Tanggal</div>
                                                                    <div class="col-sm-1 text-center">:</div>
                                                                    <div class="col-sm-3"><?= date('d-m-Y H:i:sa') ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-1">Layanan</div>
                                                                    <div class="col-sm-1 text-center">:</div>
                                                                    <div class="col-sm-3"><?= $d['layanan'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Pelayanan</th>
                                                                                    <th>Harga</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="detail_nota">
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot class="detail_nota_footer"></tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <h5>Metode Pembayaran</h5>
                                                                    <div class="col-sm-1 text-center">
                                                                        <button class="btn btn-primary cash">Cash</button>
                                                                        <button class="btn btn-secondary">CC</button>
                                                                        <button class="btn btn-info ewalet">e-Wallet</button>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`;

                    no++;
                });

                $('.loadDataTransaksi').html(isi)
            }
        })

    })

    const rp = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            decimal: ''
        }).format(number);
    }


    function updateNota(id_reservasi) {

        $.ajax({
            url: base_url + "/admin/detNota",
            type: 'post',
            dataType: 'json',
            data: {
                id_reservasi: id_reservasi
            },
            beforeSend: function () {

            },
            success: function (data) {

                let data_nota = '';
                let data_nota_footer = '';
                let total = 0;
                let nominal = 0;
                let metode = '';
                $('.metodePembayaran').removeClass('tutup')
                $('.metodePembayaran').removeClass('buka')

                data.layanan.forEach(l => {
                    total += parseInt(l.harga);
                    data_nota += `  <tr>
                                        <td>`+ l['layanan'] + `</td>
                                        <td class="rupiah text-end">`+ l['harga'] + `</td>
                                    </tr>`;

                    data.resep.forEach(r => {
                        total += parseInt(r.harga);
                        data_nota += `  <tr>
                                            <td>`+ r['nama_obat'] + `</td>
                                            <td class="rupiah text-end">`+ r['harga'] + `</td>
                                        </tr>`;
                    });

                    data.pembayaran.forEach(p => {
                        metode = p['metode_pembayaran'];
                    });
                    data.history.forEach(h => {
                        nominal = h['nominal'];
                    });
                });
                let change = nominal == 0 ? 0 : nominal - total
                let hidden = data.pembayaran.length == 0 ? 'buka' : 'tutup';
                // console.log(hidden)
                data_nota_footer += `  <tr>
                                            <th class="text-center">Total</th>
                                            <th class="rupiah text-end">`+ total + `</th>
                                        </tr>`;
                data_nota_footer += `  <tr>
                                            <th class="text-left">Metode Pembayaran `+ metode + `</th>
                                            <th class="rupiah text-end">`+ nominal + `</th>
                                        </tr>`;
                data_nota_footer += `  <tr>
                                            <th class="text-left">Change</th>
                                            <th class="rupiah text-end">`+ change + `</th>
                                        </tr>`;

                $('.detail_nota').html(data_nota);
                $('.detail_nota_footer').html(data_nota_footer);

                $('.cash').attr('data-cash', rp(total))
                $('.ewalet').attr('data-ewalet', rp(total))
                $('.cash').attr('data-rawcash', total)
                $('.ewalet').attr('data-rawcash', total)

                $('.metodePembayaran').addClass(hidden)
                $('.buka').show();
                $('.tutup').hide();
                // if (data.resep.length > 0) {
                $('.cash').attr('data-reservasi', id_reservasi)
                $('.ewalet').attr('data-reservasi', id_reservasi)
                // }

                // console.log(total)
                rupiah();
            }
        })
    }

    // $('.detNota').click(function () {
    $('body').on('click', '.detNota', function () {
        let id_reservasi = $(this).data('rekam');
        updateNota(id_reservasi);
    })


    $('.cash').click(function () {
        // $('.modal').modal('hide');
        let total = $(this).data('cash');
        let totalraw = $(this).data('rawcash');
        let id_reservasi = $(this).data('reservasi');
        let input = 0;

        let reservasi = $(this).data('reservasi');
        Swal.fire({
            title: "Masukan Nominal Pembayaran",
            inputLabel: "Total " + total,
            input: "text",
            customClass: {
                input: 'rupiah'
            },

            inputAttributes: {
                autocapitalize: "off"
            },
            showCancelButton: true,
            confirmButtonText: "Payment",
            showLoaderOnConfirm: true,
            preConfirm: async (inputTotal) => {
                input = inputTotal.replace(",", "");
                input = input.replace("Rp. ", "");
                input = input.replace(",", "");
                input = input.replace(",", "");
                // console.log(input)
                if (input < totalraw) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Nominal Tidak Cukup"
                    });
                    return false;
                } else {
                    try {
                        const githubUrl = base_url + `/admin/cash/${reservasi}/${input}`;
                        const response = await fetch(githubUrl);
                        if (!response.ok) {
                            return Swal.showValidationMessage(`
          ${JSON.stringify(await response.json())}
        `);
                        }
                        return response.json();
                    } catch (error) {
                        Swal.showValidationMessage(`
        Request failed: ${error}
      `);
                    }
                }

            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {

                let sisa = parseInt(input.replace(",", "")) - parseInt(totalraw)

                Swal.fire({
                    title: "Kembali " + rp(sisa),
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: "Ok"
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        location.reload();
                    } else if (result.isDenied) {
                        Swal.fire("Changes are not saved", "", "info");
                    }
                });





            }
        });
        rupiah();
    })
    $('.ewalet').click(function () {
        // $('.modal').modal('hide');
        let total = $(this).data('ewalet');
        let totalraw = $(this).data('rawcash');
        let id_reservasi = $(this).data('reservasi');
        let input = 0;

        let reservasi = $(this).data('reservasi');
        Swal.fire({
            title: "Masukan e-wallet",
            inputLabel: "Total " + total,
            input: "select",
            inputOptions: {
                "": "Pilih Salah Satu",
                "E-wallet": {
                    Dana: "Dana",
                    OVO: "OVO",
                    Gopay: "Gopay",
                    LinkAja: "LinkAja",
                    ShopeePay: "Shopee Pay"
                },
            },
            inputAttributes: {
                autocapitalize: "off"
            },
            showCancelButton: true,
            confirmButtonText: "Payment",
            showLoaderOnConfirm: true,
            preConfirm: async (inputTotal) => {
                input = inputTotal.replace(",", "");
                input = input.replace("Rp. ", "");
                input = input.replace(",", "");
                input = input.replace(",", "");
                // console.log(input)
                if (input < totalraw) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Nominal Tidak Cukup"
                    });
                    return false;
                } else {
                    try {
                        const githubUrl = base_url + `/admin/ewalet/${reservasi}/${input}/${totalraw}`;
                        const response = await fetch(githubUrl);
                        if (!response.ok) {
                            return Swal.showValidationMessage(`
          ${JSON.stringify(await response.json())}
        `);
                        }
                        return response.json();
                    } catch (error) {
                        Swal.showValidationMessage(`
        Request failed: ${error}
      `);
                    }
                }

            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {

                let sisa = parseInt(input.replace(",", "")) - parseInt(totalraw)

                Swal.fire({
                    title: "Pembayaran Berhasil",
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: "Ok"
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                        location.reload();
                    } else if (result.isDenied) {
                        Swal.fire("Changes are not saved", "", "info");
                    }
                });
            }
        });
        rupiah();
    })
    $('body').on("click", ".print", function () {
        let id_reservasi = $(this).data('reservasi');
        print(id_reservasi);
    });
    function print(id_reservasi) {
        const section = $("section");
        const modalBody = $(".modal-body-" + id_reservasi).detach();

        const content = $(".content").detach();
        section.append(modalBody);
        window.print();
        section.empty();
        section.append(content);
        $(".modal-body-wrapper").append(modalBody);
    }

    $.fn.modal.Constructor.prototype._enforceFocus = function () { };

    function usia(dob) {
        // var dob = new Date("04/13/1992");
        //calculate month difference from current date in time
        var month_diff = Date.now() - dob.getTime();

        //convert the calculated difference in date format
        var age_dt = new Date(month_diff);

        //extract year from date    
        var year = age_dt.getUTCFullYear();

        //now calculate the age of the user
        var age = Math.abs(year - 1970);

        //display the calculated age
        return age + " Tahun";

    }

    $('.rentang').change(function () {

        let mulai = $('.mulai').val();
        let sampai = $('.sampai').val();

        $.ajax({
            url: base_url + "/admin/userRegistered",
            type: 'post',
            dataType: 'json',
            data: {
                mulai: mulai,
                sampai: sampai
            },
            beforeSend: function () {

            },
            success: function (data) {
                $('.dataUserRegistered').html('');
                $('.tableReservasi').html('');
                $('.loadDataTransaksi').html('');
                $('.tablePemeriksaan').html('');
                $('.tabledata ').dataTable().fnDestroy();
                let isi = '';
                let isiLaporanRekamMEdis = '';
                let no = 1;
                let active = '';
                let color = "";
                data.userRegistered.forEach(e => {
                    if (e.active == 1) {
                        active = "Aktif";
                        color = "text-success";
                    } else {
                        active = "Tidak Aktif";
                        color = "text-danger";
                    }
                    isi += `  <tr>
                                <td class="text-center">`+ no + `</td>
                                <td>`+ e.nama + `</td>
                                <td>`+ e.email + `></td>
                                <td>`+ e.whatsapp + `</td>
                                <td class="`+ color + `">` + active + `</td>
                            </tr>`;
                    isiLaporanRekamMEdis += `  <tr>
                                <td class="text-center">`+ no + `</td>
                                <td>`+ e.nama + `</td>
                                <td>`+ e.email + `></td>
                                <td>`+ e.whatsapp + `</td>
                                <td><a href="detailLaporanPasien/`+ e.id + `">Lihat Laporan Pasien</a></td>
                            </tr>`;
                    no++;
                });
                let isiReservasi = '';
                let noReservasi = 1;
                data.reservasi.forEach(f => {
                    let statusReservase = f.status == 1 ? '' : base_url + '/admin/editReservasi';
                    let statusDisable = f.status == 1 ? 'disabled' : '';
                    let jk = f.jk == 'p' ? 'Pria' : 'Wanita';
                    let status = f.status_reservasi == 1 ? 'Selesai' : 'Menunggu';
                    let color = f.status_reservasi == 1 ? 'success' : 'danger';

                    isiReservasi += `   <tr>
                                    <td class="align-middle text-center">`+ noReservasi + `</td>
                                    <td class="align-middle">`+ f.nama + `</td>
                                    <td class="align-middle text-center">`+ f.tgl_lahir + `</td>

                                    <td class="align-middle text-center">`+ usia(new Date(f.tgl_lahir)) + `</td>

                                    <td class="align-middle text-center">`+ jk + `</td>
                                  

                                    <td class="align-middle">`+ f.layanan + `</td>
                                    <td class="align-middle">`+ f.tanggal_terapi + `</td>
                                    <td class="align-middle text-`+ color + `">` + status + `</td>
                                  

                                    <td class="align-middle p-2">
                                        <button class="btn btn-sm btn-info mx-1" data-toggle="modal" data-target="#editReservasi`+ f.id_reservasi + `">Edit</button>

                                        <div class="modal fade" id="editReservasi`+ f.id_reservasi + `" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Reservasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="`+ statusReservase + `" method="POST">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <input type="text" value="`+ f.id_reservasi + `" hidden name="id">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="smaller">
                                                                        <div class="row text-dark">
                                                                            <div class="col-sm-2">
                                                                                <p>Nama</p>
                                                                            </div>
                                                                            <div class="col-sm-1 text-center">
                                                                                <p>:</p>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <p>`+ f.nama + `</p>
                                                                            </div>
                                                                            <div class="col-sm-1"></div>
                                                                            <div class="col-sm-2">
                                                                                <p>Tanggal Lahir</p>
                                                                            </div>
                                                                            <div class="col-sm-1 text-center">
                                                                                <p>:</p>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <p>`+ f.tgl_lahir + `</p>
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
                                                                                <p>`+ f.email + `</p>
                                                                            </div>
                                                                            <div class="col-sm-1"></div>
                                                                            <div class="col-sm-2">
                                                                                <p>Agama</p>
                                                                            </div>
                                                                            <div class="col-sm-1 text-center">
                                                                                <p>:</p>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <p>`+ f.agama + `</p>
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
                                                                                <p>`+ f.whatsapp + `</p>
                                                                            </div>
                                                                            <div class="col-sm-1"></div>
                                                                            <div class="col-sm-2">
                                                                                <p>Jenis Kelamin</p>
                                                                            </div>
                                                                            <div class="col-sm-1 text-center">
                                                                                <p>:</p>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <p>`+ jk + `</p>

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
                                                                                <p>`+ f.alamat + `</p>
                                                                            </div>
                                                                            <div class="col-sm-1"></div>
                                                                            <div class="col-sm-2">
                                                                                <p>Kota</p>
                                                                            </div>
                                                                            <div class="col-sm-1 text-center">
                                                                                <p>:</p>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <p>`+ f.kota + `</p>
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
                                                                                <p>`+ f.provinsi + `</p>
                                                                            </div>
                                                                            <div class="col-sm-1"></div>
                                                                            <div class="col-sm-2">
                                                                                <p>Negara</p>
                                                                            </div>
                                                                            <div class="col-sm-1 text-center">
                                                                                <p>:</p>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <p>`+ f.negara + `</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <label class="mt-3" for="">Tujuan Terapi</label>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <select name="terapi" `+ statusDisable + ` id="" class="form-control" required> `;
                    data.layanan.forEach(l => {
                        let selected = l.id == f.id_layanan ? 'selected' : '';

                        isiReservasi += ` <option ` + selected + ` value="` + l.id + `">` + l.layanan + `</option>`
                    });



                    isiReservasi += ` </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <label class="mt-3" for="">Tanggal Terapi</label>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="input-group date">
                                                                        <input type="text" `+ statusDisable + ` required name="tanggal_terapi" class="form-control datepicker mt-2" value="` + f.tanggal_terapi + `">
                                                                        <div class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-th"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <label class="mt-3" for="">Status</label>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <div class="input-group status">
                                                                        <select name="status" `+ statusDisable + ` id="" class="form-control mt-2" required>
                                                                                <option selected value="`+ f.status + `">` + status + `</option>
                                                                                <option value="0">Menunggu</option>
                                                                                <option value="1">Selesai</option>
                                                                           
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="<?= $d['status'] == 1 ? 'Status yang sudah selesai, tidak dapat diupdate' : '' ?>">
                                                                <button type="submit" `+ statusDisable + ` class="btn btn-primary">Update</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <button data-delete="`+ f.id_reservasi + `" class="btn btn-danger deleteReservasi btn-sm">Delete</button>
                                    </td>
                                </tr>`;
                    noReservasi++;
                });
                let isiHistoryPembayaran = '';
                let noHistoryPembayaran = 1;
                let jk = '';
                let statusPayment = '';
                let colorPayment = '';
                data.historyPembayaran.forEach(hp => {
                    jk = hp.jk == 'w' ? 'Wanita' : 'Pria';
                    statusPayment = hp['status_payment'] == 1 ? 'Selesai' : 'Menunggu';
                    colorPayment = hp['status_payment'] == 1 ? 'success' : 'danger';
                    isiHistoryPembayaran += `  <tr>
                                                    <td class="align-middle text-center">`+ noHistoryPembayaran + `</td>
                                                    <td class="align-middle">`+ hp['nama'] + `</td>
                                                    <td class="align-middle text-center">`+ hp['tgl_lahir'] + `</td>
                                                    <td class="align-middle text-center">`+ usia(new Date(hp.tgl_lahir)) + `</td>
                                                    <td class="align-middle text-center">`+ jk + `</td>
                                                    <td class="align-middle">`+ hp['layanan'] + `</td>
                                                    <td class="align-middle">`+ hp['tanggal_terapi'] + `</td>
                                                    <td class="align-middle text-`+ colorPayment + `">` + statusPayment + `</td>
                                                    <td class="align-middle p-2 text-nowrap">
                                                        <div class="row">
                                                            <div class="col">
                                                                <button class="btn btn-primary detNota" data-rekam="`+ hp['id_reservasi'] + `" data-bs-toggle="modal" data-bs-target="#pembayaran` + hp['id_reservasi'] + `">Lihat Nota</button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="pembayaran`+ hp['id_reservasi'] + `" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">History Pembayaran</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">

                                                                                <div class="sidebar-header d-flex  align-items-center px-3 py-4">
                                                                                    <img class="rounded-pill img-fluid" width="65" src="`+ base_url + `/assets/image/logo1.jpeg" alt="">
                                                                                    <div class="ms-2">
                                                                                        <h5 class="fs-6 mb-0">
                                                                                            <a class="text-decoration-none" href="#">Sari Kusuma 99</a>
                                                                                        </h5>
                                                                                        <p class="mt-1 mb-0">Sehat Optimal | Ibadah Sempurna</p>
                                                                                    </div>
                                                                                    <hr>

                                                                                </div>

                                                                                <div class="row mb-5">
                                                                                    <div class="col">
                                                                                        <div class="smaller">
                                                                                            <div class="row text-dark">
                                                                                                <div class="col-sm-2">
                                                                                                    <p>Nama</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1 text-center">
                                                                                                    <p>:</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>`+ hp['nama'] + `</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1"></div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>Tanggal Lahir</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1 text-center">
                                                                                                    <p>:</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>`+ hp['tgl_lahir'] + `</p>
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
                                                                                                    <p>`+ hp['email'] + `</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1"></div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>Agama</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1 text-center">
                                                                                                    <p>:</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>`+ hp['agama'] + `</p>
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
                                                                                                    <p>`+ hp['whatsapp'] + `</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1"></div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>Jenis Kelamin</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1 text-center">
                                                                                                    <p>:</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2">
                                                                                                        <p>`+ jk + `</p>
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
                                                                                                    <p>`+ hp['alamat'] + `</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1"></div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>Kota</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1 text-center">
                                                                                                    <p>:</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>`+ hp['kota'] + `</p>
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
                                                                                                    <p>`+ hp['provinsi'] + `</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1"></div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>Negara</p>
                                                                                                </div>
                                                                                                <div class="col-sm-1 text-center">
                                                                                                    <p>:</p>
                                                                                                </div>
                                                                                                <div class="col-sm-2">
                                                                                                    <p>`+ hp['negara'] + `</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="row">
                                                                                    <div class="col-sm-2">Tanggal Terapi</div>
                                                                                    <div class="col-sm-1 text-center">:</div>
                                                                                    <div class="col-sm-3">`+ hp['tanggal_terapi'] + `</div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-2">Tanggal</div>
                                                                                    <div class="col-sm-1 text-center">:</div>
                                                                                    <div class="col-sm-3">`+ hp['date_created'] + `</div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-sm-2">Layanan</div>
                                                                                    <div class="col-sm-1 text-center">:</div>
                                                                                    <div class="col-sm-3">`+ hp['layanan'] + `</div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <table class="table table-bordered">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Pelayanan</th>
                                                                                                    <th>Harga</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody class="detail_nota">
                                                                                                <tr>
                                                                                                    <td></td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                            <tfoot class="detail_nota_footer"></tfoot>

                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row metodePembayaran">
                                                                                    <h5>Metode Pembayaran</h5>
                                                                                    <div class="col-sm-1 text-center">
                                                                                        <button class="btn btn-primary cash">Cash</button>

                                                                                        <button class="btn btn-info ewalet">e-Wallet</button>
                                                                                    </div>

                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>`;
                });
                let isiPemeriksan = '';
                let np = 1;
                let status_reservasi = '';
                let jkReservasi = '';
                data.pemeriksaan.forEach(p => {
                    status_reservasi = p['status_reservasi'] == 1 ? 'Selesai' : 'Menunggu';
                    color_reservasi = p['status_reservasi'] == 1 ? 'success' : 'danger';
                    color_reservasi = p['status_reservasi'] == 1 ? 'success' : 'danger';
                    jkReservasi = p['jk'] == 'w' ? 'Wanita' : 'Pria';
                    isiPemeriksan += `  <tr>
                                            <td class="align-middle text-center">`+ np + `</td>
                                            <td class="align-middle">`+ p['nama'] + `</td>
                                            <td class="align-middle text-center">`+ p['tgl_lahir'] + `</td>
                                            <td class="align-middle text-center">`+ usia(new Date(p.tgl_lahir)) + `</td>
                                            <td class="align-middle text-center">`+ jkReservasi + `</td>
                                           

                                            <td class="align-middle">`+ p['layanan'] + `</td>
                                            <td class="align-middle">`+ p['tanggal_terapi'] + `</td>
                                            <td class="align-middle text-`+ color_reservasi + `">` + status_reservasi + `</td>
                                            <td class="align-middle p-2 text-nowrap">

                                                <div class="row">
                                                    <div class="col">
                                                        <a href="`+ base_url + `/admin/kelolaRekamMedis/` + p['id_reservasi'] + `/` + p['iduser'] + `" class="btn btn-info mt-1 kelolaRekamMedis btn-sm" target="_blank">Lihat Rekam Medis</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>`;
                    np++;
                });



                $('.dataUserRegistered').html(isi);
                $('.dataUserLaporanRekamMedis').html(isiLaporanRekamMEdis);
                $('.tableReservasi').html(isiReservasi);
                $('.loadDataTransaksi').html(isiHistoryPembayaran);
                let URL = window.location.href;
                var arr = URL.split('/');//arr[0]='example.com'
                if (arr[5] == 'historyRekamMedis') {
                    $('.tablePemeriksaan').html(isiReservasi);
                } else {
                    $('.tablePemeriksaan').html(isiPemeriksan);
                }



                $('.tabledata ').dataTable();




            }
        })
    })
    function getDate() {
        var today = new Date();

        document.getElementsByClassName("sampai").value = ('0' + (today.getMonth() + 1)).slice(-2) + '/' + ('0' + today.getDate()).slice(-2) + '/' + today.getFullYear();


    }
    $('.no_ktp').removeClass('is-invalid');
    $('.daftar_pasien').click(function () {
        let ktp = $('.no_ktp').val();
        cek_ktp(ktp)
    })
    $('.no_ktp').change(function () {
        let ktp = $(this).val();
        cek_ktp(ktp)
    });

    function cek_ktp(ktp) {
        $.ajax({
            url: base_url + '/admin/cekUser',
            method: 'post',
            data: {
                ktp: ktp
            },
            beforeSend: function () {

            },
            success: function (data) {
                $('.no_ktp').removeClass('is-invalid');
                if (data == 1) {
                    Swal.fire({
                        title: "Stop!",
                        text: "NIK Ini Sudah Terdaftar",
                        icon: "error"
                    });
                    $('.no_ktp').addClass('is-invalid');
                    return false;
                } else {
                    $('.no_ktp').addClass('is-valid');
                }
            }
        })
    }






})


