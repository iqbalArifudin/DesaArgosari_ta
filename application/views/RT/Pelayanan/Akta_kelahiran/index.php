<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-id-badge"></i>
    Pelayanan Akta Kelahiran
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                                <th>NAMA AKTA</th>
                                <th>KETERANGAN</th>
                                <th>TANGGAL MENGAJUKAN</th>
                                <th>STATUS</th>
                                <th>ALASAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($akta as $akta) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $akta->nama_akta ?></td>
                                <td><?= $akta->keterangan ?></td>
                                <td><?= $akta->tgl_mengajukan ?></td>
                                <td><span class="badge badge-warning"><?= $akta->status ?></span></td>
                                <td><?= $akta->alasan ?></td>
                                <td>

                                    <?php if ($akta->status == "Ditolak") : ?>
                                    <a btn btn-info href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('RT/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diproses") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('RT/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($akta->status == "Selesai") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('RT/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('RT/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Ketua RW") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('RT/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($akta->status == "Diajukan Ke Pelayanan") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('RT/akta_kelahiran/edit/' . $akta->id_akta) ?>')"
                                        class='btn btn-info'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php else : ?>

                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'RT/akta_kelahiran/edit/' . $akta->id_akta ?>'
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