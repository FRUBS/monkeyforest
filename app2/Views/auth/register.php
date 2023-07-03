<?= $this->extend('auth/layout/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Monkey Forest Ubud</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4"><?= lang('Auth.register') ?></h5>
                                    <p class="text-center small"></p>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= url_to('register') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
                                            <div class="invalid-feedback">Masukkan alamat email yang valid</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required>
                                                <div class=" invalid-feedback">Masukkan username</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password"><?= lang('Auth.password') ?></label>
                                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required>
                                            <div class="invalid-feedback">Masukkan password!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="pass_confirm">Ulangi Password</label>
                                            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Ulangi Password" autocomplete="off" required>
                                            <div class="invalid-feedback">Masukkan password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">Saya setuju dan menerima <a href="#">syarat dan ketentuan</a></label>
                                                <div class="invalid-feedback">Anda harus setuju sebelum submit.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.register') ?></button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Sudah punya akun? <a href="<?= url_to('login') ?>">Login</a></p>
                                        </div>
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<?= $this->endSection(); ?>