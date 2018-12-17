<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kirstian Event Needs - Online Catering Services Reservation and Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo site_url('assets/images/favicon.ico'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/fontawesome-all.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style-service.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/flexslider.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/jquery-ui.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/calendar.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/calendar-stylesheet.css'); ?>">
  
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo site_url('assets/js/ckeditor5-build-classic/ckeditor.js') ?>"></script>
  
    
</head>
<body id="<?=basename($_SERVER['PHP_SELF'],'.php')?>">

  <!-- <div id="preloader">
      <div id="status"></div>
  </div> -->

  <header id="header">

    <div class="container">
      <div class="row">

        <div id="branding" class="col-md-4">
            <a href="<?php echo site_url('/'); ?>" id="default-logo"><img src="<?php echo site_url('assets/images/LOGO.png'); ?>" alt=""></a>
        </div><!-- #branding -->

        <nav id="menu-primary" class="col-md-8">

            <ul id="menu-primary-list">
              <li <?php if($this->uri->segment(1)==""){echo 'class="active"';}?> >
                <a href="<?php echo site_url('/'); ?>">Home</a>
              </li>
              <li <?php if($this->uri->segment(1)=="services"){echo 'class="active"';}?> >
                <a href="<?php echo site_url('services'); ?>">Services</a>
              </li>
              <li <?php if($this->uri->segment(1)=="photos"){echo 'class="active"';}?> >
                <a href="<?php echo site_url('photos'); ?>">Photos</a>
              </li>
              <li <?php if($this->uri->segment(1)=="about"){echo 'class="active"';}?> >
                <a href="<?php echo site_url('about'); ?>">About</a>
              </li>
              <li <?php if($this->uri->segment(1)=="contact"){echo 'class="active"';}?> >
                <a href="<?php echo site_url('contact'); ?>">Contact</a>
              </li>
              <li>
                <a class="default-btn" href="<?php echo site_url('reservation'); ?>">Book an Event</a>
              </li>
            </ul><!-- #menu-primary-list -->

        </nav><!-- #menu-primary -->

      </div><!-- .row -->
    </div><!-- .container -->
      
  </header><!-- #header -->

  <main id="content">

    