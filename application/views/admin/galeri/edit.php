<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-images"></i>
    Galeri &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-edit"></i> Edit Galeri
</div>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-header">
                        Form Edit
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>

                        <?php foreach ($galeri as $galeri) : ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_berita" value="<?= $galeri->id_galeri; ?>">

                            <div class="form-group">
                                <label for="merk">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    value="<?= $galeri->keterangan; ?>">
                            </div>

                            <div class="form-group">
                                <label for="merk">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                    value="<?= $galeri->tanggal; ?>">
                            </div>

                            <label for="file_surat">Foto</label>
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="customFile"><?= $galeri->foto ?></label>
                                <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <p>

                            <div class="card" style="width: 18rem;">
                                <img src="<?= base_url('assets/galeri/') . $galeri->foto ?>" class="card-img-top"
                                    alt="...">
                            </div>

                            <br>
                            <br>
                            <?php endforeach ?>
                            <button type="submit" name="submit" class="btn btn-success "><i
                                    class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                            <a href="<?= base_url("admin/galeri"); ?>" class="btn btn-info"><i
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