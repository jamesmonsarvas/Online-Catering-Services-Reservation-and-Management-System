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


<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo site_url('assets/js/ckeditor5-build-classic/ckeditor.js') ?>"></script>
  
    
</head>
<body id="<?=basename($_SERVER['PHP_SELF'],'.php')?>">

<br><br>

<div class="container">

	<div class="second-reservation-form-event-details">

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-3">
				<h2>Event Information:</h2>
			</div>

		</div>

		<div class="row">

			<div class="col-md-2"></div>

			<div class="col-md-5 event-details-left">
				
				<ul>
					<li>Occasion: </li>
					<li>Where: </li>
					<li>People Expected: </li>
					<li>Date: </li>
					<li>Time: </li>
					<li>Email Address: </li>
					<li>First Name: </li>
					<li>Last Name: </li>
					<li>Telephone Number / Cellphone Number: </li>
				</ul>

			</div>

			<div class="col-md-5 event-details-right">

				<ul>
					<li>Wedding</li>
					<li>Cabuyao</li>
					<li>100 Persons</li>
					<li>April 1, 2019</li>
					<li>4pm</li>
					<li>OrangeDesu00@gmail.com</li>
					<li>Glenn</li>
					<li>Radars</li>
					<li>09953761636</li>
				</ul>

			</div>

			<div class="col-md-1"></div>

		</div>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-4">
				<h4>Additional Information:</h4>
			</div>

		</div>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-8">
				<input type="text" name="" placeholder="Information">
			</div>
			<div class="col-2"></div>

		</div>

		<br>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-4">
				<h4>Packages:</h4>
			</div>

		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-10">
				<label class="container-inverse">Package One
				  <input type="checkbox" checked="checked">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse">Package Two
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse">Package Three
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse">Package Four
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
			</div>

		</div>

		<br>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-4">
				<h4>Amenities:</h4>
			</div>

		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<label class="container-inverse container-inverse-amenities">Chair with cover and motif ribbon
				  <input type="checkbox" checked="checked">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Round table with cloth and motif shopping
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Floral or lampara centerpiece
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Catering Equipments
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Toast and red wine
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Waiter/server in uniform
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Arch entrance with floral
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Buffet table with set up and motif cloth
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
			</div>
			<div class="col-md-5">
				<label class="container-inverse container-inverse-amenities">Buffet table with set up and motif cloth
				  <input type="checkbox" checked="checked">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Gift and cake table with motif cloth
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Carpet with fresh rose petals
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Couple of dove in a cage
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Newly wed table in gazebo or backdrop with balloon and floral arrangement
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Presidential and buffet table with complete set up
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Name tag and table number
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
			</div>
			<div class="col-md-1"></div>

		</div>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-4">
				<h4>Decorations:</h4>
			</div>

		</div>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-4">
				<label class="container-inverse container-inverse-amenities">Banners
				  <input type="checkbox" checked="checked">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Candles & Votives
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Decorating Fabrics
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Garlands
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Table Numbers
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
			</div>
			<div class="col-md-5">
				<label class="container-inverse container-inverse-amenities">Paper Lanterns
				  <input type="checkbox" checked="checked">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">New Arrivals
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Confetti
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Chair Covers
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container-inverse container-inverse-amenities">Hanggin Decor
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
			</div>

		</div>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-4">
				<h5>Additional Decorations:</h5>
			</div>

		</div>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-8">
				<input type="text" name="" placeholder="Prefered Decortions">
			</div>
			<div class="col-2"></div>

		</div>

		<br>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-4">
				<h4>Additional Packages:</h4>
			</div>

		</div>

		<div class="row">

			<div class="col-2"></div>
			<div class="col-md-8">
				<input type="text" name="" placeholder="Packages">
			</div>
			<div class="col-2"></div>

		</div>

	</div>

</div> <!-- second-reservation-form-event-details -- >


  <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/popper.min.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/scrollreveal.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/jquery.flexslider-min.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/jquery-ui.min.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/calendar.min.js'); ?>"></script>
  <script src="<?php echo site_url('assets/js/script.js'); ?>"></script>
</body>
</html>