<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, <?= $user->nama ?></h2>
            <p class="section-lead">
                Jika tidak mengganti foto dan password maka kosongkan field
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="<?= base_url('assets/uploads/user/' . $user->foto) ?>" class="rounded-circle profile-widget-picture" width="100px" height="100px">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Layanan</div>
                                    <div class="profile-widget-item-value"><?= count($layanan) ?></div>
                                </div>

                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name"><?= $user->nama ?> <div class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> #<?= $user->username ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="<?= base_url('admin/user/' . $this->session->userdata('id')) ?>" class="needs-validation" novalidate="" enctype="multipart/form-data" autocomplete="off">
                            <div class="card-header">
                                <h4>Edit Profil User</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?= $user->nama ?>" required="">
                                        <!-- <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div> -->
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="<?= $user->username ?>" required="" readonly>
                                        <!-- <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="">
                                        <!-- <div class="invalid-feedback">
                                            Please fill in the email
                                        </div> -->
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Konfirmasi Password</label>
                                        <input type="password" name="pass_conf" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label>Foto</label>
                                        <input type="hidden" name="old_foto" class="form-control" value="<?= $user->foto ?>">
                                        <input type="file" name="foto" class="form-control">
                                        <!-- <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>