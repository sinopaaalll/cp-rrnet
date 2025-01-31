<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
            <div class="section-header-button">
                <a href="<?= base_url('admin/detail_paket/tambah') ?>" class="btn btn-primary">Tambah</a>
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
                                        <th width="">Judul</th>
                                        <th width="">Sub Judul</th>
                                        <th width="">Harga</th>
                                        <th width="">Paket</th>
                                        <th width="">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($detail_pakets as $detail_paket) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <?= $detail_paket->title ?>
                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/detail_paket/edit/' . $detail_paket->id)  ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/detail_paket/hapus/' . $detail_paket->id)  ?>" class="text-danger btn-hapus" data-id="<?= $detail_paket->id ?>">Hapus</a>
                                                </div>
                                            </td>
                                            <td><?= $detail_paket->sub_title ?></td>
                                            <td><?= $detail_paket->price ?></td>
                                            <td><?= $detail_paket->paket ?></td>
                                            <td><?= $detail_paket->detail_desc ? html_entity_decode($detail_paket->detail_desc) : "-" ?></td>
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