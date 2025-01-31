<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('assets/uploads/konfigurasi/') . get_config_value('icon') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="<?= base_url('beranda') ?>"><img src="<?= base_url('assets/uploads/konfigurasi/') . get_config_value('icon') ?>" alt="" width="70px" style="border-radius: 50%;"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                                                <li><a href="<?= base_url('paket') ?>">Paket Internet</a></li>
                                                <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                                                <li><a href="<?= base_url('tentang') ?>">Tentang</a></li>
                                                <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
                                                <!-- Button -->
                                                <li class="button-header margin-left "><a href="https://wa.me/6285211249888" class="btn" target="_blank">Berlangganan &nbsp; <span class="fa fa-arrow-right"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>