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


    <!-- Profil -->
    <section class="bg0 p-t-75 p-b-20">
        <div class="container">
            <div class="row p-b-10">
                <div class="col-12 col-md-12 col-lg-12 m-lr-auto">
                    <!-- <div class="how-bor1 "> -->
                    <div class="hov-img0 text-center">
                        <img src="<?= base_url('assets/uploads/profil/' . $profil->logo) ?>" alt="IMG" style="width: 300px;">
                    </div>
                    <!-- </div> -->
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="p-t-50">
                        <!-- <h3 class="ltext-103 cl2 p-b-16">
                            Profil Perusahaan
                        </h3> -->
                        <?= html_entity_decode($profil->desc) ?>

                        <!-- <div class="flex-l-m flex-w w-full p-t-45">
                            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                                Selengkapnya...
                            </a>
                        </div> -->

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