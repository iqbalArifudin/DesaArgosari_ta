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
                                        class="form-control" value="<?= $a->alasan; ?>">
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
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses">Diproses
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
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
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>

                                    <?php elseif ($a->status == "Diproses") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa">Diajukan Ke
                                        Kepala Desa
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Ditolak">Ditolak
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diproses" checked>Diproses
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>

                                    <?php elseif ($a->status == "Selesai") : ?>
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
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai" checked>Selesai
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
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Selesai">Selesai
                                    </div>
                                    <?php endif ?>
                                </div>
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

                                <?php endforeach ?>
                                <p>
                                    <hr>
                                    <a href="<?= base_url("admin/akta_kelahiran/pdf"); ?>" class="btn btn-warning"><i
                                            class="fa fa-print"></i>&nbsp;&nbsp;Cetak</a>
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