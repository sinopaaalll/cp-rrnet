<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('component/user/header') ?>
</head>

<body class="animsition">

    <!-- Header -->
    <?php $this->load->view('component/user/topbar') ?>

    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1 rs2-slick1">
            <div class="slick1">
                <?php foreach ($sliders as $slider) { ?>

                    <div class="item-slick1 bg-overlay1" style="background-image: url(<?= base_url('assets/uploads/slider/' . $slider->img) ?>);">
                        <div class="container h-full">
                            <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">


                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                    <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                        <?= $slider->title ?>
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <span class="ltext-202 txt-center cl0 respon2">
                                        <?= $slider->desc ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <!-- <div class="wrap-slick1-dots p-lr-10"></div> -->
        </div>
    </section>


    <!-- Profil -->
    <section class="bg0 p-t-75 p-b-20">
        <div class="container">
            <div class="row p-b-10">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="ltext-103 cl2 p-b-16">
                            Profil Perusahaan
                        </h3>
                        <?= getExcerptProfil(html_entity_decode($profil->desc)) ?>

                        <div class="flex-l-m flex-w w-full p-t-45">
                            <a href="<?= base_url('profil') ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                                Selengkapnya...
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <!-- <div class="how-bor1 "> -->
                    <div class="hov-img0">
                        <img src="<?= base_url('assets/uploads/profil/' . $profil->logo) ?>" alt="IMG">
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="bg2 p-t-50 p-b-50">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Galeri Terbaru
                </h3>
            </div>

            <div class="flex-w flex-sb p-t-36 gallery-lb">
                <!-- item gallery -->
                <?php foreach ($galeris as $galeri) { ?>

                    <div class="wrap-item-gallery m-b-10">
                        <a class="item-gallery bg-img1" href="<?= base_url('assets/uploads/galeri/' . $galeri->img) ?>" data-lightbox="gallery" style="background-image: url('<?= base_url('assets/uploads/galeri/' . $galeri->img) ?>');" title="<?= $galeri->title ?>"></a>
                    </div>

                <?php } ?>
            </div>

            <div class="flex-c-m flex-w w-full p-t-50">
                <a href="<?= base_url('galeri') ?>" class="flex-c-m stext-101 cl5 size-103 bg0 bor1 hov-btn1 p-lr-15 trans-04">
                    Selengkapnya...
                </a>
            </div>

            <!-- Pagination -->
            <!-- <div class="flex-c-m flex-w w-full p-t-38">
                <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                    1
                </a>

                <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
                    2
                </a>
            </div> -->
        </div>
    </section>


    <!-- Layanan -->
    <section class="sec-blog bg0 p-t-50 p-b-60">
        <div class="container">
            <div class="p-b-66">
                <h3 class="ltext-103 cl5 txt-center respon1">
                    Layanan
                </h3>
            </div>

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

                <div class="flex-c-m flex-w w-full p-t-10">
                    <a href="<?= base_url('layanan') ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                        Selengkapnya...
                    </a>
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
                mainClass: 'mfp-fade',
                image: {
                    titleSrc: function(item) {
                        return item.el.attr('title'); // mengambil title dari elemen <a>
                    }
                }
            });
        });
    </script>

    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('') ?>assets/user/vendor/sweetalert/sweetalert.min.js"></script>

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