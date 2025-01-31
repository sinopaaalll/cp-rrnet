<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-button">
                <a href="<?= base_url('admin/paket/tambah') ?>" class="btn btn-primary">Tambah</a>
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
                                        <th width="5%">No</th>
                                        <th width="50%">Nama Paket</th>
                                        <th width="45%">Deskripsi Paket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pakets as $paket) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <?= $paket->name ?>
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/paket/edit/' . $paket->id)  ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/paket/hapus/' . $paket->id)  ?>" class="text-danger btn-hapus" data-id="<?= $paket->id ?>">Hapus</a>
                                                </div>
                                            </td>
                                            <td><?= $paket->desc ? html_entity_decode($paket->desc) : "-" ?></td>
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