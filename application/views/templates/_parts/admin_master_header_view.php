<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>
    <link rel="icon" type="image/png" href="<?php echo site_url('assets/images/favicon.ico'); ?>">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo site_url('assets/admin/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo site_url('assets/admin/css/all.css') ?>" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="<?php echo site_url('assets/admin/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo site_url('assets/admin/css/sb-admin.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/admin/css/style.css') ?>" rel="stylesheet">

    <script src="<?php echo site_url('assets/js/ckeditor5-build-classic/ckeditor.js') ?>"></script>

  </head>

  <body id="<?=basename($_SERVER['PHP_SELF'],'.php')?>">

    <!-- <div id="preloader">
        <div id="status"></div>
    </div> -->

    <?php if ($this->ion_auth->logged_in()) : ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?php echo site_url(); ?>">Kirstian Event</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group" style="display: none;">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle float-right" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PROFILE
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/user/profile');?>">Profile page</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('admin/user/logout');?>">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div class="main-content">

        <div id="wrapper">

          <!-- Sidebar -->
          <ul class="sidebar navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('/admin'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-file"></i>
                <span>Services</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo site_url('admin/services/index') ?>">All Services</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-file"></i>
                <span>Packages</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo site_url('admin/packages/index') ?>">All Package</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-file"></i>
                <span>Reservation</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo site_url('admin/reservation/index') ?>">All Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/events/index') ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Event</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/feedback/index') ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Feedback</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-file"></i>
                <span>Report</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo site_url('admin/report/index') ?>">Reservation</a>
                <a class="dropdown-item" href="<?php echo site_url('admin/report/report_event') ?>">Event</a>
                <a class="dropdown-item" href="<?php echo site_url('admin/report/report_feedback') ?>">Feedback</a>
            </li>
          </ul>



          <div id="content-wrapper">

            <div class="container-fluid">
    
                <?php endif; ?>