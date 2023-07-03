<?= $this->extend('auth/layout/index') ?>

<?= $this->section('content') ?>

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
                                    <h2 class="card-title text-center pb-0 fs-4"><?= lang('Auth.loginTitle') ?></h2>
                                    <p class="text-center small"></p>

                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form action="<?= url_to('login') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <form class="row g-3 needs-validation" novalidate>
                                        <?php if ($config->validFields === ['email']) : ?>
                                            <div class="col-12">
                                                <label for="login"><?= lang('Auth.email') ?></label>
                                                <div class="input-group has-validation">
                                                    <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.login') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="col-12">
                                                <label for="login" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Username" required>
                                                    <div class="invalid-feedback">Masukkan username yang valid</div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-12">
                                            <label for="password"><?= lang('Auth.password') ?></label>
                                            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" required>
                                            <div class="invalid-feedback">Masukkan password yang valid</div>
                                        </div>
                                        <?php if ($config->allowRemembering) : ?>
                                            <div class="col-12">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                    <?= lang('Auth.rememberMe') ?>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <br>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.loginAction') ?></button>
                                        </div>
                                        <?php if ($config->activeResetter) : ?>
                                            <div class="col-12">
                                                <p class="small mb-0"><a href="<?= url_to('forgot') ?>">Lupa Password?</a></p>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($config->allowRegistration) : ?>
                                            <br>
                                            <div class="col-12">
                                                <p class="small mb-0">Belum punya akun? <a href="<?= url_to('register') ?>">Register</a></p>
                                            </div>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<?= $this->endSection() ?>