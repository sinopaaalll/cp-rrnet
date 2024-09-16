<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-button">
                <a href="<?= base_url('admin/galeri/tambah') ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($galeris as $galeri) : ?>
                                        <tr>
                                            <td>
                                                <a class="fancybox" rel="ligthbox" href="<?= base_url('assets/uploads/galeri/') . $galeri->img ?>" title="<?= $galeri->title ?>">
                                                    <img src="<?= base_url('assets/uploads/galeri/' . $galeri->img)  ?>" style="width:100px">
                                                </a>
                                            </td>
                                            <td>
                                                <?= $galeri->title ?>
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/galeri/edit/' . $galeri->id)  ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/galeri/hapus/' . $galeri->id)  ?>" class="text-danger btn-hapus" data-id="<?= $galeri->id ?>">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>