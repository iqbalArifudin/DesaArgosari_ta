<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan Akta Kelahiran &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>
    Detail
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Detail</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach ($akta as $a) : ?>

                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_akta" value="<?= $a->id_akta; ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Nama Yang Mengajukan</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $a->nama; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $a->NIK; ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="nama"><strong>Nama Akta Kelahiran</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $a->nama_akta; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Tempat Lahir</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $a->tempat_lahir_akta; ?>"
                                            readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Tanggal Lahir</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $a->tanggal_lahir_akta; ?>"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label for="nama"><strong>Tanggal Mengajukan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $a->tgl_mengajukan; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Status</strong></label>
                                    <input type="text" name="status" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $a->status; ?>" readonly>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label for="nama"><strong>Keterangan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $a->keterangan; ?>" readonly>
                                </div>
                                <br>

                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KK</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_kk ?>" class="card-img"
                                        alt="..." width="100px">
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KTP Ayah</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_ayah ?>"
                                        class="card-img" alt="..." width="100px">
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KTP Ibu</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_ibu ?>"
                                        class="card-img" alt="..." width="100px">
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KTP Saksi</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_saksi ?>"
                                        class="card-img" alt="..." width="100px">
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan Surat Kelahiran</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->surat_kelahiran ?>"
                                        class="card-img" alt="..." width="100px">
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan Surat Pengantar RT / RW</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->surat_rt_rw ?>"
                                        class="card-img" alt="..." width="100px">
                                </div>

                                <hr>
                                <div class="form-group">
                                    <label for="nim"><strong>Ajukan</strong></label>
                                    <?php if ($a->status == "Diajukan Ke Kepala Desa") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa"
                                            checked>Diajukan Ke Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>

                                    <?php elseif ($a->status == "Ditolak") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa">Diajukan Ke
                                        Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak" checked>Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>

                                    <?php elseif ($a->status == "Diproses") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses" checked>Diproses
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>

                                    <?php elseif ($a->status == "Disetujui") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>


                                    <?php else : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa">Diajukan Ke
                                        Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <?php endif ?>
                                </div>
                                <p>
                                <div class="form-row">
                                    <label for="nama"><strong>Alasan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" value="<?= $a->alasan; ?>">
                                </div>

                                <?php endforeach ?>
                                <p>
                                    <hr>

                                    <?php if ($a->status == "Diajukan Ke Kepala Desa") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/akta_kelahiran/pdf') ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-print" aria-hidden="true">&nbsp;Cetak</i>
                                    </a>

                                    <?php elseif ($a->status == "Ditolak") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/akta_kelahiran/pdf') ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-print" aria-hidden="true">&nbsp;Cetak</i>
                                    </a>

                                    <?php elseif ($a->status == "Diajukan Ke Pelayanan") : ?>
                                    <a btn btn-info href="#modalDelete3" data-toggle="modal"
                                        onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/akta_kelahiran/pdf' ) ?>')"
                                        class='btn btn-warning'>
                                        <i class="fa fa-print" aria-hidden="true">&nbsp;Cetak</i>
                                    </a>

                                    <?php else : ?>
                                    <a href="<?= base_url("admin/akta_kelahiran/pdf"); ?>" class="btn btn-warning"><i
                                            class="fa fa-print"></i>&nbsp;&nbsp;Cetak</a>

                                    <?php endif ?>
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Ajukan</button>
                                    <a href="<?= base_url("admin/akta_kelahiran"); ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                Mohon maaf data tidak dapat Dicetak, Karena Belum Disetujui oleh Kepala Desa.
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>