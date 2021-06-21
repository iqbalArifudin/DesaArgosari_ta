    <main id="main">

        <section class="features">
            <div class="container">
                <div class="section-title">
                    <h2>INFORMASI</h2>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="<?= base_url(); ?>assets/img/features-3.svg" class="img-fluid" alt="">
                    </div>
                    <?php foreach ($informasi as $i) : ?>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3><?= $i->keterangan ?></h3>
                        <p class="font-italic">
                            <?= $i->tanggal ?>
                        </p>
                    </div>
                    <?php endforeach ?>
                </div>
                <br>

                <div class="section-title">
                    <h2>VISI dan MISI</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="<?= base_url(); ?>assets/img/visi.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>VISI :</h3>
                        <p class="font-italic">
                            1. Terciptanya Masyarakat yang Mandiri dalam Pengelolaan Pembangunan Desa.
                        </p>
                        <h3>MISI :</h3>
                        <p class="font-italic">
                            1. MADEP , MANTEB , MANETEP , BERDAYA SAING.
                        </p>
                    </div>
                </div>
            </div>
        </section>

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
                                href='<?= base_url() . 'berita/detail/' . $ad->id_berita ?>'>
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

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="<?= base_url(); ?>assets/img/kantor desa 2.jpeg" class="img-fluid" alt="">
                        <a href="https://youtu.be/bJgJDLVKYcw" class="venobox play-btn mb-4" data-vbtype="video"
                            data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <h4 class="title"><a href="">SEJARAH DAN PROFIL DESA ARGOSARI</a></h4>
                            <p class="description">Desa Argosari berlokasi di daerah Kecamatan Jabung Kabupaten
                                Malang Jawa Timur. Desa Argosari memiliki 3 padukuhan yaitu Pateguhan, Gentong, dan
                                Bendrong. Desa Argosari terletak di daerah pegunungan dan perbukitan. Nama
                                Argosari diambil dari kata Argo berarti gunung dan sari diambil dari nama pedagang
                                terkenal di desa yaitu Ki Ageng Sari dan Nyi Ageng Sari.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->
    </main><!-- End #main -->