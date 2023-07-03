<?= $this->extend('admin/layoutadmin/index') ?>

<?= $this->section('content') ?>
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Photo</h5>
                        <form action="/admin/monkeyforest/gallerytable/updatephoto/<?= $gallery['id']; ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="slug" value="<?= $gallery['slug']; ?>">
                            <form>
                                <div class="row mb-3">
                                    <label for="judul" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" placeholder="Title" autofocus value="<?= $gallery['judul']; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('judul'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" placeholder="Description" name="deskripsi" autofocus value="<?= $gallery['deskripsi']; ?>">
                                        <div class=" invalid-feedback">
                                            <?= $validation->getError('deskripsi'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row md-3">
                                    <label for="Category" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-2">
                                        <select type="text" class="form-select <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" id="kategori" name="kategori" value="<?= $gallery['kategori']; ?>">
                                            <option selected disabled value="">Category</option>
                                            <option>Landscape</option>
                                            <option>Portrait</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kategori'); ?>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row mb-3">
                                    <label for="Sampul" class="col-sm-2 col-form-label">Photos</label>
                                    <div class="col-sm-2">
                                        <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" placeholder="Upload Photos" value="<?= $gallery['sampul']; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('sampul'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="button" name="cancel" class="btn btn-secondary" value="Cancel" onClick="window.location='<?= base_url('/admin/monkeyforest/gallerytable'); ?>'" />
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </form><!-- End Horizontal Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?= $this->endSection() ?>