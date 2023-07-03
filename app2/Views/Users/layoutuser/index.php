<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Maxim Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/user/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets/user/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets/user/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Maxim
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="index.html">Monkey Forest</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#services">Pelayanan</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Harga</a></li>
                    <li><a class="nav-link scrollto" href="#team">Kelompok</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="#book">Pesan Sekarang</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Selamat Datang Di Monkey Forest</h1>
            <h2>Mandala Suci Wenara Wana</h2>
            <a href="#about" class="btn-get-started scrollto">Jelajahi</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <?= $this->renderSection('content'); ?>

        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?= base_url(); ?>/assets/user/vendor/aos/aos.js"></script>
        <script src="<?= base_url(); ?>/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>/assets/user/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="<?= base_url(); ?>/assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="<?= base_url(); ?>/assets/user/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="<?= base_url(); ?>/assets/user/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="<?= base_url(); ?>/assets/user/js/main.js"></script>

</body>

</html>