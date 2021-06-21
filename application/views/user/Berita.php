<section class="services">
    <div class="section-title">
        <h2>BERITA - BERITA</h2>
    </div>
    <div class="row justify-content-center">
        <?php foreach ($berita as $ad) : ?>
        <div class="card-page  mr-3 mb-3" style="width:440px; height:600px">
            <center><img src="<?= base_url('assets/foto_berita/') . $ad->foto_berita ?>"
                    style="width:300px; height:330px;">
                <br>
            </center>

            <center>
                <hr width="90%">
            </center>
            <div class="text-muted">
                <center>
                    <h5><?= $ad->judul ?></h5>
                    <small>Tanggal Pembuatan
                        :&nbsp; <?= date('d-m-Y H:i:s', strtotime($ad->tanggal)); ?></small>
                    <br>
                    <br>

                    <a class="btn btn-primary rounded-pill fixed"
                        href='<?= base_url() . 'user/Berita/detail/' . $ad->id_berita ?>'>
                        <i class="fas fa-eye"></i> Baca Selengkapnya
                    </a>
                </center>
            </div>

            <center>
                <br>
            </center>
        </div>
        <?php endforeach ?>

    </div>
</section>