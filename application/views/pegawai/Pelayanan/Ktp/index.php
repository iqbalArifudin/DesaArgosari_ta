<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i
        class="fas fa-address-card"></i>&nbsp;
    Pelayanan KTP
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?= $this->session->flashdata('message'); ?>
                    <table id="dataTable" class="table table-striped">
                        <thead class="table table-striped">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>STATUS</th>
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($ktp as $ktp) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ktp->nama ?></td>
                                <td><span class="badge badge-warning"><?= $ktp->status ?></span></td>
                                <td><?= $ktp->keterangan ?></td>
                                <td>
                                    <a class='btn btn-info'
                                        href='<?= base_url() . 'pegawai/Pelayanan_ktp/detail/' . $ktp->id_ktp ?>'
                                        class='btn btn-biru'>
                                        <i class="fas fa-eye" aria-hidden="true"><span>&nbsp;Detail</span></i>
                                    </a>

                                    <?php if ($ktp->status == "Ditolak") : ?>
                                    <a btn btn-warning href="#modalDelete2" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('pegawai/Pelayanan_ktp/edit/' . $ktp->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>


                                    <?php elseif ($ktp->status == "Selesai") : ?>
                                    <a btn btn-warning href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('pegawai/Pelayanan_ktp/edit/' . $ktp->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($ktp->status == "Diajukan Ke Ketua RW") : ?>
                                    <a btn btn-warning href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('pegawai/Pelayanan_ktp/edit/' . $ktp->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($ktp->status == "Diajukan") : ?>
                                    <a btn btn-warning href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('pegawai/Pelayanan_ktp/edit/' . $ktp->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php elseif ($ktp->status == "Diajukan Ke Pelayanan") : ?>
                                    <a btn btn-warning href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('pegawai/Pelayanan_ktp/edit/' . $ktp->id_ktp) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-hourglass-half" aria-hidden="true">&nbsp;Proses</i>
                                    </a>

                                    <?php else : ?>

                                    <a class='btn btn-warning'
                                        href='<?= base_url() . 'pegawai/Pelayanan_ktp/edit/' . $ktp->id_ktp ?>'
                                        class='btn btn-warning'>
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