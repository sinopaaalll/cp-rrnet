<?php $this->load->view('component/user/header') ?>
<?php $this->load->view('component/user/topbar') ?>

<?php
function formatRupiah($number)
{
    return "Rp. " . number_format($number, 0, ',', '.');
}
?>

<main>
    <!-- Slider Area Start-->
    <div class="slider-area slider-bg ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center slider-height ">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <!-- <span data-animation="fadeInLeft" data-delay=".3s">Best Domain & hosting service provider</span> -->
                                <h1 data-animation="fadeInLeft" data-delay=".6s ">Nikmati Internet Dengan Harga Cepat Dan Tepat!</h1>
                                <!-- <p data-animation="fadeInLeft" data-delay=".8s">Rr.Net Group merupakan salah satu perusahaan penyedia layanan Internet Service Provider (ISP), dalam menghadapi persaingan yang semakin ketat dan perubahan lingkungan yang cepat</p> -->
                                <!-- Slider btn -->
                                <br>
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1s" href="#about" class="btn radius-btn">Mulai</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right">
                                <img src="<?= base_url('assets1/') ?>img/hero/hero_right.png" alt="" data-animation="fadeInRight" data-delay="1s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
        </div>
        <!-- Slider Shape -->
        <div class="slider-shape d-none d-lg-block">
            <img class="slider-shape1" src="<?= base_url('assets1/') ?>img/hero/top-left-shape.png" alt="">
        </div>
    </div>
    <!-- Slider Area End -->

    <!--? Team -->
    <section class="team-area section-padding40 section-bg1" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-105">
                        <h2>Optimalkan Pengalaman Internet Anda</h2>
                        <p>Tingkatkan pengalaman Internet Anda dengan koneksi yang lebih cepat dan stabil. Dengan mengoptimalkan pengaturan pada teknologi jaringan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6"">
                    <div class=" single-cat">
                    <div class="cat-icon">
                        <img src="<?= base_url('assets1/') ?>img/icon/services1.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">Reliabel Technician</a></h5>
                        <p>Pemasangan dilakukan oleh tenaga ahli yang profesional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-cat">
                    <div class="cat-icon">
                        <img src="<?= base_url('assets1/') ?>img/icon/services2.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">24/7 Support</a></h5>
                        <p>Kami selalu ada (24 Jam) untuk Membantu kelancaran internet anda</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-cat">
                    <div class="cat-icon">
                        <img src="<?= base_url('assets1/') ?>img/icon/services3.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="#">100% Fiber Optic</a></h5>
                        <p>Mentransmisikan data dengan kecepatan tinggi & latensi rendah</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                <a href="<?= base_url('tentang') ?>" class="btn radius-btn">Tentang Kami <span class="fa fa-arrow-right"></span></a>
            </div>

        </div>
    </section>
    <!-- Services End -->

    <!--? Pricing Card Start -->
    <?php foreach ($paket as $key => $value) { ?>
        <section class="pricing-card-area fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-tittle text-center mb-90">
                            <h2>Paket <?= $value->name ?></h2>
                            <p><?= html_entity_decode($value->desc) ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php foreach ($detail_pakets as $key => $dp) {
                        if ($value->id == $dp->paket_id) { ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                                <div class="single-card text-center mb-30">
                                    <div class="card-top pb-3">
                                        <span class="fas fa-4x fa-wifi pb-2"></span>
                                        <!-- <img src="<?= base_url('assets1/') ?>img/icon/price1.svg" alt=""> -->
                                        <h4 class="mb-3"><?= $dp->title ?></h4>
                                        <h2><sup><i>Upto</i></sup> <?= $dp->sub_title ?>&nbsp; <i class="fas fa-arrows-alt-v"></i></h1>
                                            <!-- <p>Starting at</p> -->
                                    </div>
                                    <div class="card-mid">
                                        <h4><?= formatRupiah($dp->price) ?><span>/ Bulan</span></h4>
                                        <p>Harga Sudah Termasuk PPN</p>
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
    <?php } ?>
    <!-- Pricing Card End -->

    <!--? About-1 Area Start -->
    <div class="about-area1 section-padding40">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12">
                    <div class="section-tittle mb-105">
                        <h2 class="text-dark mb-3">Paket Terbaik yang kami Tawarkan</h2>
                        <p>Kami menawarkan paket yang dapat memudahkan keperluan dan kebutuhan anda.</p>
                    </div>
                </div>
                <?php foreach ($pakets as $key => $p) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card" style="border-radius: 10px;">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-6">
                                        <h2>Paket <?= $p->name ?></h2>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="fas fa-2x fa-wifi mx-4"></span>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <?= html_entity_decode($p->desc) ?>
                                    </div>
                                    <div class="col-12">
                                        <a href="<?= base_url('paket') ?>" class="text-dark"> Cek Paket Internet <span class="fa fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- About-1 Area End -->


    <!-- ask questions -->



    <section class="ask-questions section-bg1 section-padding30 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-90">
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
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
                <div class="col-xl-12 ">
                    <div class="more-btn text-center mt-20">
                        <a href="<?= base_url('galeri') ?>" class="btn">Selengkapnya <span class="fa fa-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End ask questions -->

</main>

<?php $this->load->view('component/user/footer') ?>

<script>
    // Smooth scrolling
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const targetId = this.getAttribute("href").substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: "smooth",
                    });
                }
            });
        });
    });
</script>