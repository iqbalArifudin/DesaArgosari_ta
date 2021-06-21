<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Argosari</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/logo kab.png" rel="icon">
    <link href="<?= base_url(); ?>assets/img/logo kab.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><span>DESA ARGOSARI</span></>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="<?php echo base_url() . 'user/home' ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'user/Berita' ?>">Berita</a></li>
                    <li><a href="<?php echo base_url() . 'user/Galeri' ?>">Galeri</a></li>
                    <li><a href="<?php echo base_url() . 'user/Pelayanan_Pengaduan' ?>">Pelayanan dan Pengaduan</a></li>
                    <li><a href="<?php echo base_url() . 'user/SejarahDesa' ?>">Profil Desa</a></li>
                    <li class="drop-down"><a href="">Pemerintahan Desa</a>
                        <ul>
                            <li><a href="<?php echo base_url() . 'user/VisiMisi' ?>">Visi dan Misi</a></li>
                            <li><a href="<?php echo base_url() . 'user/Struktur' ?>">Pemerintah Desa</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url() . 'user/Kontak' ?>">Contact</a></li>
                    <li>
                        <div class="float-right">
                            <a href="<?php echo base_url() . 'Login' ?>" class="btn btn-primary rounded-pill">Login</a>
                        </div>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">DESA ARGOSARI - JABUNG</h2>
                    <p class="animate__animated animate__fadeInUp">Desa Argosari adalah sebuah desa terdiri dari 3
                        Padukuhan yakni pateguhan, gentong, dan bendrong yang
                        berada di
                        wilayah Kecamatan Jabung, Kabupaten Malang, Provinsi Jawa Timur.</p>
                    <a href="<?php echo base_url() . 'Login' ?>"
                        class="btn-get-started animate__animated animate__fadeInUp">LOGIN</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">DESA ARGOSARI - JABUNG</h2>
                    <p class="animate__animated animate__fadeInUp">Desa Argosari adalah sebuah desa terdiri dari 3
                        Padukuhan yakni pateguhan, gentong, dan bendrong yang
                        berada di
                        wilayah Kecamatan Jabung, Kabupaten Malang, Provinsi Jawa Timur. </p>
                    <a href="<?php echo base_url() . 'Login' ?>"
                        class="btn-get-started animate__animated animate__fadeInUp">LOGIN</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">DESA ARGOSARI - JABUNG</h2>
                    <p class="animate__animated animate__fadeInUp">Desa Argosari adalah sebuah desa terdiri dari 3
                        Padukuhan yakni pateguhan, gentong, dan bendrong yang
                        berada di
                        wilayah Kecamatan Jabung, Kabupaten Malang, Provinsi Jawa Timur. </p>
                    <a href="<?php echo base_url() . 'Login' ?>"
                        class="btn-get-started animate__animated animate__fadeInUp">LOGIN</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->