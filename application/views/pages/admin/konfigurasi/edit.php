<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <!-- <h2 class="section-title">Catatan</h2>
            <p class="section-lead"><b>Jika tidak mengganti logo maka kosongkan field</b></p> -->

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/konfigurasi') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Website *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('name') ? "is-invalid" : "" ?>" name="name" value="<?= $konfigurasi->name ?>">
                                        <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Copyright *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('copyright') ? "is-invalid" : "" ?>" name="copyright" value="<?= $konfigurasi->copyright ?>">
                                        <?= form_error('copyright', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="file" name="icon" class="form-control" />
                                        <input type="hidden" name="old_icon" value="<?= $konfigurasi->icon ?>">
                                        <small>* Icon berupa JPG, JPEG dan PNG. Ukuran Maksimal 5 MB</small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview Icon</label>
                                    <div class="col-sm-12 col-md-6">
                                        <img src="<?= base_url('assets/uploads/konfigurasi/' . $konfigurasi->icon) ?>" alt="" style="width: 150px;">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>