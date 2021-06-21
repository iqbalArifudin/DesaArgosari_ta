<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan Akta Kelahiran &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-plus-square"></i>
    Tambah Data Akta Kelahiran
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Form Tambah Data Akta Kelahiran </strong></center>
                        </div>
                        <div class="card-body">
                            <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <label for="nama_akta"><strong>Nama Akta Kelahiran</strong></label>
                                    <input type="text" name="nama_akta" placeholder="" autocomplete="off"
                                        class="form-control" required>
                                </div>
                                <p>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tempat_lahir_akta"><strong>Tempat Lahir</strong></label>
                                        <input type="text" class="form-control" id="tempat_lahir_akta"
                                            name="tempat_lahir_akta" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tanggal_lahir_akta"><strong>Tanggal Lahir</strong></label>
                                        <input type="date" class="form-control" id="tanggal_lahir_akta"
                                            name="tanggal_lahir_akta" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="keterangan"><strong>Keterangan</strong></label>
                                    <input type="text" name="keterangan" placeholder="" autocomplete="off"
                                        class="form-control">
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Upload Foto KK</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_kk" name="fc_kk" required
                                            autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Upload Foto Ktp Ayah</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_ktp_ayah" name="fc_ktp_ayah"
                                            required autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Upload Foto Ktp Ibu</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_ktp_ibu" name="fc_ktp_ibu"
                                            required autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Upload Foto Ktp Saksi</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_ktp_saksi"
                                            name="fc_ktp_saksi" required autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Upload Foto Surat Kelahiran dari Rumah
                                            Sakit</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="surat_kelahiran"
                                            name="surat_kelahiran" required autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Upload Surat dari RT / RW
                                        </strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="surat_rt_rw" name="surat_rt_rw"
                                            required autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>
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