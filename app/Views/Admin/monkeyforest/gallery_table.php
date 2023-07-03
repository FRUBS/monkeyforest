<?= $this->extend('admin/layoutadmin/index') ?>

<?= $this->section('content') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tables</h1>
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
            <h2 class="card-title">Gallery Data Tables</h2>
            <a href="/admin/monkeyforest/gallerytable/addphoto" type="button" class="btn btn-primary">
              Add Photos
            </a>
            <br>
            <br>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Preview</th>
                  <th scope="col">File Name</th>
                  <th scope="col">Category</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?= $i = 1; ?>
                <?php foreach ($gallery as $g) : ?>
                  <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><img src="/uploads/gallery/<?= $g['sampul']; ?>" width="150"></td>
                    <td><?= $g['judul']; ?></td>
                    <td><?= $g['kategori']; ?></td>
                    <td>
                      <a href="/admin/monkeyforest/gallerytable/editphoto/<?= $g['slug']; ?>" class="btn btn-info">Edit</a>
                      <form action="/admin/monkeyforest/gallerytable/<?= $g['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
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