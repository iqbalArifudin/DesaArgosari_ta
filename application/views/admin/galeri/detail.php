<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-images"></i>
    Galeri &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-eye"></i> Detail
</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <!-- Main content -->
            <?php
            foreach ($galeri as $pmj) : ?>
            <div class="card" style="width: 50rem;">
                <img src="<?= base_url('assets/galeri/') . $pmj->foto ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?= $pmj->keterangan ?></p>
                </div>
                <a href="<?= base_url("admin/galeri/"); ?>" class="btn btn-primary"><i
                        class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>

<!-- /.card-body -->
<!-- /.container-fluid -->
</div>