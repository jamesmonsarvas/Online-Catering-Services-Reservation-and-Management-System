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

		<div class="packages-info">
			
			<div class="row">
				
					<?php foreach ($packages as $package): ?>
						<div class="col-sm-6">
						<b><u><?php echo $package['package_no']; ?></u></b>
						<?php if (isset($packages_content)) : ?>
							<?php foreach ($packages_content as $package_content): ?>
								<?php if ($package['package_id'] == $package_content['package_id']) : ?>
									<li>
										<label><?php echo $package_content['type_of_menu']; ?></label>
									</li>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
						</div>
					<?php endforeach; ?>
					
			</div>

		</div>

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

		<?php echo form_open('reservation/confirm_verification', 'id="reservation-form"'); ?>

		<div class="row">

			<input type="hidden" name="id" value="<?php if (isset($_GET['id'])) { echo $_GET['id']; } ?>">

			<div class="col-md-12">

				<div class="row">

					<div class="form-group col-md-4">
						<select name="package" id="package">
							<option value>1. Pick a package you want</option>
							<?php foreach($packages as $p) : ?>
								<option value="<?php echo $p['package_id']; ?>"><?php echo $p['package_no']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<div class="form-group col-md-4">
						<input type="text" class="form-control" id="budget" name="budget" placeholder="2. Your budget">
					</div>

					<div class="form-group col-md-4">
						<select name="color-theme" id="color-theme">
							<option value>3. Pick your ideal color theme</option>
							<option value="Red">Red</option>
							<option value="Blue">Blue</option>
							<option value="Pink">Pink</option>
							<option value="Yellow">Yellow</option>
							<option value="White">White</option>
							<option value="Purple">Purple</option>
						</select>
					</div>
				</div>

			</div><!-- .col-md-12 -->

			<div class="divider"></div>

			<div class="col-md-12">

				<div class="row">
					<div class="form-group col-md-4">
						<select name="function" id="function">
							<option value>4. What type of function is this?</option>
							<option value="Formal">Formal</option>
							<option value="Informal">Informal</option>
						</select>
					</div>

					<div class="form-group col-md-4">
					</div>

					<div class="form-group col-md-4">
						<select name="demographic" id="demographic">
							<option value>5. What is the common demographic of the guests? </option>
							<option value="Children">Children</option>
							<option value="Teens">Teens</option>
							<option value="Young Adults">Young Adults</option>
							<option value="Adults">Adults</option>
							<option value="Elderly">Elderly</option>
							<option value="Mixed">Mixed</option>
						</select>
					</div>
				</div>

			</div><!-- .col-md-12 -->

			<div class="col-md-12">
				<input type="checkbox" name="tac-checkbox" id="tac-checkbox"> I have read and agreed the Terms and Conditions
			</div>

			<input type="submit" value="Submit">

		</div><!-- .row -->

		<?php echo form_close(); ?>

		<script>
			$(function () {		
				var reservationForm = document.getElementById('reservation-form');

				var r_package = document.getElementById('package');
				var r_budget = document.getElementById('budget');
				var r_colortheme = document.getElementById('color-theme');
				var r_function = document.getElementById('function');
				var r_demographic = document.getElementById('demographic');
				var r_checkbox = document.getElementById('tac-checkbox');

				var r_data = [r_package, r_budget, r_colortheme, r_function, r_demographic];
				var r_valid = new Array(5);

				r_budget.addEventListener('keypress', function(e) {
					if (r_budget.value.length > 10) {
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