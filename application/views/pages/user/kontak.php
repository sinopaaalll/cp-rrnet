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
                        <h1 data-animation="fadeInLeft" data-delay=".6s ">Kontak</h1>
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

<!--?  Contact Area start  -->
<section class="contact-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3><?= $kontak->address ?></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><?= $kontak->email ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+<?= $kontak->telp ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

</main>

<?php $this->load->view('component/user/footer') ?>