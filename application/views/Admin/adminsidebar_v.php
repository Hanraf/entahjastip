<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Entah Jastip</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= base_url('Admin/Dashboard'); ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Akun
</div>
<li class="nav-item">
<<<<<<< HEAD
    <!-- <a class="nav-link" href="<?//= base_url('Admin/Profilakun'); ?>">
        <i class="fas fa-fw fa-light fa-user"></i>
        <span>Profil Akun</span>
    </a> -->
    <?php if(isset($this->session->userdata('logged_in')['user']) && $this->session->userdata('logged_in')['penjual'] == false) { ?>
        <a class="nav-link" href="<?= base_url('Admin/Daftarkepenjual'); ?>">
            <i class="fa-regular fa-fw fa-user"></i>
            <span>Daftar Menjadi Penjual</span>
        </a>
    <?php } ?>
=======
    <a class="nav-link" href="<?= base_url('Admin/Profilakun'); ?>">
        <i class="fas fa-fw fa-light fa-user"></i>
        <span>Profil Akun</span>
    </a>
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
    <?php if(isset($this->session->userdata('logged_in')['admin'])) { ?>
        <a class="nav-link" href="<?= base_url('Admin/Daftarakunuser'); ?>">
            <i class="fa-regular fa-fw fa-user"></i>
            <span>Daftar Akun User</span>
        </a>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePenjual"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Daftar Akun Penjual</span>
        </a>
        <div id="collapsePenjual" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Pilihan:</h6> -->
                <a class="collapse-item" href="<?= base_url('Penjual/DaftarPenjualDiterima'); ?>">
                    <i class="fas fa-fw fa-light fa-user"></i>
                    <span>Diterima</span>
                </a>
                <a class="collapse-item" href="<?= base_url('Penjual/DaftarPenjualDitolak'); ?>">
                    <i class="fas fa-fw fa-light fa-trash"></i>
                    <span>Ditolak</span>
                </a>
                <a class="collapse-item" href="<?= base_url('Penjual/DaftarPenjualPending'); ?>">
                    <i class="fas fa-fw fa-light fa-exclamation-triangle"></i>
                    <span>Pending</span>
                </a>
            </div>
        </div>
    <?php } ?>
</li>

<<<<<<< HEAD
<?php if (isset($this->session->userdata('logged_in')['admin']) || $this->session->userdata('logged_in')['penjual'] ) { ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Produk
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/Daftarproduk'); ?>">
            <!-- <i class="fas fa-fw fa-light fa-card-shopping"></i> -->
            <i class="fa-solid fa-fw fa-seedling"></i>
            <span>Daftar Produk</span>
        </a>
    </li>

    <?php if (isset($this->session->userdata('logged_in')['admin'])) { ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/Requestadmin'); ?>">
            <!-- <i class="fas fa-fw fa-light fa-card-shopping"></i> -->
            <i class="fa-solid fa-fw fa-list"></i>
            <span>Daftar Request</span>
        </a>
    </li>
    <?php } ?>
<?php } ?>
=======
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Produk
</div>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Admin/Daftarproduk'); ?>">
        <!-- <i class="fas fa-fw fa-light fa-card-shopping"></i> -->
        <i class="fa-solid fa-fw fa-seedling"></i>
        <span>Daftar Produk</span>
    </a>
</li>
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a

<!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
    Belanjaan
</div>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Admin/Daftarbelanja'); ?>">
        <!-- <i class="fas fa-fw fa-light fa-card-shopping"></i> -->
        <i class="fa-solid fa-fw fa-cart-shopping"></i>
        <span>Daftar Belanja</span>
    </a>
</li>

<<<<<<< HEAD
=======


>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
<<<<<<< HEAD
    Akses
</div>

=======
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span>
    </a>
</li>

>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('Login/logout') ?>">
        <i class="fa-sharp fa-solid fa-door-open"></i>
        <span>Log Out</span>
    </a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->