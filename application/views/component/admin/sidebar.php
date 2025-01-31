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
            <li class="<?= $this->uri->segment(2) === 'paket' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/paket') ?>"><i class="fas fa-server"></i> <span>Paket</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'detail_paket' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/detail_paket') ?>"><i class="fas fa-layer-group"></i> <span>Detail Paket</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'galeri' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/galeri') ?>"><i class="fas fa-images"></i> <span>Galeri</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'tentang' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/tentang') ?>"><i class="fas fa-building"></i> <span>Tentang</span></a></li>
            <li class="<?= $this->uri->segment(2) === 'kontak' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/kontak') ?>"><i class="fas fa-phone"></i> <span>Kontak</span></a></li>
            <!-- <li class="<?= $this->uri->segment(2) === 'konfigurasi' ? "active" : "" ?>"><a class="nav-link" href="<?= base_url('admin/konfigurasi') ?>"><i class="fas fa-cogs"></i> <span>Konfigurasi</span></a></li> -->
        </ul>


    </aside>
</div>