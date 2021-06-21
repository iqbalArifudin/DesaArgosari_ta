<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-address-card"></i>
    Pelayanan KTP &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-edit"></i>
    Edit Data KTP
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Isi Form Pengaduan Dibawah Ini!</strong></center>
                        </div>
                        <div class="card-body">
                            <?php foreach ($ktp as $k) : ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_ktp" value="<?= $k->id_ktp; ?>">
                                <?php endforeach ?>
                                <?php foreach ($penduduk as $j) : ?>
                                <div class="form-row">
                                    <label for="nama"><strong>NO. Kartu Keluarga</strong></label>
                                    <input type="text" name="keterangan" placeholder="" autocomplete="off"
                                        class="form-control" required value="<?= $j->no_KK; ?>" readonly>
                                </div>
                                <P>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NAMA</strong></label>
                                        <input type="text" name="nama" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->nama; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>NIK</strong></label>
                                        <input type="text" name="NIK" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->NIK; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Tempat</strong></label>
                                        <input type="text" name="tempat_lahir" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->tempat_lahir; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama"><strong>Tanggal Lahir</strong></label>
                                        <input type="text" name="tanggal_lahir" placeholder="" autocomplete="off"
                                            class="form-control" required value="<?= $j->tanggal_lahir; ?>" readonly>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <p>

                                    <?php foreach ($ktp as $p) : ?>
                                <p>
                                <div class="form-row">
                                    <label for="nama_barang"><strong>Keterangan</strong></label>
                                    <input type="text" name="keterangan" id="keterangan" autocomplete="off"
                                        class="form-control" value="<?= $p->keterangan; ?>" required>
                                </div>
                                <p>
                                <div class="form-row">
                                    <label for="satuan"><strong>Surat Pengantar RT / RW</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="surat_rt_rw"
                                            name="surat_rt_rw">
                                        <label class="custom-file-label" for="customFile"><?= $p->surat_rt_rw ?></label>
                                        <?= form_error('surat_rt_rw', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <p>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/foto_ktp/') . $p->surat_rt_rw ?>"
                                        style="width:400px; ">
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Foto Copy KK</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fc_kk" name="fc_kk">
                                        <label class="custom-file-label" for="customFile"><?= $p->fc_kk ?></label>
                                        <?= form_error('fc_kk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <img src="<?= base_url('assets/foto_ktp/') . $p->fc_kk ?>" style="width:400px; ">
                                </div>
                                <?php endforeach ?>
                                <hr>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                    <button type="reset" class="btn btn-danger"><i
                                            class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    <a href="<?= base_url("user/LayananKtp"); ?>" class="btn btn-info"><i
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