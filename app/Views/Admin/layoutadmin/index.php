<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kecamatan Ubud | Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/admin/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/admin/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= base_url('admin'); ?>" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Ubud // Admin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6></h6>
                            <span><b></b></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('admin/profile'); ?>">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('homepage'); ?>">
                                <i class="bi bi-question-circle"></i>
                                <span>Go To User Website</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('logout') ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('admin'); ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Ubud Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <!-- <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li> -->
                    <li>
                        <a href="<?= base_url('admin/ubud/infotable'); ?>">
                            <i class="bi bi-circle"></i><span>Info Data </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/ubud/gallerytable'); ?>">
                            <i class="bi bi-circle"></i><span>Gallery Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/ubud/placestable'); ?>">
                            <i class="bi bi-circle"></i><span>F.A.Q Data</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Monkey Forest Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <!-- <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li> -->
                    <li>
                        <a href="<?= base_url('admin/monkeyforest/infotable'); ?>">
                            <i class="bi bi-circle"></i><span>Info Data </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/monkeyforest/gallerytable'); ?>">
                            <i class="bi bi-circle"></i><span>Gallery Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/monkeyforest/faqtable'); ?>">
                            <i class="bi bi-circle"></i><span>F.A.Q Data</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Blanco Museum Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <!-- <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li> -->
                    <li>
                        <a href="<?= base_url('admin/blancomuseum/infotable'); ?>">
                            <i class="bi bi-circle"></i><span>Info Data </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/blancomuseum/gallerytable'); ?>">
                            <i class="bi bi-circle"></i><span>Gallery Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/blancomuseum/faqtable'); ?>">
                            <i class="bi bi-circle"></i><span>F.A.Q Data</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tanah Gajah Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <!-- <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li> -->
                    <li>
                        <a href="<?= base_url('admin/tanahgajah/infotable'); ?>">
                            <i class="bi bi-circle"></i><span>Info Data </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/tanahgajah/gallerytable'); ?>">
                            <i class="bi bi-circle"></i><span>Gallery Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/tanahgajah/faqtable'); ?>">
                            <i class="bi bi-circle"></i><span>F.A.Q Data</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/list'); ?>">
                    <i class="bi bi-grid"></i>
                    <span>User List</span>
                </a>
            </li><!-- End Dashboard Nav -->
        </ul>
    </aside><!-- End Sidebar-->

    <?= $this->renderSection('content'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url(); ?>assets/admin/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url(); ?>assets/admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url(); ?>assets/admin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>assets/admin/js/main.js"></script>

</body>

</html>