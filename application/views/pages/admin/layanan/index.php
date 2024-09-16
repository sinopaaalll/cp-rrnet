<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-button">
                <a href="<?= base_url('admin/layanan/tambah') ?>" class="btn btn-primary">Tambah</a>
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
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($layanans as $layanan) : ?>
                                        <tr>
                                            <td>
                                                <a class="fancybox" rel="ligthbox" href="<?= base_url('assets/uploads/layanan/') . $layanan->img ?>" title="<?= $layanan->title ?>">
                                                    <img src="<?= base_url('assets/uploads/layanan/' . $layanan->img)  ?>" style="width:100px">
                                                </a>
                                            </td>
                                            <td>
                                                <?= $layanan->title ?>
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/layanan/lihat/' . $layanan->id)  ?>">Lihat</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/layanan/edit/' . $layanan->id)  ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/layanan/hapus/' . $layanan->id)  ?>" class="text-danger btn-hapus" data-id="<?= $layanan->id ?>">Hapus</a>
                                                </div>
                                            </td>

                                            <td><?= date("d M Y", strtotime($layanan->times)) ?></td>
                                            <td>
                                                <span class="badge badge-<?= $layanan->status == 1 ? "primary" : "danger" ?>">
                                                    <?= $layanan->status == 1 ? "Aktif" : "Tidak Aktif" ?>
                                                </span>
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