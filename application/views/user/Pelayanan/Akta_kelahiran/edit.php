<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan Akta Kelahiran &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-edit"></i>
    Edit Data Akta Kelahiran
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Isi Form Akta Kelahiran Dibawah Ini!</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach ($akta as $a) : ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_akta" value="<?= $a->id_akta; ?>">
                                <p>
                                <div class="form-row">
                                    <label for="nama_akta"><strong>Nama Akta Kelahiran</strong></label>
                                    <input type="text" name="nama_akta" id="nama_akta" autocomplete="off"
                                        class="form-control" value="<?= $a->nama_akta; ?>" required>
                                </div>
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tempat_lahir_akta"><strong>Tempat Lahir</strong></label>
                                        <input type="text" name="tempat_lahir_akta" id="tempat_lahir_akta"
                                            autocomplete="off" class="form-control"
                                            value="<?= $a->tempat_lahir_akta; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tanggal_lahir_akta"><strong>Tanggal Lahir</strong></label>
                                        <input type="date" name="tanggal_lahir_akta" id="tanggal_lahir_akta"
                                            autocomplete="off" class="form-control" required
                                            value="<?= $a->tanggal_lahir_akta; ?>">
                                    </div>
                                </div>
                                <p>
                                <div class="form-row">
                                    <label for="nama_barang"><strong>Keterangan</strong></label>
                                    <input type="text" name="keterangan" id="keterangan" autocomplete="off"
                                        class="form-control" value="<?= $a->keterangan; ?>">
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Foto KK</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_kk" name="fc_kk">
                                        <label class="custom-file-label" for="customFile"><?= $a->fc_kk ?></label>
                                        <?= form_error('fc_kk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_kk ?>"
                                        style="width:400px; ">
                                </div>
                                <hr>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Foto KTP Ayah</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_ktp_ayah"
                                            name="fc_ktp_ayah">
                                        <label class="custom-file-label" for="customFile"><?= $a->fc_ktp_ayah ?></label>
                                        <?= form_error('fc_ktp_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_ayah ?>"
                                        style="width:400px; ">
                                </div>
                                <hr>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Foto KTP Ibu</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_ktp_ibu" name="fc_ktp_ibu">
                                        <label class="custom-file-label" for="customFile"><?= $a->fc_ktp_ibu ?></label>
                                        <?= form_error('fc_ktp_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_ibu ?>"
                                        style="width:400px; ">
                                </div>
                                <hr>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Foto KTP Saksi</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_ktp_saksi"
                                            name="fc_ktp_saksi">
                                        <label class="custom-file-label"
                                            for="customFile"><?= $a->fc_ktp_saksi ?></label>
                                        <?= form_error('fc_ktp_saksi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->fc_ktp_saksi ?>"
                                        style="width:400px; ">
                                </div>
                                <p>
                                <div class="form-row">
                                    <label for="satuan"><strong>Foto Surat Kelahiran</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="surat_kelahiran"
                                            name="surat_kelahiran">
                                        <label class="custom-file-label"
                                            for="customFile"><?= $a->surat_kelahiran ?></label>
                                        <?= form_error('surat_kelahiran', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->surat_kelahiran ?>"
                                        style="width:400px; ">
                                </div>
                                <p>
                                <div class="form-row">
                                    <label for="satuan"><strong>Foto Surat RT / RW</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="surat_rt_rw"
                                            name="surat_rt_rw">
                                        <label class="custom-file-label" for="customFile"><?= $a->surat_rt_rw ?></label>
                                        <?= form_error('surat_rt_rw', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/persyaratan_akta/') . $a->surat_rt_rw ?>"
                                        style="width:400px; ">
                                </div>
                                <hr>


                                <?php endforeach ?>
                                <p>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                    <button type="reset" class="btn btn-danger"><i
                                            class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    <a href="<?= base_url("user/akta_kelahiran"); ?>" class="btn btn-info"><i
                                            class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
</script>