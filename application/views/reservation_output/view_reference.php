<br /><br /><br /><br /><br />

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12 centered-content">
			<p class="entry-desc">
				<div class="reference-info">
					<p>
					Here is your reference number, kindly keep this because you may use the reference number for future purposes and will also help you to accommodate your needs regarding the event planning. You may write your reference number on a paper or take a photo.
					
					</p>
				</div>
			</p>
			<p class="entry-desc">
				<div class="reference-no"><?php echo $reference_no; ?></div>
			</p>
			<div class="reference-info">
				<p>
				Please do check your email to confirm the continuation of your event. Thank you for choosing Kirstian Event Needs.
				</p>
        <p><h4>Reservation Details</h4></p>
        <div class="row">
          <div class="col-sm-6">
            <p>Name: <b><?php echo $reservation[0]['firstname']." ".$reservation[0]['lastname'] ; ?></b></p>
            <p>Date of Event: <b><?php echo $reservation[0]['date_of_event']; ?></b></p>
            <p>Time of Event: <b><?php echo $reservation[0]['time_of_event']; ?></b></p>
            <p>Type of Event: <b><?php echo $reservation[0]['services_title']; ?></b></p>
          </div>
          <div class="col-sm-6">
            <p>Place of Event: <b><?php echo $reservation[0]['place_of_event']; ?></b></p>
            <p>Expected Guest Count: <b><?php echo $reservation[0]['exp_people_count']; ?></b></p>
            <p>Email Address: <b><?php echo $reservation[0]['email_address']; ?></b></p>
            <p>Telephone: <b><?php echo $reservation[0]['telephone']; ?></b></p>
          </div>
        </div>
			</div>
			<a href="<?php echo site_url('/'); ?>" class="default-btn">Back To Home</a>
		</div><!-- .col-md-12 -->

	</div><!-- .row -->
</div><!-- .container-fluid -->