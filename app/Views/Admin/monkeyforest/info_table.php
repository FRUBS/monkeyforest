<?= $this->extend('admin/layoutadmin/index') ?>

<?= $this->section('content') ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Info Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Info Data</h2>
                        <a href="" type="button" class="btn btn-primary">
                            Add Information
                        </a>
                        <br>
                        <br>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?= $i = 1; ?>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $user->preview; ?></td>
                                        <td><?= $user->judul; ?></td>
                                        <td><?= $user->kategori; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info">Detail</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?= $this->endSection() ?>