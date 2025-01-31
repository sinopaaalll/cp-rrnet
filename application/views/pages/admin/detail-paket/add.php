<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('admin/detail_paket') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
                            <h4 class="card-title">Tambah <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Paket *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <select name="paket" id="paket" class="form-control <?= form_error('paket') ? "is-invalid" : "" ?>">
                                            <option value="0" selected disabled>Pilih Paket</option>
                                            <?php foreach ($paket as $p) { ?>
                                                <option value="<?= $p->id ?>"><?= $p->name ?></option>
                                            <?php } ?>
                                        </select>
                                        <?= form_error('paket', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('title') ? "is-invalid" : "" ?>" name="title" id="title" value="<?= set_value('title') ?>">
                                        <?= form_error('title', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Judul *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('sub_title') ? "is-invalid" : "" ?>" name="sub_title" id="sub_title" value="<?= set_value('sub_title') ?>">
                                        <?= form_error('sub_title', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="number" class="form-control <?= form_error('price') ? "is-invalid" : "" ?>" name="price" id="price" value="<?= set_value('price') ?>">
                                        <?= form_error('price', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea class="form-control" name="detail_desc" id="desc"></textarea>
                                    </div>
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

<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="importmap">
    {
        "imports": {
            "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
            "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
        }
    }
</script>
<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font,
        BlockQuote,
        Heading,
        List,
        Indent,
        IndentBlock,
        Alignment,
        Link,
        CodeBlock
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#desc'), {
            plugins: [Essentials, Paragraph, Bold, Italic, Font,
                BlockQuote, Heading, List, Indent, IndentBlock, Alignment, Link, CodeBlock
            ],
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|',
                    'heading',
                    '|',
                    'fontfamily', 'fontsize',
                    '|',
                    'bold', 'italic',
                    '|',
                    'link', 'uploadImage', 'blockQuote', 'codeBlock',
                    '|',
                    'alignment',
                    '|',
                    'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                ],
                shouldNotGroupWhenFull: true
            }
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error(error);
        });
</script>