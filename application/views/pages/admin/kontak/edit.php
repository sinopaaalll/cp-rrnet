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
                            <form action="<?= base_url('admin/kontak') ?>" method="post" autocomplete="off">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea class="form-control <?= form_error('address') ? "is-invalid" : "" ?>" name="address" id="address"><?= $kontak->address ?></textarea>
                                        <?= form_error('address', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telepon *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('telp') ? "is-invalid" : "" ?>" name="telp" value="<?= $kontak->telp ?>">
                                        <?= form_error('telp', '<div class="invalid-feedback">', '</div>'); ?>
                                        <small>* Penulisan telpon 628xxxx</small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="email" class="form-control <?= form_error('email') ? "is-invalid" : "" ?>" name="email" value="<?= $kontak->email ?>">
                                        <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
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