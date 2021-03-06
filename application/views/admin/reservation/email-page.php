<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/fontawesome-all.css'); ?>">
	<style>
	body {
		background-color:rgba(0,0,0,0.7);
		color: #fff;
	}
	.body {
		background-color:rgba(0,0,0,0.7);
		color: #fff;	
	}
	.head-header {
		padding-top: 50px;
	}
	.head-logo {
		padding: 0;
	}
	header{
		padding: 0 50px;
		text-align: center;
	}
	header img {
		padding: 0 105px;
	}

	.content-body {
		padding: 20px 0;
		width: 50%;
		margin: 0 auto;
	}

	.message-body {
		letter-spacing: 1px;
		margin-bottom: 15px;
		border-bottom: 1px solid #b3b3b3;
	}

  a:visited {
    color: white;
  }

</style>
</head>
<body>
	
	<table>
		<tr>
			<td class="body">
				<div class="container">
					<div class="row head-header">
						<div class="col-md-3"></div>
						<div class="col-md-6 head-logo">
							<header>
								<!-- <img src="<?php echo site_url('assets/images/LOGO.png'); ?>" alt="Logo"> -->
								<h1>Kirstian Event Needs</h1>
							</header>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>

				<div class="container">
					<div class="row content-body">

						<div class="message-header">

						</div>

						<div class="message-body">

							<h3>Hi! <?php echo $reservation[0]['firstname']; ?> <?php echo $reservation[0]['lastname']; ?></h3>
							<p>
								We are here to provide a high quality catering service. We do cater events like debut, wedding, birthdays, inaugurals, and fiestas. We are in this catering business industry since 1998 and we have catered a lot of events since then. Here is the reservation details you made with us. Please make sure you keep this information for future purposes
							</p>

							<h3>RESERVATION DETAILS:</h3>

							<p>
								<table>
									<tr>
										<td>REFERENCE NUMBER: <?php echo $reservation[0]['reference_no']; ?></td>
									</tr>
									<tr>
										<td>TYPE OF EVENT: <?php echo $reservation[0]['services_title']; ?></td>
									</tr>
									<tr>
										<td>SCHEDULED DATE: <?php
										 $date = strtotime($reservation[0]['date_of_event']);
										 echo date("M d Y" ,$date);
										 ?>, <?php echo $reservation[0]['time_of_event']; ?></td>
									</tr>
									<tr>
										<td>PLACE OF EVENT: <?php echo $reservation[0]['place_of_event']; ?></td>
									</tr>
									<tr>
										<td>EXPECTED PEOPLE COUNT: <?php echo $reservation[0]['exp_people_count']; ?></td>
									</tr>
								</table>
							</p>
							
						</div>

						<div class="message-footer">
							
							<h4>Thank you for making a reservation at us! We hope to serve you the best services and help you make an amazing event.</h4>

							<p>
								Please click the link to confirm your reservation:
								<span>
									<a href='http://www.kensystem.org/second-reservation?id=<?php echo $enc_reference_no; ?>'>
										http://www.kensystem.org/second-reservation?id=<?php echo $enc_reference_no; ?>
									</a>
								</span>
							</p>


						</div>
					</div>
				</div>
			</td>
		</tr>
	</table>


	<!-- <h1>Sample Email</h1>
	<a href='http://www.kensystem.org/second-reservation?id=<?php echo $reference_no; ?>'>
		http://www.kensystem.org/second-reservation?id=<?php echo $reference_no; ?>
	</a> -->
</body>
</html>