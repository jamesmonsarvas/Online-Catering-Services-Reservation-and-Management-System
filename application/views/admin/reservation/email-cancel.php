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
              <h3>Your reservation has been cancelled</h3>
						</div>

						<div class="message-body">

							<h3>Hi! <?php echo $reservation[0]['firstname']; ?> <?php echo $reservation[0]['lastname']; ?></h3>
							<p>
								We are here to inform you that your reservation has been cancelled and will be discontinued. This is likely because of:
                <ul>
                  <li>List the reasons here</li>
                </ul>
                We are deeply sorry for this and we hope to have served you better in the future
							</p>

						</div>

						<div class="message-footer">
							
							<h4>Thank you for making a reservation at us! We hope to serve you the best services and help you make an amazing event.</h4>

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