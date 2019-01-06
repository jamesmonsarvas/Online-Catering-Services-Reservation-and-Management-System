<br><br><br>
<?php 
if (isset($_GET['msg']) && $_GET['msg'] == "true") {
	echo '<div class="validation">
	<div class="validation-true">
	<div class="true-content">
	<p>Thank you for making a reservation at us!</p>
	<p>Please wait while we review your reservation and we will contact you. Have a nice day!</p>
	</div>
	<center><button id="close-validation">Dismiss</button></center>
	</div>
	</div>';
} else if (isset($_GET['msg']) && $_GET['msg'] == "false") {
	echo '<div class="validation">
	<div class="validation-false">
	<div class="false-content">
	<p>Ooops!</p>
	<p>The date you have submitted has already been reserved. Please try another date.</p>
	</div>
	<center><button id="close-validation">Dismiss</button></center>
	</div>
	</div>';
}
?>
<div id="reservation-page">

	<div class="container">

		<div id="terms-and-condition">

			<div class="row">
				<div class="col-md-8">
					<h3>Terms and Conditions</h3>
					<ul>
						<li>Php 5,000 reservation fee to save the date</li>
						<li>75% down payment 15 days before</li>
						<li>25% balance before the event</li>
						<li>Additional 15% service charge</li>
						<li>Customer agree to pay in case of loss or damage of property/items based on market value</li>
						<li>Just two events that differ from time of event can be reserved on a date.</li>
					</ul>

				</div><!-- .col-md-6 -->
			</div><!-- .row -->

		</div><!-- #terms-and-condition -->

		<div id="error-msg" style="display: none;">
			<div class="row">
				<div class="col-md-12 error-msg">
					<h4>Oops! It looks like you have an error in your form!</h4>
					<ul id="error-items">

					</ul>
				</div><!-- .col-md-6 -->
			</div><!-- .row -->
		</div><!-- #error-msg -->

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
			$(function () {	
				var today = new Date();
				var dd = today.getDate();
			  var mm = today.getMonth() + 1; //January is 0!
			  var yyyy = today.getFullYear();

			  if(dd < 10) {
			  	dd = '0' + dd;
			  }

			  if(mm < 10) {
			  	mm = '0' + mm;
			  }
			  today = mm + '/' + dd + '/' + yyyy;

			  var flag = true;
			  var beforeDateFlag = true;
			  var numbers = "1234567890";

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

			  r_telephone.addEventListener('keypress', function(e) {
			  	if (r_telephone.value.length > 10) {
			  		e.preventDefault();
			  	}
			  	var charCode = (e.which) ? e.which : e.keyCode
			  	if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			  		e.preventDefault();
			  	}

			  	return true;
			  });

			  reservationForm.addEventListener('submit', function(e) {
			  	$('#error-items').empty();
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

			  	var date_int = Date.parse(r_date.value);			  	
			  	var today_int = Date.parse(today);

			  	if (date_int <= today_int) {
			  		r_date.style.borderColor = "red";
			  		beforeDateFlag = true;
			  	}
			  	else {
			  		r_date.style.borderColor = "#292929";
			  		beforeDateFlag = false;
			  	}
			  	if (beforeDateFlag == true && r_date.value != "")
			  	{
			  		e.preventDefault();
			  		$('#error-items').append("<li>Date picked has passed. Cannot create reservation.</li>");
			  		$('#error-msg').css("display", "block");
			  	}

			  	for (var r_index = 0; r_index < r_valid.length; r_index++) {
			  		if (r_valid[r_index] == true) {
			  			e.preventDefault();
			  			$('#error-items').append("<li>Please complete the reservation form.</li>");
			  			$('#error-msg').css("display", "block");
			  			break;
			  		}
			  	}

			  	if (r_checkbox.checked == false) {
			  		e.preventDefault();
			  		$('#error-items').append("<li>Please read the TERMS AND CONDITIONS</li>");
			  		$('#error-msg').css("display", "block");
			  	}
			  });
			});

		</script>

	</div><!-- .container -->

</div>