<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Catatan</h2>
            <p class="section-lead"><b>Jika tidak mengganti logo maka kosongkan field</b></p>

            <div class="row">
                <div class="col-sm-12 col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/profil') ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea class="form-control <?= form_error('desc') ? "is-invalid" : "" ?>" name="desc" id="desc"><?= $profil->desc ?></textarea>
                                        <?= form_error('desc', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo </label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="file" name="logo" class="form-control" />
                                        <input type="hidden" name="old_logo" value="<?= $profil->logo ?>">
                                        <small>* Logo berupa JPG, JPEG dan PNG. Ukuran Maksimal 5 MB</small>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview Logo</label>
                                    <div class="col-sm-12 col-md-6">
                                        <img src="<?= base_url('assets/uploads/profil/' . $profil->logo) ?>" alt="" style="width: 250px;">
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