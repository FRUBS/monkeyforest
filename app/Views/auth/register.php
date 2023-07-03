<?= $this->extend('auth/layout/index'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-lg-4">
                <h1 class="text-center mb-3">Monkey Forest Ubud</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="pt-4">
                            <h1 class="text-center">Register</h1>
                            <?= view('Myth\Auth\Views\_message_block') ?>
                        </div>
                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required>
                                    <div class="invalid-feedback">Enter the valid email!</div>
                                </div>

                                <div class="col-12">
                                    <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required>
                                        <div class=" invalid-feedback">Enter username</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="password"><?= lang('Auth.password') ?></label>
                                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required>
                                    <div class="invalid-feedback">Enter password!</div>
                                </div>

                                <div class="col-12">
                                    <label for="pass_confirm">Repeat Password</label>
                                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="Ulangi Password" autocomplete="off" required>
                                    <div class="invalid-feedback">Enter password!</div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.register') ?></button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have account? <a href="<?= url_to('login') ?>">Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">



    </div>
</main><!-- End #main -->

<?= $this->endSection(); ?>