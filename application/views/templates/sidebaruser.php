<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hi <?= $user['name']; ?></div>
        <!-- <div class="sidebar-brand-text mx-3">User</div> -->
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa-fw fab fa-wpforms"></i>
            <span>Data sekolah</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa-fw fab fa-wpforms"></i>
            <span>Isi Kuesioner</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa-fw fab fa-wpforms"></i>
            <span>Peta</span></a>
    </li>

    <?php if ($this->session->userdata('')) : ?>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('') ?>/changepassword">
                <i class="fas fa-fw fa-key"></i>
                <span>Change Password</span></a>
        </li>
    <?php else : ?>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url($this->session->userdata('role')); ?>/changepassword">
                <i class="fas fa-fw fa-key"></i>
                <span>Change Password</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Logout
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>

    </li>


    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->