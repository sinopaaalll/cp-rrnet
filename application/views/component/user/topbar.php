<header class="header-v2">
    <!-- Header desktop -->
    <div class="container-menu-desktop how-shadow1">
        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="<?= base_url('/') ?>" class="logo">
                    <!-- <img src="<?= base_url('') ?>assets/user/images/logo/logo.jpg" alt="IMG-LOGO"> -->
                    <h1 class="text-dark"><?= get_config_value('name') ?></h1>

                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li class="<?= $this->uri->segment(1) == "beranda" || $this->uri->segment(1) == "" ? "active-menu" : "" ?>">
                            <a href="<?= base_url('beranda') ?>">Beranda</a>
                        </li>
                        <li class="<?= $this->uri->segment(1) == "profil" ? "active-menu" : "" ?>">
                            <a href="<?= base_url('profil') ?>">Profil Perusahaan</a>
                        </li>
                        <!-- <li class=" label1" data-label1="3"> -->
                        <li class="<?= $this->uri->segment(1) == "layanan" || $this->uri->segment(2) == "detail" ? "active-menu" : "" ?>">
                            <a href="<?= base_url('layanan') ?>">Layanan</a>
                        </li>
                        <li class="<?= $this->uri->segment(1) == "galeri" ? "active-menu" : "" ?>">
                            <a href="<?= base_url('galeri') ?>">Galeri</a>
                        </li>
                        <li class="<?= $this->uri->segment(1) == "kontak" ? "active-menu" : "" ?>">
                            <a href="<?= base_url('kontak') ?>">Kontak</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <!-- <a href="index.html"><img src="<?= base_url('') ?>assets/user/images/icons/logo-01.png" alt="IMG-LOGO"></a> -->
            <h1 class="text-dark"><a href="/"><?= get_config_value('name') ?></a></h1>

        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="<?= base_url('beranda') ?>">Beranda</a>
            </li>
            <li>
                <a href="<?= base_url('profil') ?>">Profil Perusahaan</a>
            </li>
            <!-- <li class="label1" data-label1="3"> -->
            <li>
                <a href="<?= base_url('layanan') ?>">Layanan</a>
            </li>
            <li>
                <a href="<?= base_url('galeri') ?>">Galeri</a>
            </li>
            <li>
                <a href="<?= base_url('kontak') ?>">Kontak</a>
            </li>
        </ul>
    </div>
</header>