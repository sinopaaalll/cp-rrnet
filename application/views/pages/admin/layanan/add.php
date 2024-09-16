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
            <h2 class="section-title">Catatan</h2>
            <p class="section-lead"><b>* = Tidak boleh kosong</b></p>

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Tambah <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/layanan/tambah') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('title') ? "is-invalid" : "" ?>" name="title" id="title-slug" value="<?= set_value('title') ?>" autofocus>
                                        <?= form_error('title', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('slug') ? "is-invalid" : "" ?>" name="slug" id="slug" value="<?= set_value('slug') ?>" readonly>
                                        <?= form_error('slug', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea class="form-control <?= form_error('desc') ? "is-invalid" : "" ?>" name="desc"><?= set_value('desc') ?></textarea>
                                        <?= form_error('desc', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar </label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="file" name="img" class="form-control" />
                                        <small>* Gambar berupa JPG, JPEG dan PNG. Ukuran Maksimal 5 MB</small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                    <label class="custom-switch mt-2">
                                        <input type="checkbox" name="status" class="custom-switch-input" checked>
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Aktif</span>
                                    </label>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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

<script>
    $(document).ready(function() {
        $('#title').on('keyup', function() {
            var title = $(this).val();
            var slug = title.toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-');
            $('#slug').val(slug);
        });
    });
</script>