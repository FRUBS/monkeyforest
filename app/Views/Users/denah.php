<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Monkey Forest Ubud | Gallery</title>
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
                <h1><a class="nav-link scrollto active" href="#hero">Monkey Forest</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url(''); ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/#about'); ?>">About</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/#pricing'); ?>">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/#team'); ?>">Team</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('/gallery'); ?>">Gallery</a></li>
                    <li><a class="nav-link scrollto active" href="<?php base_url('/denah') ?>">Places</a></li>
                    <?php if (logged_in()) : ?>
                        <li><a class="nav-link scrollto" href="<?= base_url('logout') ?>">Logout</a></li>
                    <?php else : ?>
                        <li><a class="nav-link scrollto" href="<?= base_url('login') ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio ">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>Collection of Images That Have Been Captured By Kelompok 6</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-landscape">Landscape</li>
                        <li data-filter=".filter-portrait">Portrait</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-landscape">
                    <div class="portfolio-wrap">
                        <!-- <img src="assets/user/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""> -->
                        <div class="portfolio-info">
                            <h4>Landscape 1</h4>
                            <p>Landscape</p>
                            <div class="portfolio-links">
                                <a href="assets/user/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info align-center">
                            <h3>Monkey Forest Ubud</h3>
                            <p>
                                Jl. Monkey Forest, Ubud,<br>
                                Kabupaten Gianyar, Bali 80571<br><br>
                                <strong>Telepon:</strong> (0361) 971304<br>
                                <strong>Email:</strong> yogaraharja2007@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.instagram.com/monkeyforestsanctuaryubud/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="<?= base_url(''); ?>">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="<?= base_url('/#about'); ?>">About</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="<?= base_url('/#pricing'); ?>">Pricing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="<?= base_url('/#team'); ?>">Team</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="<?= base_url('/gallery'); ?>">Gallery</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-7 col-md-6 footer-newsletter">
                        <h4>Lokasi</h4>
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63135.803580017724!2d115.19866489595354!3d-8.500571935398993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d43f6189b67%3A0xb6ec43164befc356!2sSacred%20Monkey%20Forest%20Sanctuary!5e0!3m2!1sen!2sid!4v1684983938454!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FURRBIAN</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/user/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/user/vendor/php-email-form/validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/user/js/main.js"></script>

</body>

</html>