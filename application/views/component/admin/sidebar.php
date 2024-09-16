<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('admin/dashboard') ?>">Control Management</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('admin/dashboard') ?>">CMS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="<?= $this->uri->segment(2) === 'dashboard' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/dashboard') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

            <li class="menu-header">Media</li>
            <li class="<?= $this->uri->segment(2) === 'slider' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/slider') ?>"><i class="fas fa-arrow-right"></i> <span>Slider</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'layanan' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/layanan') ?>"><i class="fas fa-clipboard-list"></i> <span>Layanan</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'galeri' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/galeri') ?>"><i class="fas fa-images"></i> <span>Galeri</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'profil' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/profil') ?>"><i class="fas fa-building"></i> <span>Profil</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'kontak' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/kontak') ?>"><i class="fas fa-phone"></i> <span>Kontak</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'konfigurasi' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/konfigurasi') ?>"><i class="fas fa-cogs"></i> <span>Konfigurasi</span></a></li>
        </ul>


    </aside>
</div>