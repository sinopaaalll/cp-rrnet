<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('admin/paket') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
                            <h4 class="card-title">Edit <?= $title ?> </h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Paket *</label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" class="form-control <?= form_error('name') ? "is-invalid" : "" ?>" name="name" id="name-" value="<?= $paket->name ?>">
                                        <?= form_error('name', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                                    <div class="col-sm-12 col-md-6">
                                        <textarea class="form-control" name="desc" id="desc"><?= $paket->desc ?></textarea>
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