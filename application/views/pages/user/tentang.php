<?php $this->load->view('component/user/header') ?>
<?php $this->load->view('component/user/topbar') ?>
<?php error_reporting(0) ?>

<!-- Slider Area Start-->
<div class="slider-area slider-bg ">
    <!-- Single Slider -->
    <div class="single-slider d-flex align-items-center slider-height3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-12 ">
                    <div class="hero__caption hero__caption3 text-center">
                        <h1 data-animation="fadeInLeft" data-delay=".6s ">Tentang</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Shape -->
    <div class="slider-shape d-none d-lg-block">
        <img class="slider-shape1" src="<?= base_url('assets1/') ?>img/hero/top-left-shape.png" alt="">
    </div>
</div>
<!-- Slider Area End -->

<!--? About-1 Area Start -->
<div class="about-area1 section-padding40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <blockquote class="generic-blockquote">
                    <?= html_entity_decode($tentang->desc) ?>
                </blockquote>

            </div>
        </div>
    </div>
</div>
<!-- About-1 Area End -->

<!--? About-1 Area Start -->
<div class="about-area1 ">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                <!-- about-img -->
                <div class="about-img ">
                    <img src="<?= base_url('') ?>assets1/img/gallery/about1.png" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="about-caption ">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-30">
                        <h2>Visi</h2>
                    </div>
                    <?= html_entity_decode($tentang->visi) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About-1 Area End -->

<!--? About-2 Area Start -->
<div class="about-area1 pb-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="about-caption about-caption3 mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-30">
                        <h2>Misi</h2>
                    </div>
                    <?= html_entity_decode($tentang->visi) ?>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                <!-- about-img -->
                <div class="about-img ">
                    <img src="<?= base_url('') ?>assets1/img/gallery/about2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About-2 Area End -->







</main>

<?php $this->load->view('component/user/footer') ?>