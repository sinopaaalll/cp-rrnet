<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <!-- <div class="alert alert-danger">asas</div> -->
                    <div class="card">
                        <div class="card-body">
                            <p>
                                <b>Selamat datang <?= $this->session->userdata('nama') ?></b>, Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Slider</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-arrow-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Layanan</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-clipboard-list"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Galeri</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-images"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Profil</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-building"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Kontak</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="row justify-content-between ">
                                <div class="col-9 d-flex align-items-center">
                                    <h3>Konfigurasi</h3>
                                </div>
                                <div class="col-3 text-right">
                                    <span class="fa fa-4x fa-cogs"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</div>