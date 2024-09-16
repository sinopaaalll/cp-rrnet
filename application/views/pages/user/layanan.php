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

    <!-- Layanan -->
    <section class="sec-blog bg0 p-t-50 p-b-60">
        <div class="container">

            <div class="row">
                <?php foreach ($layanans as $layanan) { ?>
                    <div class="col-sm-6 col-md-4 p-b-40">
                        <div class="blog-item">
                            <div class="hov-img0">
                                <a href="<?= base_url('layanan/detail/' . $layanan->slug) ?>">
                                    <img src="<?= base_url('assets/uploads/layanan/' . $layanan->img) ?>" alt="IMG-BLOG">
                                </a>
                            </div>

                            <div class="p-t-15">
                                <div class="stext-107 flex-w p-b-14">
                                    <span class="m-r-3">
                                        <span class="cl4">
                                            By
                                        </span>

                                        <span class="cl5">
                                            <?= $layanan->nama ?>
                                        </span>
                                    </span>

                                    <span>
                                        <span class="cl4">
                                            on
                                        </span>

                                        <span class="cl5">
                                            <?= date("d M Y", strtotime($layanan->times)) ?>
                                        </span>
                                    </span>
                                </div>

                                <h4 class="p-b-12">
                                    <a href="<?= base_url('layanan/detail/' . $layanan->slug) ?>" class="mtext-101 cl2 hov-cl1 trans-04">
                                        <?= $layanan->title ?>
                                    </a>
                                </h4>

                                <p class="stext-108 cl6" style="text-align: justify;">
                                    <?= getExcerpt($layanan->desc) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

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