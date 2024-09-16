<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-button">
                <a href="<?= base_url('admin/slider/tambah') ?>" class="btn btn-primary">Tambah</a>
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
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sliders as $slider) : ?>
                                        <tr>
                                            <td>
                                                <a class="fancybox" rel="ligthbox" href="<?= base_url('assets/uploads/slider/') . $slider->img ?>" title="<?= $slider->title ?>">
                                                    <img src="<?= base_url('assets/uploads/slider/' . $slider->img)  ?>" style="width:100px">
                                                </a>
                                            </td>
                                            <td>
                                                <?= $slider->title ?>
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/slider/edit/' . $slider->id)  ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/slider/hapus/' . $slider->id)  ?>" class="text-danger btn-hapus" data-id="<?= $slider->id ?>">Hapus</a>
                                                </div>
                                            </td>

                                            <td><?= $slider->desc ?></td>
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