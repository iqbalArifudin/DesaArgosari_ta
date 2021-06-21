<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan Kartu Keluarga &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
    Detail
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 m-0 text-gray-800">Detail Data Kartu Keluarga</h1>
                </div>
                <div class="float-right">
                    <a href="<?= base_url('user/LayananKK') ?>" class="btn btn-primary btn-sm"><i
                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                </div>
            </div>
            <hr>

            <h5> Data Pengajuan Kepala Keluarga :</h5>
            <br>
            <?php foreach ($kepala as $k) : ?>

            <div class="row">
                <div class="col">
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr>
                                <th>Nama Kepala</th>
                                <th>NIK</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <?php foreach ($kepala as $k) : ?>
                            <td><?= $k->nama_kpl ?></td>
                            <td><?= $k->NIK_kpl ?></td>
                            <td><?= $k->alamat_kpl ?></td>
                            <td><?= $k->kelurahan_kpl ?></td>
                            <td>
                                <a class='btn btn-warning'
                                    href="<?= base_url() . 'user/LayananKK/detail_all/' . $k->id_kepala_kel ?>">
                                    <i class="fas fa-eye" aria-hidden="true"><span>
                                            Detail Keluarga</span></i>
                                </a>
                            </td>
                            <?php endforeach ?>
                        </tfoot>
                    </table>
                </div>
            </div>
            <center>
                <!-- <a class='btn btn-info' href="<?= base_url() . 'user/LayananKK/tambahKel/' . $k->id_kepala_kel ?>">
                    <i class="fas fa-plus" aria-hidden="true"><span>
                            Tambah Data Anggota Keluarga</span></i>
                </a> -->

                <?php if ($k->status == "Disetujui") : ?>
                <a class='btn btn-info' href="#modaltambah" data-toggle="modal"
                    onclick="$('#modaltambah #formDelete').attr('action', '<?= site_url('user/LayananKK/tambahKel/' . $k->id_kepala_kel) ?>')"
                    class='btn btn-warning btn-circle'>
                    <i class="fa fa-plus" aria-hidden="true">&nbsp; Tambah Data Anggota Keluarga</i>
                </a>

                <?php elseif ($k->status == "Diproses") : ?>
                <a class='btn btn-info' href="#modaltambah" data-toggle="modal"
                    onclick="$('#modaltambah #formDelete').attr('action', '<?= site_url('user/LayananKK/tambahKel/' . $k->id_kepala_kel) ?>')"
                    class='btn btn-warning btn-circle'>
                    <i class="fa fa-plus" aria-hidden="true">&nbsp; Tambah Data Anggota Keluarga</i>
                </a>

                <?php elseif ($k->status == "Diajukan Ke Kepala Desa") : ?>
                <a class='btn btn-info' href="#modaltambah" data-toggle="modal"
                    onclick="$('#modaltambah #formDelete').attr('action', '<?= site_url('user/LayananKK/tambahKel/' . $k->id_kepala_kel) ?>')"
                    class='btn btn-warning btn-circle'>
                    <i class="fa fa-plus" aria-hidden="true">&nbsp; Tambah Data Anggota Keluarga</i>
                </a>

                <?php elseif ($k->status == "Diajukan Ke Ketua RW") : ?>
                <a class='btn btn-info' href="#modaltambah" data-toggle="modal"
                    onclick="$('#modaltambah #formDelete').attr('action', '<?= site_url('user/LayananKK/tambahKel/' . $k->id_kepala_kel) ?>')"
                    class='btn btn-warning btn-circle'>
                    <i class="fa fa-plus" aria-hidden="true">&nbsp; Tambah Data Anggota Keluarga</i>
                </a>

                <?php elseif ($k->status == "Diajukan Ke Pelayanan") : ?>
                <a class='btn btn-info' href="#modaltambah" data-toggle="modal"
                    onclick="$('#modaltambah #formDelete').attr('action', '<?= site_url('user/LayananKK/tambahKel/' . $k->id_kepala_kel) ?>')"
                    class='btn btn-warning btn-circle'>
                    <i class="fa fa-plus" aria-hidden="true">&nbsp; Tambah Data Anggota Keluarga</i>
                </a>

                <?php elseif ($k->status == "Selesai") : ?>
                <a class='btn btn-info' href="#modaltambah" data-toggle="modal"
                    onclick="$('#modaltambah #formDelete').attr('action', '<?= site_url('user/LayananKK/tambahKel/' . $k->id_kepala_kel) ?>')"
                    class='btn btn-warning btn-circle'>
                    <i class="fa fa-plus" aria-hidden="true">&nbsp; Tambah Data Anggota Keluarga</i>
                </a>

                <?php elseif ($k->status == "Ditolak") : ?>
                <a class='btn btn-info' href="#modaltambah" data-toggle="modal"
                    onclick="$('#modaltambah #formDelete').attr('action', '<?= site_url('user/LayananKK/tambahKel/' . $kk->id_kepala_kel) ?>')"
                    class='btn btn-warning btn-circle'>
                    <i class="fa fa-plus" aria-hidden="true">&nbsp; Tambah Data Anggota Keluarga</i>
                </a>

                <?php else : ?>
                <a class='btn btn-info' href="<?= base_url() . 'user/LayananKK/tambahKel/' . $k->id_kepala_kel ?>">
                    <i class="fas fa-plus" aria-hidden="true"><span> Tambah Data Anggota Keluarga</span></i>
                </a>

                <?php endif ?>
            </center>
            <p>

                <?php endforeach ?>
            <h5> Data Pengajuan Keluarga :</h5>
            <br>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tempat / Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <?php foreach ($kk as $kk) : ?>
                            <td><?= $kk->nama_kel ?></td>
                            <td><?= $kk->NIK_kel ?></td>
                            <td><?= $kk->tempat_lahir ?> / <?= $kk->tanggal_lahir ?></td>
                            <td>
                                <?php if ($kk->status == "Disetujui") : ?>
                                <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                    onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/LayananKK/hapusKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>

                                <?php elseif ($kk->status == "Diproses") : ?>
                                <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                    onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/LayananKK/hapusKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>

                                <?php elseif ($kk->status == "Diajukan Ke Kepala Desa") : ?>
                                <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                    onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/LayananKK/hapusKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>

                                <?php elseif ($kk->status == "Diajukan Ke Ketua RW") : ?>
                                <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                    onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/LayananKK/hapusKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>

                                <?php elseif ($kk->status == "Diajukan Ke Pelayanan") : ?>
                                <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                    onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/LayananKK/hapusKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>

                                <?php elseif ($kk->status == "Selesai") : ?>
                                <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                    onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/LayananKK/hapusKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>

                                <?php else : ?>
                                <a class='btn btn-danger' href="#modalDelete" data-toggle="modal"
                                    onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/LayananKK/hapusKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-danger btn-circle'>
                                    <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                </a>

                                <?php endif ?>

                                <!--EDIT-->
                                <!---Edit -->
                                <?php if ($kk->status == "Disetujui") : ?>
                                <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                    onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/LayananKK/editKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-warning btn-circle'>
                                    <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                </a>

                                <?php elseif ($kk->status == "Diproses") : ?>
                                <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                    onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/LayananKK/editKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-warning btn-circle'>
                                    <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                </a>

                                <?php elseif ($kk->status == "Diajukan Ke Kepala Desa") : ?>
                                <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                    onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/LayananKK/editKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-warning btn-circle'>
                                    <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                </a>

                                <?php elseif ($kk->status == "Diajukan Ke Ketua RW") : ?>
                                <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                    onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/LayananKK/editKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-warning btn-circle'>
                                    <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                </a>

                                <?php elseif ($kk->status == "Diajukan Ke Pelayanan") : ?>
                                <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                    onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/LayananKK/editKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-warning btn-circle'>
                                    <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                </a>

                                <?php elseif ($kk->status == "Selesai") : ?>
                                <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                    onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/LayananKK/editKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-warning btn-circle'>
                                    <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                </a>

                                <?php elseif ($kk->status == "Ditolak") : ?>
                                <a class='btn btn-warning' href="#modalEdit3" data-toggle="modal"
                                    onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/LayananKK/editKel/' . $kk->id_keluarga) ?>')"
                                    class='btn btn-warning btn-circle'>
                                    <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                </a>

                                <?php else : ?>
                                <a class='btn btn-warning'
                                    href="<?= base_url() . 'user/LayananKK/editKel/' . $kk->id_keluarga ?>">
                                    <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                </a>

                                <?php endif ?>
                                <a class='btn btn-info'
                                    href="<?= base_url() . 'user/LayananKK/detailKel/' . $kk->id_keluarga ?>">
                                    <i class="fas fa-eye" aria-hidden="true"><span>
                                            Detail</span></i>
                                </a>



                            </td>
                            <?php endforeach ?>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalDelete2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf data pengajuan Anda tidak dapat di hapus karena telah diproses.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Konfirmasi Hapus Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalEdit2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf data pengajuan Anda tidak dapat di Edit karena telah diproses.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEdit3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf data pengajuan tidak dapat di Edit karena telah ditolak.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal TAMBAH -->
<div class="modal fade" id="modaltambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <div class="text-danger"><b>Peringatan !</b></div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Mohon maaf tidak dapat menambah data karena telah diproses.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>