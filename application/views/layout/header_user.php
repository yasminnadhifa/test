<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OLDIE BOOKS</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url()?>/template2/assets/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>/template2/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>/template2/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url()?>/template2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>/template2/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>/template2/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url()?>/template2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>/template2/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- template2 Main CSS File -->
  <link href="<?=base_url()?>/template2/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * template2 Name: FlexStart - v1.9.0
  * template2 URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template2/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?=base_url()?>/template2/assets/img/logo.png" alt="">
        <span>Oldie Books</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="<?= base_url('Utama/');?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('Profil/buku') ?>">Book</a></li>
          <li><a class="nav-link scrollto" href="#services">Cart</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">History</a></li>
          <li class="dropdown"><a href="#"><span>Sell</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Form</a></li>
              <li><a href="#">History</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a> -->
                <!-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
              </li>
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('Profil/');?>">Profile</a></li>
          
          <li><a class="nav-link scrollto" href="<?= base_url('Auth/logout2') ?>" onClick="return confirm('Are you sure to logout?')">Logout</a></li>

          <li><a class="getstarted scrollto" href="<?= base_url('Auth/')?>">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->