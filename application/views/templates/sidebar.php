<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <i class="fas fa-campground"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ayo sinau</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php if ($this->session->peran == 'guru') { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin') ?>">
                <i class="fas fa-fw fa-address-book"></i>
                <span>Kelas</span></a>
        </li>

        <hr class="sidebar-divider my-0">
    <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user') ?>">
                <i class="fas fa-fw fa-address-book"></i>
                <span>Kelas</span>
            </a>
        </li>

        <hr class="sidebar-divider my-0">


        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/tugas/'); ?>">
                <i class="fas fa-fw fa-book-open"></i>
                <span>Tugas</span></a>
        </li>

        <hr class="sidebar-divider my-0">
    <?php } ?>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Sign Out</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->