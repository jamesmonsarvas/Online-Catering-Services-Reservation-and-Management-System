<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kirstian Event Needs - Online Catering Services Reservation and Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>

    <div id="preloader">
        <div id="status"></div>
    </div>

    <header id="header">

        <div class="container">
            <div class="row">

                <div id="branding" class="col-md-6">
                    <a href="<?php echo base_url(); ?>" id="default-logo"><img src="<?php echo base_url(); ?>/assets/images/default-logo.png" alt=""></a>
                </div><!-- #branding -->

                <nav id="menu-primary" class="col-md-6">

                    <ul id="menu-primary-list">
                        <li <?php if($this->uri->segment(1)==""){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li <?php if($this->uri->segment(1)=="services"){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>services">Services</a></li>
                        <li <?php if($this->uri->segment(1)=="blog"){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                        <li <?php if($this->uri->segment(1)=="about"){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li <?php if($this->uri->segment(1)=="contact"){echo 'class="active"';}?> ><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                    </ul><!-- #menu-primary-list -->

                </nav><!-- #menu-primary -->

            </div><!-- .row -->
        </div><!-- .container -->
        
    </header><!-- #header -->

    <main id="content">

    