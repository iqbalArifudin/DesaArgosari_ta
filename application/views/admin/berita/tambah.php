<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i
        class="fas fa-fw fa-chart-area"></i>
    Berita &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-plus-square"></i> Tambah Berita
</div>
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
                            Form Tambah Berita
                        </div>
                        <div class="card-body">
                            <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <br>

                                <div class="form-group">
                                    <label for="nim">Judul Berita</label>
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                                </div>

                                <div class="form-group">
                                    <label for="nim">Tanggal Update</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                                </div>
                                <label for="">Foto Berita</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto_berita" name="foto_berita"
                                        required autofocus>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <!-- <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                </div>
                                <p>
                                    <center>
                                        <button type="submit" name="submit" class="btn btn-success "><i
                                                class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                        <a href="<?= base_url("admin/berita"); ?>" class="btn btn-info"><i
                                                class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                    </center>
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