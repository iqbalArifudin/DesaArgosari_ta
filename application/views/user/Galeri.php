<section class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>GALERI KEGIATAN</h2>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($galeri as $ad) : ?>
            <div class="col-lg-4 col-md-6 filter-app">
                <div class="portfolio-item">
                    <img src="<?= base_url('assets/galeri/') . $ad->foto ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div>
                            <a href="<?= base_url('assets/galeri/') . $ad->foto ?>" data-gall="portfolioGallery"
                                class="venobox" title="<?= $ad->keterangan ?>"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach ?>
        </div>
    </div>
</section><!-- End Portfolio Section -->