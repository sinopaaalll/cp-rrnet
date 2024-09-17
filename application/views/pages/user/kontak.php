<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('component/user/header') ?>
</head>

<body class="animsition">

    <!-- Header -->
    <?php $this->load->view('component/user/topbar') ?>

    <!-- Slider -->
    <section class="bg5 txt-center p-lr-15 p-tb-92">
        <h2 class="ltext-105 cl0 txt-center">
            <?= $title ?>
        </h2>
    </section>


    <!-- Kontak -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex-w w-full p-b-42">
                                <span class="fs-18 cl5 txt-center size-211">
                                    <span class="lnr lnr-map-marker"></span>
                                </span>

                                <div class="size-212 p-t-2">
                                    <span class="mtext-110 cl2">
                                        Alamat
                                    </span>

                                    <p class="stext-115 cl6 size-213 p-t-18">
                                        <?= $kontak->address ?>
                                    </p>
                                </div>
                            </div>

                            <div class="flex-w w-full p-b-42">
                                <span class="fs-18 cl5 txt-center size-211">
                                    <span class="lnr lnr-phone-handset"></span>
                                </span>

                                <div class="size-212 p-t-2">
                                    <span class="mtext-110 cl2">
                                        Telp
                                    </span>

                                    <p class="stext-115 cl1 size-213 p-t-18">
                                        <a href="">+<?= $kontak->telp ?></a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex-w w-full">
                                <span class="fs-18 cl5 txt-center size-211">
                                    <span class="lnr lnr-envelope"></span>
                                </span>

                                <div class="size-212 p-t-2">
                                    <span class="mtext-110 cl2">
                                        Email
                                    </span>

                                    <p class="stext-115 cl1 size-213 p-t-18">
                                        <?= $kontak->email ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php $this->load->view('component/user/footer'); ?>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>


    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url('') ?>assets/user/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url('') ?>assets/user/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/slick/slick.min.js"></script>
    <script src="<?= base_url('') ?>assets/user/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/js/main.js"></script>

</body>

</html>