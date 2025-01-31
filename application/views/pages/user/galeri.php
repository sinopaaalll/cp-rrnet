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
                        <h1 data-animation="fadeInLeft" data-delay=".6s ">Galeri</h1>
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
<!-- ask questions -->
<section class="ask-questions section-padding40 fix">
    <div class="container">
        <div class="row gallery-item">
            <?php foreach ($galeris as $key => $g) { ?>
                <div class="col-md-4">
                    <a href="<?= base_url('assets/uploads/galeri/' . $g->img) ?>" class="img-pop-up">
                        <div class="single-gallery-image" style="background: url(<?= base_url('assets/uploads/galeri/' . $g->img) ?>);"></div>
                    </a>
                </div>
            <?php } ?>
        </div>


        <div class="row mt-5">
            <div class="col-lg-12 mb-2 p-t-50">
                <!-- Tampilkan link pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center text-dark">
                        <?php echo $this->pagination->create_links(); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End ask questions -->





</main>

<?php $this->load->view('component/user/footer') ?>