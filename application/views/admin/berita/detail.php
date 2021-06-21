<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i
        class="fas fa-fw fa-chart-area"></i>
    Berita &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-eye"></i> Detail
</div>
<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <div class="card-header">
                            <center><strong>Detail Berita</strong></center>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php foreach ($berita as $pmj) : ?>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <img src="<?= base_url('assets/foto_berita/') . $pmj->foto_berita ?>"
                                            class="card-img-top" style="height: 370px;">
                                        <p>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <h5 class="card-title"><strong><?= $pmj->judul ?></strong></h5>
                                        <p class="card-text"><?= $pmj->keterangan ?></p>
                                        <p class="card-text"><small class="text-muted"><?= $pmj->tanggal ?></small>
                                        </p>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <p>
                                    <center><a href="<?= base_url("admin/berita/"); ?>" class="btn btn-info"> <i
                                                class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                                    </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>