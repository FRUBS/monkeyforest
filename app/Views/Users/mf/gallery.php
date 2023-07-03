<?= $this->extend('users/layoutuser/mf') ?>

<?= $this->section('content') ?>
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
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
            <?php foreach ($gallery as $row) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-landscape">
                    <div class="portfolio-wrap">
                        <img style="width: auto; height: 400px; object-fit: cover;" src="/uploads/gallery/<?= $row->sampul; ?>">
                        <div class="portfolio-info">
                            <h4><?= $row->judul ?></h4>
                            <p><?= $row->kategori ?></p>
                            <div class="portfolio-links">
                                <a href="assets/user/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
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
    <?= $this->endSection() ?>