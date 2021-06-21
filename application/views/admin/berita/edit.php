<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i
        class="fas fa-fw fa-chart-area"></i>
    Berita &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-edit"></i> Edit Berita
</div>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-header">
                        Form Edit Berita
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>

                        <?php foreach ($berita as $berita) : ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_berita" value="<?= $berita->id_berita; ?>">

                            <div class="form-group">
                                <label for="merk">Judul Berita</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="<?= $berita->judul; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    value="<?= $berita->keterangan; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Tanggal Update</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="<?= $berita->tanggal; ?>">
                            </div>

                            <label for="file_surat">Foto Berita</label>
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_berita" name="foto_berita">
                                <label class="custom-file-label" for="customFile"><?= $berita->foto_berita ?></label>
                                <?= form_error('foto_berita', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <p>

                            <div class="card" style="width: 18rem;">
                                <img src="<?= base_url('assets/foto_berita/') . $berita->foto_berita ?>"
                                    class="card-img-top" alt="...">
                            </div>

                            <br>
                            <br>
                            <?php endforeach ?>
                            <button type="submit" name="submit" class="btn btn-success "><i
                                    class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                            <a href="<?= base_url("admin/berita"); ?>" class="btn btn-info"><i
                                    class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
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