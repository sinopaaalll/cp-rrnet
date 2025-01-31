<?php $this->load->view('component/user/header') ?>
<?php $this->load->view('component/user/topbar') ?>

<?php
function formatRupiah($number)
{
    return "Rp. " . number_format($number, 0, ',', '.');
}
?>

<main>
    <?php foreach ($pakets as $key => $paket) { ?>


        <!-- Slider Area Start-->
        <div class="slider-area slider-bg">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-12 ">
                            <div class="hero__caption hero__caption2 text-center">
                                <h1 data-animation="fadeInLeft" data-delay=".6s "><?= $paket->name ?></h1>
                                <p data-animation="fadeInLeft" data-delay=".8s"><?= html_entity_decode($paket->desc) ?></p>
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


        <!--? Pricing Card Start -->
        <section class="pricing-card-area pricing-card-area2 fix">
            <div class="container">
                <div class="row">

                    <?php foreach ($detail_pakets as $key => $dp) {
                        if ($paket->id == $dp->paket_id) { ?>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                <div class="single-card text-center mb-30">
                                    <div class="card-top">
                                        <span class="fas fa-4x fa-wifi pb-2"></span>
                                        <h4 class="mb-3"><?= $dp->title ?></h4>
                                        <h2><sup><i><?= $dp->detail_desc == "" ? "" : "Upto" ?></i></sup> <?= $dp->sub_title ?>&nbsp; <i class="fas fa-arrows-alt-v"></i></h1>
                                    </div>
                                    <div class="card-mid">
                                        <h4><?= formatRupiah($dp->price) ?><span><?= $dp->detail_desc == "" ? "" : "/ Bulan" ?></span></h4>
                                        <p><?= $dp->detail_desc == "" ? "" : "Harga Sudah Termasuk PPN" ?></p>
                                    </div>
                                    <div class="card-bottom">
                                        <?= html_entity_decode($dp->detail_desc) ?>
                                    </div>
                                </div>
                            </div>

                    <?php }
                    } ?>
                </div>
            </div>
        </section>
        <!-- Pricing Card End -->

    <?php } ?>





</main>

<?php $this->load->view('component/user/footer') ?>