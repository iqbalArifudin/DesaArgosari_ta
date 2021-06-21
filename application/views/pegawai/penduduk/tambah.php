<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Tambah Data Penduduk
                        </div>
                        <div class="card-body">
                            <?php if (validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nim">NIK</label>
                                    <input type="text" class="form-control" id="NIK" name="NIK" required>
                                </div>

                                <div class="form-group">
                                    <label for="nim">No KK</label>
                                    <input type="text" class="form-control" id="no_KK" name="no_KK" required>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>

                                <div class="form-group">
                                    <label for="nim">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                </div>

                                <div class="form-group">
                                    <label for="nim">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>

                                <div class="form-group">
                                    <label for="nim">Agama</label>
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

                                <div class="form-group">
                                    <label for="nim">Status</label>
                                    <div class="form-check">
                                        <input type="radio" name="status_perkawinan" value="Belum Kawin">Belum Kawin
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="status_perkawinan" value="Kawin"> Kawin
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                </div>

                                <div class="form-group">
                                    <label for="nim">Gol Darah</label>
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

                                <div class="form-group">
                                    <label for="nim">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input type="radio" name="jenis_kelamin" value="Laki - Laki"> LAKI - LAKI
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan"> PEREMPUAN
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Alamat</label>
                                    <p><em>* Isi Dusun</em></p>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>

                                <div class="form-group">
                                    <label for="nim">RT</label>
                                    <input type="text" class="form-control" id="RT" name="RT">
                                </div>

                                <div class="form-group">
                                    <label for="nim">RW</label>
                                    <input type="text" class="form-control" id="RW" name="RW">
                                </div>

                                <div class="form-group">
                                    <label for="nim">Desa</label>
                                    <input type="text" class="form-control" id="desa" name="desa">
                                </div>

                                <div class="form-group">
                                    <label for="nim">Kecamatan</label>
                                    <input type="text" class="form-control" id="Kecamatan" name="Kecamatan">
                                </div>

                                <label for="">Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" required
                                        autofocus>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                </div>
                                <p>

                                <div class="form-group">
                                    <label for="nim">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>

                                <div class="form-group">
                                    <label for="nim">Hak Akses</label>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="Admin"> ADMIN
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="Pegawai"> PEGAWAI
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="hak_akses" value="Penduduk"> PENDUDUK
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                                <a href="<?=base_url("pegawai/penduduk");?>" class="btn btn-info">Cancel</a>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->