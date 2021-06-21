<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-fw fa-table"></i>
    Pengaduan &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-plus-square"></i>
    Tambah Data Pengaduan
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
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php foreach($penduduk as $j):?>
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
                                <?php endforeach ?>
                                <p>
                                <div class="form-row">
                                    <label for="id_pengaduan"><strong>Jenis Pengaduan</strong></label>
                                    <select name="jenis_pengaduan" id="jenis_pengaduan" class="form-control" required>
                                        <option value="" selected disabled>Pilih Jenis Pengaduan</option>
                                        <option value="Sarana Pra Sarana">Sarana Pra Sarana</option>
                                        <option value="Administrasi">Administrasi</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <p>
                                <div class="form-row">
                                    <label for="satuan"><strong>Keterangan</strong></label>
                                    <textarea class="form-control" rows="3" name="keterangan"></textarea>
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="satuan"><strong>Bukti</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="bukti" name="bukti" required
                                            autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                    <button type="reset" class="btn btn-danger"><i
                                            class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    <a href="<?=base_url("user/Pengaduan");?>" class="btn btn-info"><i
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