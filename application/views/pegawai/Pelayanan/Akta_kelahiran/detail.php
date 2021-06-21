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
                                    <label for="nama"><strong>Alasan</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $a->alasan; ?>" readonly>
                                </div>
                                <hr>

                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KK</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_kk ?>" class="card-img"
                                        alt="..." width="100px">
                                    <p>
                                        <br>
                                        <a class='btn btn-dark'
                                            href="<?php echo base_url() . 'pegawai/akta_kelahiran/downloadkk/' . $a->id_akta; ?>">
                                            <i class="fas fa-download" aria-hidden="true"><span> Download</span></i>
                                        </a>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KTP Ayah</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_ayah ?>"
                                        class="card-img" alt="..." width="100px">
                                    <p>
                                        <br>
                                        <a class='btn btn-dark'
                                            href="<?php echo base_url() . 'pegawai/akta_kelahiran/downloadktp_a/' . $a->id_akta; ?>">
                                            <i class="fas fa-download" aria-hidden="true"><span> Download</span></i>
                                        </a>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KTP Ibu</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_ibu ?>"
                                        class="card-img" alt="..." width="100px">
                                    <p>
                                        <br>
                                        <a class='btn btn-dark'
                                            href="<?php echo base_url() . 'pegawai/akta_kelahiran/downloadktp_i/' . $a->id_akta; ?>">
                                            <i class="fas fa-download" aria-hidden="true"><span> Download</span></i>
                                        </a>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan KTP Saksi</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_saksi ?>"
                                        class="card-img" alt="..." width="100px">
                                    <p>
                                        <br>
                                        <a class='btn btn-dark'
                                            href="<?php echo base_url() . 'pegawai/akta_kelahiran/downloadktp_s/' . $a->id_akta; ?>">
                                            <i class="fas fa-download" aria-hidden="true"><span> Download</span></i>
                                        </a>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <label for="nama"><strong>Persyaratan Surat Kelahiran</strong></label>
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->surat_kelahiran ?>"
                                        class="card-img" alt="..." width="100px">
                                    <p>
                                        <br>
                                        <a class='btn btn-dark'
                                            href="<?php echo base_url() . 'pegawai/akta_kelahiran/downloadktp_sk/' . $a->id_akta; ?>">
                                            <i class="fas fa-download" aria-hidden="true"><span> Download</span></i>
                                        </a>
                                </div>

                                <?php endforeach ?>
                                <p>
                                    <hr>

                                    <a href="<?= base_url("pegawai/akta_kelahiran/pdf"); ?>" class="btn btn-success"><i
                                            class="fa fa-print"></i>&nbsp;&nbsp;Cetak</a>
                                    <a href="<?= base_url("pegawai/akta_kelahiran"); ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>