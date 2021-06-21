<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-fw fa-table"></i>
    Data Penduduk &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-plus"></i>&nbsp;Tambah penduduk
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Form Tambah Data Penduduk </strong></center>
                        </div>
                        <div class="card-body">
                            <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="NIK"><strong>NIK (Nomor Induk Kependudukan)</strong></label>
                                        <input type="text" class="form-control" id="NIK" name="NIK" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="no_KK"><strong>NO. KK (Kartu Keluarga)</strong></label>
                                        <input type="text" class="form-control" id="no_KK" name="no_KK" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="nama"><strong>Nama</strong></label>
                                    <input type="text" name="nama" placeholder="" autocomplete="off"
                                        class="form-control" required>
                                </div>
                                <p>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tempat_lahir"><strong>Tempat Lahir</strong></label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tanggal_lahir"><strong>Tanggal Lahir</strong></label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                            required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nim"><strong>Agama</label></strong>
                                        <div class="form-check">
                                            <input type="radio" name="agama" value="Islam"> Islam
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="agama" value="Khonghucu"> Khonghucu
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="agama" value="Katolik"> Katolik
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="agama" value="Buddha"> Buddha
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="agama" value="Protestan"> Protestan
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="agama" value="Hindu"> Hindu
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nim"><strong>Status</label></strong>
                                        <div class="form-check">
                                            <input type="radio" name="status_perkawinan" value="Belum Kawin">Belum Kawin
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status_perkawinan" value="Kawin"> Kawin
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="nim"><strong>Pekerjaan</label></strong>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                </div>
                                <p>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nim"><strong>Gol Darah</label></strong>
                                        <div class="form-check">
                                            <input type="radio" name="gol_darah" value="AB"> AB
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="gol_darah" value="O"> O
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="gol_darah" value="A"> A
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="gol_darah" value="B"> B
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nim"><strong>Jenis Kelamin</label></strong>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" value="Laki - Laki"> LAKI - LAKI
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="jenis_kelamin" value="Perempuan"> PEREMPUAN
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nim"><strong>Alamat</label></strong>
                                    <p><em>* Isi dengan nama Dusun</em></p>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                                <p>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nim"><strong>RT</label></strong>
                                        <input type="text" class="form-control" id="RT" name="RT">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nim"><strong>RW</label></strong>
                                        <input type="text" class="form-control" id="RW" name="RW">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <label for="satuan"><strong>Foto</strong></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto" autofocus>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                    </div>
                                </div>
                                <p>

                                <div class="form-row">
                                    <label for="nim"><strong>Password</label></strong>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <p>

                                <div class="form-group">
                                    <label for="nim"><strong>Hak Akses</label></strong>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="Admin"> ADMIN
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="Pegawai"> PEGAWAI
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="Penduduk"> PENDUDUK
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="RT"> RT
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="RW"> RW
                                    </div>
                                </div>


                                <hr>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-success "><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                                    <button type="reset" class="btn btn-danger"><i
                                            class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
                                    <a href="<?= base_url("admin/penduduk"); ?>" class="btn btn-info"><i
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