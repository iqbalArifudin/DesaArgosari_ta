<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-newspaper"></i>
    Pelayanan KK
</div>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <p>
                    <table id="dataTable" class="table table-striped">
                        <thead class="table table-striped">
                            <tr>
                                <th>NO</th>
                                <th>NAMA KEPALA KELUARGA</th>
                                <th>NIK</th>
                                <th>TANGGAL MENGAJUKAN</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kk as $kk) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kk->nama_kpl ?></td>
                                <td><?= $kk->NIK_kpl ?></td>
                                <td><?= $kk->tgl_mengajukan ?></td>
                                <td><span class="badge badge-warning"><?= $kk->status ?></span></td>
                                <td>

                                    <?php if ($kk->status == "Ditolak") : ?>
                                    <a btn btn-info href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_kk/edit/' . $kk->id_kepala_kel) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($kk->status == "Diproses") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_kk/edit/' . $kk->id_kepala_kel) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($kk->status == "Selesai") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_kk/edit/' . $kk->id_kepala_kel) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($kk->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_kk/edit/' . $kk->id_kepala_kel) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($kk->status == "Diajukan") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_kk/edit/' . $kk->id_kepala_kel) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($kk->status == "Diajukan Ke Ketua RW") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/Pelayanan_kk/edit/' . $kk->id_kepala_kel) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php else : ?>
                                    <a class='btn btn-info'
                                        href='<?= base_url().'admin/Pelayanan_kk/edit/'.$kk->id_kepala_kel?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-hourglass-half"
                                            aria-hidden="true"><span>&nbsp;Proses</span></i>
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
                Mohon maaf data pengajuan tidak dapat di Proses karena telah ditolak.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalDelete3">
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
                Mohon maaf data pengajuan tidak dapat Diproses.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>