<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= get_config_value('name') ?> &mdash; <?= $title ?></title>
    <link rel="apple-touch-icon" href="<?= base_url('assets/uploads/konfigurasi/') . get_config_value('icon') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/uploads/konfigurasi/') . get_config_value('icon') ?>">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/components.css">

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <a href="<?= base_url('/') ?>">
                                <img src="<?= base_url('assets/admin/img/logo/logo.png') ?>" alt="logo" width="100" class=" ">
                            </a>
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login Admin</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="" class="needs-validation" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control <?= form_error('username') ? "is-invalid" : "" ?>" name="username" tabindex="1" value="<?= set_value('username') ?>" placeholder="" autofocus>
                                        <?php echo form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <!-- <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div> -->
                                        </div>
                                        <input id="password" type="password" class="form-control <?= form_error('password') ? "is-invalid" : "" ?>" name="password" tabindex="2" placeholder="">
                                        <?php echo form_error('password', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- <div class="mt-5 text-muted text-center">
                            Don't have an account? <a href="auth-register.html">Create One</a>
                        </div> -->
                        <div class="simple-footer">
                            Copyright &copy; 2024. by <?= get_config_value('copyright') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url('assets/admin/') ?>modules/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>modules/popper.js"></script>
    <script src="<?= base_url('assets/admin/') ?>modules/tooltip.js"></script>
    <script src="<?= base_url('assets/admin/') ?>modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>modules/moment.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>js/stisla.js"></script>
    <script src="<?= base_url('assets/admin/') ?>modules/sweetalert/sweetalert.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('assets/admin/') ?>js/scripts.js"></script>
    <script src="<?= base_url('assets/admin/') ?>js/custom.js"></script>

    <?php
    if ($this->session->flashdata('success')) { ?>
        <script>
            var successMessage = <?php echo json_encode($this->session->flashdata('success')); ?>;
            $(document).ready(function() {
                swal("Good Job!", successMessage, "success");
            });
        </script>
    <?php } else if ($this->session->flashdata('warning')) { ?>
        <script>
            var warningMessage = <?php echo json_encode($this->session->flashdata('warning')); ?>;
            $(document).ready(function() {

                swal("Oops!", warningMessage, "warning");
            });
        </script>
    <?php } else if ($this->session->flashdata('error')) { ?>
        <script>
            var errorMessage = <?php echo json_encode($this->session->flashdata('error')); ?>;
            $(document).ready(function() {

                swal("Error!", errorMessage, "error");
            });
        </script>
    <?php } ?>
</body>

</html>