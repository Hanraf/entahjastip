<?php defined('BASEPATH') OR exit('No direct script access allowed') ; ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?= base_url() ?>">Entah Jastip</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('Profil') ?>">About</a></li>
<<<<<<< HEAD
		        <!--<li class="nav-item"><a class="nav-link" href="<?= base_url('Katalog') ?>">Katalog</a></li>-->
=======
		        <li class="nav-item"><a class="nav-link" href="<?= base_url('Katalog') ?>">Katalog</a></li>
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
                <li class="nav-item"><a class="nav-link" href="<?= base_url('Request') ?>">Requests</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">
                        <?php foreach($kategori as $data){ ?>
                            <li><a class="dropdown-item" href="#"><?= $data->nama_kategori ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('Contact') ?>">Contact</a></li>
		        <?php if(isset($userlogin)) { ?>
<<<<<<< HEAD
		            <li class="nav-item"><a class="nav-link" href="<?= base_url('Katalog') ?>">Katalog</a></li>
		            <li class="nav-item"><a1 class="nav-link" style="color: black;"><?php $keranjang = 'Cart : '.$this->cart->total_items().' items'?>
                     <?php echo anchor('Katalog/detail_keranjang',$keranjang)?> </a1>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Login/logout') ?>">Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Admin/Dashboard') ?>">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Akun') ?>">Akun</a></li>
=======
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Login/logout') ?>">Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Admin/Dashboard') ?>">Admin</a></li>
>>>>>>> 89945f3206e0d30d9d9157ce105a90fa40368a8a
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('Login') ?>">Login</a></li>
                <?php } ?>      
            </ul>
        </div>
    </div>
</nav>