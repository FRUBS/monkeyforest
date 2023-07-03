<?= $this->extend('users/layoutuser/tg') ?>

<?= $this->section('content') ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div id="carouselExampleSlidesOnly" class="carousel slide back-video" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(''); ?>/assets/user/img/blancomuseum/bm1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(''); ?>/assets/user/img/blancomuseum/bm2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(''); ?>/assets/user/img/blancomuseum/bm3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div class="container text-center text-md-left" data-aos="fade-up">
        <h1>Tanah Gajah Ubud</h1>
        <h2></h2>
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

    <!-- ======= Services Section ======= -->
    <section id="pricing" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Ticket Prices</h2>
                <p>Ticket prices here are different on <b>Weekdays</b> compared to <b>Weekends</b>.</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-user-pin"></i></div>
                        <h4 class="title">Weekday</h4>
                        <h4 class="title">Adult</h4>
                        <p class="description">Adult visitor ticket prices on weekdays <br><b>Rp. 80.000,-</b></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-user-pin"></i></div>
                        <h4 class="title">Weekday</h4>
                        <h4 class="title">Children</h4>
                        <p class="description">Children visitor ticket prices on weekdays <br><b>Rp. 60.000,-</b></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-fill mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-user-pin"></i></div>
                        <h4 class="title">Weekend</h4>
                        <h4 class="title">Adult</h4>
                        <p class="description">Adult visitor ticket prices on weekends <br><b>Rp. 100.000,-</b></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-user-pin"></i></div>
                        <h4 class="title">Weekend</h4>
                        <h4 class="title">Children</h4>
                        <p class="description">Children visitor ticket prices on weekends <br><b>Rp. 80.000,-</b></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">What is inside Monkey Forest Ubud? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Inside the Monkey Forest visitors can see <b>3 temples</b> (Pura Dalem or temple to worship Lord Shiva, Holy Water Temple, and Cremation Temple). Visitors can also see <b>various kinds of trees</b> and definitely <b>Monkeys</b>.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What is the concept of the Monkey Forest Ubud? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Monkey Forest uses the <b>“Tri Hita Karana”</b> concept.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What Is Tri Hita Karana? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tri Hita Karana is a traditional philosophy stating three ways to reach physical and spiritual well-being. When the concept of Tri Hita Karana is properly implemented, there will be harmonization on humans relationship with the Supreme God, harmonization on humans’ relationship with humans, and harmonizing the relationship between humans and his environment.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What is the type of the monkey?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                The type is known scientifically as Macaca fascicularis or Balinese long-tailed macaque.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Can visitors bring any plastic bag inside? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                We do apologize, please leave plastic bags at the ticket counter, because the monkey will grab it as they are curious.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->


</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info align-center">
                        <h3>Blanco Museum</h3>
                        <p>
                            Jl. Campuhan, Sayan<br>
                            Kabupaten Gianyar, Bali 80571<br><br>
                            <strong>Phone:</strong>(0361) 975502<br>
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
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#about">About</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#team">Team</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    </ul>
                </div>

                <div class="col-lg-7 col-md-6 footer-newsletter">
                    <h4>Location</h4>
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.942421378464!2d115.25154877611895!3d-8.504971886104569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d3de1f0053d%3A0x3c7b62c135ac609!2sThe%20Blanco%20Renaissance%20Museum!5e0!3m2!1sen!2sid!4v1687946987744!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>

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