<?= $this->extend('users/layoutuser/index') ?>

<?= $this->section('content') ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <video muted autoplay plays-inline loop class="back-video">
        <source src="<?= base_url(); ?>/assets/user/img/c.mp4" type="video/mp4">
    </video>
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Welcome To Ubud</h1>
        <h2>Promoted as an arts and culture centre, it has developed a large tourism industry.</h2>
        <a href="#about" class="btn-get-started scrollto">Explore</a>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Header ======= -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                    <img src="assets/user/img/monke.png" class="img-fluid" alt="">
                </div>
                <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">About Ubud</h3>
                    <p data-aos="fade-up">
                        <b></b>
                    </p>
                    <div class="icon-box" data-aos="fade-up">
                        <i class="bx bx-receipt"></i>
                        <h4></h4> <br>
                        <p>Monkey Forest Ubud is located within the village of Padangtegal, which owns it.
                        </p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-cube-alt"></i>
                        <h4></h4>
                        <p>There are many interesting places that you can see here. Apart from around 700 monkeys, you can also see 186 species of trees in the 12.5 hectare forest, which allows you to get an abundance of fresh air.</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4></h4>
                        <p>Villagers view the Monkey Forest as an important spiritual, economic, educational and conservation center for the village.</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="places" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Places</h2>
                <p></p>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="member">
                        <img src="assets/user/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Tanah Gajah</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/user/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/user/img/team/ssssssteam-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->


</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info align-center">
                        <h3>Kecamatan Ubud</h3>
                        <p>
                            Ubud,<br>
                            Gianyar Regency, Bali 80571<br><br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#about">About</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#places">Places</a></li>
                    </ul>
                </div>

                <div class="col-lg-7 col-md-6 footer-newsletter">
                    <h4>Location</h4>
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31568.272567771484!2d115.24543987789102!3d-8.496068164084782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d739f22c9c3%3A0x54a38afd6b773d1c!2sUbud%2C%20Gianyar%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1687927097483!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>FURRBIAN</span></strong>. All Rights Reserved
        </div>
    </div>

    <?= $this->endSection() ?>