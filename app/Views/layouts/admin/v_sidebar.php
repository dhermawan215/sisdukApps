<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-app-store"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SISDUK_APPS</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Utama
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-male"></i>
                <span>Kependudukan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data :</h6>
                    <a class="collapse-item" href="<?= base_url('/admin/penduduk') ?>">Data Penduduk</a>
                    <a class="collapse-item" href="<?= base_url('/admin/kelahiran') ?>">Data Kelahiran</a>
                    <a class="collapse-item" href="<?= base_url('/admin/meninggal') ?>">Data Kematian</a>
                    <a class="collapse-item" href="<?= base_url('/admin/datang') ?>">Data Masuk</a>
                    <a class="collapse-item" href="<?= base_url('/admin/pindah') ?>">Data Pindah</a>
                    <a class="collapse-item" href="<?= base_url('/admin/kk') ?>">Data Kartu Keluarga</a>

                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Tambahan
        </div>

        <!-- Nav Item - Pages Collapse Menu -->



        <?php if (in_groups('admin')) : ?>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/users') ?>">
                    <i class="fas fa-cogs"></i>
                    <span>User Setting</span></a>
            </li>
        <?php endif; ?>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout') ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->