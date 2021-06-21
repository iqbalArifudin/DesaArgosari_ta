<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-images"></i>
    Informasi &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-edit"></i> Edit Informasi
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

                        <?php foreach ($informasi as $i) : ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_informasi" value="<?= $i->id_informasi; ?>">

                            <div class="form-group">
                                <label for="merk">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    value="<?= $i->keterangan; ?>">
                            </div>

                            <br>
                            <?php endforeach ?>
                            <button type="submit" name="submit" class="btn btn-success "><i
                                    class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                            <a href="<?= base_url("admin/Informasi"); ?>" class="btn btn-info"><i
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