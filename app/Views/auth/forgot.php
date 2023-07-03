<?= $this->extend('auth/layout/index') ?>

<?= $this->section('content') ?>

<main>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-lg-4">
                <h1 class="text-center mb-3">Monkey Forest Ubud</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="pt-4">
                            <h1 class="text-center">Lupa Password</h1>
                            <br>
                            <form action="<?= url_to('forgot') ?>" method="post">
                                <?= csrf_field() ?>
                                <form class="row g-3 needs-validation">
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Email" required>
                                            <div class="invalid-feedback">Masukkan email yang valid!</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Kirim Instruksi</button>
                                    </div>
                                    <br>
                                    <?php if ($config->activeResetter) : ?>
                                        <div class="col-12">
                                            <p class="small mb-0">Kembali ke <a href="<?= url_to('login') ?>">Login</a></p>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </section>

    </div>
</main><!-- End #main -->

<?= $this->endSection() ?>