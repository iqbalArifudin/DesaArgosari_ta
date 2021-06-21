<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-fw fa-table"></i>
    Pengaduan
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <h2 class="h5 align-middle m-0 font-weight-bold text-dark">
                        Data Pengaduan
                    </h2>
                    <p>
                    <p>
                        <a class='btn btn-primary' href="Pengaduan/tambahpengaduan">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <span>
                                Tambah Pengaduan
                            </span>
                        </a>
                    <table id="dataTable" class="table table-bordered">
                        <thead class="table table-bordered">
                            <tr>
                                <th>NO</th>
                                <th>TANGGAL</th>
                                <th>JENIS PENGADUAN</th>
                                <th>KETERANGAN PENGADUAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pengaduan as $pengaduan) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pengaduan->tanggal ?></td>
                                <td><?= $pengaduan->jenis_pengaduan ?></td>
                                <td><?= $pengaduan->keterangan ?></td>
                                <td><span class="badge badge-warning"><?= $pengaduan->status ?></span></td>
                                <td>

                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'user/Pengaduan/detail/' . $pengaduan->id_pengaduan ?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span>&nbsp;Detail</span></i>
                                    </a>


                                    <?php if ($pengaduan->status == "Disetujui") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/Pengaduan/hapus/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php elseif ($pengaduan->status == "Diproses") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/Pengaduan/hapus/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php elseif ($pengaduan->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a class='btn btn-danger' href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete2 #formDelete').attr('action', '<?= site_url('user/Pengaduan/hapus/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>

                                    <?php else : ?>
                                    <a class='btn btn-danger' href="#modalDelete" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('user/Pengaduan/hapus/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-danger btn-circle'>
                                        <i class="fa fa-trash" aria-hidden="true">&nbsp;Hapus</i>
                                    </a>
                                    <?php endif ?>

                                    <!---Edit -->
                                    <?php if ($pengaduan->status == "Disetujui") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/Pengaduan/edit/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($pengaduan->status == "Diproses") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/Pengaduan/edit/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($pengaduan->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit2 #formDelete').attr('action', '<?= site_url('user/Pengaduan/edit/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($pengaduan->status == "Selesai") : ?>
                                    <a class='btn btn-warning' href="#modalEdit2" data-toggle="modal"
                                        onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/Pengaduan/edit/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php elseif ($pengaduan->status == "Ditolak") : ?>
                                    <a class='btn btn-warning' href="#modalEdit3" data-toggle="modal"
                                        onclick="$('#modalEdit #formDelete').attr('action', '<?= site_url('user/Pengaduan/edit/' . $pengaduan->id_pengaduan) ?>')"
                                        class='btn btn-warning btn-circle'>
                                        <i class="fa fa-edit" aria-hidden="true">&nbsp;Edit</i>
                                    </a>

                                    <?php else : ?>

                                    <a class='btn btn-warning'
                                        href="<?= base_url() . 'user/Pengaduan/edit/' . $pengaduan->id_pengaduan ?>">
                                        <i class="fas fa-edit" aria-hidden="true"><span> Edit</span></i>
                                    </a>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
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
                Mohon maaf data Pengaduan Anda tidak dapat di hapus karena telah diproses.
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
                Mohon maaf data pengaduan Anda tidak dapat di Edit karena telah diproses.
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
                Mohon maaf data pengaduan tidak dapat di Edit karena telah ditolak.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>