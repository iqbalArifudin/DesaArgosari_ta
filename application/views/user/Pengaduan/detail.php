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
                        <h5 class="card-title text-dark"><b>Status Pengaduan
                            </b>&nbsp;: <span class="badge badge-warning"><?= $p->status ?></span></h5>
                        <hr>
                        <h5 class="card-title text-dark"><b>Alasan
                            </b>&nbsp;: <?= $p->alasan ?></h5>
                        <hr>
                        <?php endforeach ?>
                        <p>
                            <a href="<?php echo base_url("user/Pengaduan"); ?>" class="btn btn-primary"> <i
                                    class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
                        </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->