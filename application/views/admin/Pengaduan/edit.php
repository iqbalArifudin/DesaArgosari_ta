<div class="alert alert-primary" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i> Beranda &nbsp; &nbsp; > &nbsp; &nbsp;<i class="fas fa-fw fa-table"></i>
    Pengaduan &nbsp; &nbsp; > &nbsp; &nbsp; <i class="fas fa-eye"></i>Detail
</div>
<div class="nav-link">
    <div id="darkSwitch"></div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->

    <div class="card mb-3  border-bottom-primary">
        <div class="card-header py-3">
            <center>
                <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
            </center>
        </div>
        <br>
        <div class="row no-gutters">
            <div class="col-md-4">
                <?php foreach ($pengaduan as $p) : ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_pengaduan" value="<?= $p->id_pengaduan; ?>">
                    <input type="hidden" name="id_penduduk" value="<?= $p->id_penduduk; ?>">
                    <input type="hidden" name="NIK" value="<?= $p->NIK; ?>">
                    <img src="<?= base_url('assets/foto_pengaduan/') . $p->bukti ?>" class="card-img" alt="..."
                        width="100px">
            </div>


            <div class="col-md-8 ">
                <div class="card-body">
                    <h5 class="card-title text-dark"><b>Nama</b>&nbsp;:
                        <?= $p->nama ?>
                        <hr>
                        <h5 class="card-title text-dark"><b>Tanggal</b>
                            &nbsp;:
                            <?= date('d F Y', strtotime($p->tanggal)); ?> </h5>
                        <hr>
                        <h5 class="card-title text-dark"><b>Jenis Pengaduan</b>&nbsp;:
                            <?= $p->jenis_pengaduan ?></h5>
                        <hr>
                        <h5 class="card-title text-dark"><b>Keterangan Pengaduan
                            </b>&nbsp;: <?= $p->keterangan ?></h5>
                        <hr>
                        <h5 class="card-title text-dark"><b>Status Pengaduan</b> :
                            <span class="badge badge-warning"><?= $p->status ?></span>
                            <hr>
                        </h5>
                        <h5 class="card-title text-dark"><b>
                                <p>
                                <div class="form-group">
                                    <label for="nim"><strong>Ajukan</strong></label>
                                    <?php if ($p->status == "Diajukan Ke Kepala Desa") : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa"
                                            checked>AjukanKe Kepala Desa
                                    </div>

                                    <?php else : ?>
                                    <div class="form-check">
                                        <input type="radio" name="status" value="Diajukan Ke Kepala Desa">AjukanKe
                                        Kepala Desa
                                    </div>
                                    <?php endif ?>
                                </div>
                            </b>
                        </h5>
                        <hr>
                        <?php endforeach ?>
                        <p>
                            <button type="submit" name="submit" class="btn btn-success "><i
                                    class="fa fa-save"></i>&nbsp;&nbsp;Submit</button>
                            <a href="<?php echo base_url("admin/Pengaduan"); ?>" class="btn btn-primary">
                                <i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                </div>
            </div>
            </form>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->