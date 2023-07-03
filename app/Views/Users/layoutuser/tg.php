<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tanah Gajah Ubud</title>
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
                <h1><a class="nav-link scrollto active" href="<?= base_url('homepage'); ?>">Kecamatan Ubud</a></h1>
            </div>

            <?php if (in_groups('admin')) : ?>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="<?= base_url('#hero'); ?>">Home</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('/#about'); ?>">About</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('/#places'); ?>">Pricing</a></li>
                        <?php if (logged_in()) : ?>
                            <li class="dropdown"><a href="#"><span><?= user()->username; ?></span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="<?= base_url('/admin'); ?>">Go To Admin Page</a></li>
                                    <li><a class="nav-link scrollto" href="<?= base_url('logout'); ?>">Logout</a></li>
                                <?php else : ?>
                                    <li><a class="nav-link scrollto" href="<?= base_url('login'); ?>">Login</a></li>
                                <?php endif; ?>
                                </ul>
                            </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            <?php endif; ?>

            <?php if (in_groups('user')) : ?>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="<?= base_url('#hero'); ?>">Home</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('/#about'); ?>">About</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('/#places'); ?>">Places</a></li>
                        <?php if (logged_in(true)) : ?>
                            <li class="dropdown"><a href="#"><span><?= user()->username; ?></span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a class="nav-link scrollto" href="<?= base_url('logout'); ?>">Logout</a></li>
                                <?php else : ?>
                                    <li><a class="nav-link scrollto" href="<?= base_url('login'); ?>">Login</a></li>
                                <?php endif; ?>
                                </ul>
                            </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            <?php endif; ?>

        </div>
    </header><!-- End Header -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/user/js/main.js"></script>

</body>

</html>