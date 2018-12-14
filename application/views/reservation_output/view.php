<?php 
if (isset($_GET['msg']) && $_GET['msg'] == "true") {
	echo '<div class="validation">
		<div class="validation-true">
		Thank you for making a reservation at us! <button id="close-validation">X</button><br />
		Please wait while we review your reservation and we will contact you. Have a nice day!
		</div>
	</div>';
} else if (isset($_GET['msg']) && $_GET['msg'] == "false") {
	echo '<div class="validation">
		<div class="validation-false">
		<button id="close-validation">X</button>
		Sorry. The date you have submitted has already been reserved. Please try another date.
		</div>
	</div>';
}
?>

<div class="parallax-2">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-12 centered-content">
				<h1 class="entry-title border-lr">Book a tasting Experience</h1>
				<p class="entry-desc">
					Indulge your culinary senses by partaking in our exclusive tasting experience. <br>
					Start by clicking below and filling out our form.
				</p>
				<a href="#fill-up" class="default-btn">I want to reserve my slot!</a>
			</div><!-- .col-md-12 -->

		</div><!-- .row -->
	</div><!-- .container-fluid -->
</div><!-- .parallax-2 -->
<div id="reservation-page">

	<div class="container">

		<div class="centered-content">

			<h2 class="border-lr">Book a Full-Course Tasting Experience</h2>
			<p>
				We use the form below to find out details about your upcoming event so that we can provide you with the most appropriate,
				complimentary tasting experience. If you'd rather talk to a representative, you can <a href="<?php echo site_url('contact/#contact-us')?>">contact us</a> here.
			</p>

			<p>
				If you represent an organization that enjoys year-round events then register to taste our food today by simply
				filling out the form below.
			</p>

		</div>

		<div class="row reservation-details">
			<div id="calendar" class="col-md-9"></div>
			<div class="col-md-3">
				<h3>DETAILS</h3>
				<div class="reservation-desc">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
					Cumque aperiam officiis nobis debitis vitae tempora eaque veniam, 
					illum culpa, quam doloremque fugit soluta quia cum corporis sint ad commodi iusto?
				</div>

				<h4>LEGENDS:</h4>
				<ul>
					<li>FULL SLOT</li>
					<li>1 SLOT AVAILABLE</li>
					<li>EMPTY</li>
				</ul>
			</div>
		</div>		
		<script>
			$(function () {
				$('#calendar').calendar({
					events: [
					<?php
					$summary = "";
					$event_title = "";
					foreach ($reservations as $reservation) : ?>
						<?php
						// if($reservation['count_date'] == 1)
						// 	$summary = "<div class='clickable'>1 slot available<div class='event-details'><p class='".$reservation['date_of_event']."'>".$reservation['date_of_event']."</p></div></div>";
						// else if ($reservation['count_date'] == 2)
							if ($reservation['status'] == 0) {
								$event_title = "Event";
							}
							else if ($reservation['status'] == 1) {
								$event_title = "Reservation";
							}
							$summary = "<div class='clickable'>".$event_title."<div class='event-details'><p>Date of Event: ".$reservation['date_of_event']."</p><p>Name: ".$reservation['firstname']." ".$reservation['lastname']."</p><p>Type of Event: ".$reservation['services_title']."</p><p>Time of Event: ".$reservation['time_of_event']."</p><p>Venue: ".$reservation['place_of_event']."</p></div></div>";
						?>
						<?php if ($reservation['status'] == 0 || $reservation['status'] == 1) : ?>
							{ start: '<?php echo $reservation['date_of_event']; ?>', end: '<?php echo $reservation['date_of_event']; ?>', summary: "<?php echo $summary; ?>", mask: true},
						<?php endif; ?>
					<?php endforeach; ?>
					],

				});
			});
		</script>

		<?php // echo validation_errors(); ?>
		<div id="fill-up">
			<hr><br /><br /><br />
		</div>

		<div id="terms-and-condition">

			<div class="row">
				<div class="col-md-6">
					<h3>Terms and Conditions</h3>
					<ul>
						<li>Php 5,000 reservation fee to save the date</li>
						<li>75% down payment 15 days before</li>
						<li>25% balance before the event</li>
						<li>Additional 15% service charge</li>
						<li>Customer agree to pay in case of loss or damage of property/items based on market value</li>
					</ul>

				</div><!-- .col-md-12 -->
			</div><!-- .row -->

		</div><!-- #terms-and-condition -->

		<?php echo form_open('reservation/create', 'id="reservation-form"'); ?>

		<div class="row">

			<input type="hidden" name="id" value="<?php // echo $services['ID']; ?>">

			<div class="col-md-12">

				<div class="row">

					<div class="form-group col-md-4">
						<select name="event" id="event">
							<option value>1. What is you special occasion?</option>
							<option value="Wedding">Wedding</option>
							<option value="Debut">Debut</option>
							<option value="Birthday, Anniversary, Graduation, and Baptismal">Birthday, Anniversary, Graduation, and Baptismal</option>
							<option value="Inauguration, Fiesta, Seminar, and Other Events">Inauguration, Fiesta, Seminar, and Other Events</option>
						</select>
					</div>

					<div class="form-group col-md-4">
						<select name="place" id="place">
							<option value>2. Where will it be?</option>
							<option value="Alabang">Alabang</option>
							<option value="Cabuyao">Cabuyao</option>
							<option value="Calamba">Calamba</option>
							<option value="Pansol">Pansol</option>
						</select>
					</div>

					<div class="form-group col-md-4">
						<select name="people" id="people">
							<option value>3. How many people do you expect?</option>
							<option value="Up to 100">Up to 100</option>
							<option value="100-200">100-200</option>
							<option value="200-300">200-300</option>
							<option value="300 and above">300 and above</option>
						</select>
					</div>
				</div>

			</div><!-- .col-md-12 -->

			<div class="divider"></div>

			<div class="col-md-12">

				<div class="row">
					<div class="form-group col-md-4">
						<input type="text" id="datepicker" class="form-control" name="date" placeholder="4. Pick a date for the tasting experience">
					</div>

					<div class="form-group col-md-4">
						<select name="time" id="time">
							<option value>5. Pick a time for the tasting experience</option>
							<option value="11AM">11AM</option>
							<option value="12PM">12PM</option>
							<option value="1PM">1PM</option>
							<option value="2PM">2PM</option>
							<option value="3PM">3PM</option>
							<option value="4PM">4PM</option>
						</select>
					</div>

					<div class="form-group col-md-4">
						<input type="email" class="form-control" id="email" name="email" placeholder="6. Your email address">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<input type="text" class="form-control" id="first-name" name="first-name" placeholder="7. Your first name">
					</div>

					<div class="form-group col-md-4">
						<input type="text" class="form-control" id="last-name" name="last-name" placeholder="8. Your last name">
					</div>

					<div class="form-group col-md-4">
						<input type="text" class="form-control" id="telephone" name="telephone" placeholder="9. Your telephone">
					</div>
				</div>

			</div><!-- .col-md-12 -->

			<div class="col-md-12">
				<input type="checkbox" name="tac-checkbox" id="tac-checkbox"> I have read and agreed the Terms and Conditions
			</div>

			<input type="submit" value="Reserve it">

		</div><!-- .row -->

		<?php echo form_close(); ?>

		<script>
			var today = new Date();
			var dd = today.getDate();
	  var mm = today.getMonth() + 1; //January is 0!
	  var yyyy = today.getFullYear();

	  if(dd < 10) {
	  	dd = '0' + dd
	  }

	  if(mm < 10) {
	  	mm = '0' + mm
	  }
	  today = mm + '/' + dd + '/' + yyyy;

	  var flag = true;
	  var beforeDateFlag = true

	  var reservationForm = document.getElementById('reservation-form');

	  var r_event = document.getElementById('event');
	  var r_place = document.getElementById('place');
	  var r_people = document.getElementById('people');
	  var r_date = document.getElementById('datepicker');
	  var r_time = document.getElementById('time');
	  var r_email = document.getElementById('email');
	  var r_firstName = document.getElementById('first-name');
	  var r_lastName = document.getElementById('last-name');
	  var r_telephone = document.getElementById('telephone');
	  var r_checkbox = document.getElementById('tac-checkbox');

	  var r_data = [r_event, r_place, r_people, r_date, r_time, r_email, r_firstName, r_lastName, r_telephone];
	  var r_valid = new Array(9);

	  reservationForm.addEventListener('submit', function(e) {

	  	for (var r_index = 0; r_index < r_data.length; r_index++) {
	  		if(r_data[r_index].value == "") {
	  			r_data[r_index].style.borderColor = "red";
	  			flag = true;
	  			r_valid[r_index] = true;
	  		}
	  		else {
	  			r_data[r_index].style.borderColor = "#292929";
	  			flag = false;
	  			r_valid[r_index] = false;
	  		}
	  	}

	  	if (r_date.value <= today) {
	  		r_date.style.borderColor = "red";
	  		beforeDateFlag = true;
	  	}
	  	else {
	  		r_date.style.borderColor = "#292929";
	  		beforeDateFlag = false;
	  	}

	  	// if (flag == true) {
	  	// 	e.preventDefault();
	  	// 	alert("Please complete the reservation form.");
	  	// }
	  	if (beforeDateFlag == true && r_date.value != "")
	  	{
	  		e.preventDefault();
	  		alert("Date picked has passed. Cannot create reservation.");
	  	}

	  	for (var r_index = 0; r_index < r_valid.length; r_index++) {
	  		if (r_valid[r_index] == true) {
	  			e.preventDefault();
				alert("Please complete the reservation form.");
				break;
	  		}
	  	}

	  	if (r_checkbox.checked == false) {
  			e.preventDefault();
			alert("Please read the TERMS AND CONDITIONS");
	  	}
	  });

	</script>

</div><!-- .container -->

</div>