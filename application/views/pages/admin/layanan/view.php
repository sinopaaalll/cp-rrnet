<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('admin/layanan') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h3><?= $layanan->title ?></h3>
                            <div class="row justify-content-between">
                                <div class="col-sm-12 col-md-6">
                                    <p>
                                        <span class="fas fa-clock"></span> <?= date('d M Y', strtotime($layanan->times)) ?> &nbsp;
                                        <span class="fas fa-user"></span> <?= $layanan->nama ?> &nbsp;
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-6 text-right">
                                    <a href="<?= base_url('admin/layanan/edit/' . $layanan->id) ?>" class="btn btn-sm btn-default"><span class="fas fa-edit"></span>Edit</a>
                                    <a href="<?= base_url('admin/layanan/hapus/' . $layanan->id) ?>" class="btn btn-sm btn-default btn-hapus" data-id="<?= $layanan->id ?>"><span class=" fas fa-trash"></span>Hapus</a>
                                </div>
                            </div>

                            <img src="<?= base_url('assets/uploads/layanan/' . $layanan->img) ?>" alt="Tumbnail" style="width: 250px; float:left; margin-right: 20px;" class="img-responsive">
                            <?= $layanan->desc ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>