<body style="background: white; font-family: Times New Roman;">
	<table align="center" border="0">
		<tr>
			<td>
				<a href="<?php echo site_url('/'); ?>" id="default-logo"><img src="<?php echo site_url('assets/images/preload.png'); ?>" alt=""></a>
			</td>
			<td align="center" colspan="2">
				#83 J.P. Rizal St. Brgy. Sala, <br>
				City of Cabuyao, Laguna <br>
				0906-470-2286, 0921-402-4939, (049)-544-2126) <br>
				<b>Facebook: </b> www.facebook.com/celsoaranezleynes/
			</td>
		</tr>
		<tr>
			<td colspan="3" align="center">
				<hr color="black">
				<hr color="black">
				<h2>Sales Order</h2>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Name : <?php echo $print_event[0]['firstname'] . " " . $print_event[0]['lastname']; ?>
			</td>
			<td align="right" colspan="2">
				Tel. No.: <?php echo $print_event[0]['telephone']; ?> 
			</td>
		</tr>
		<tr>
			<td>
				Date : <?php echo date("M-d-Y", strtotime($print_event[0]['date_of_event'])); ?>
			</td>
			<td align="right" colspan="2">
				Time: <?php echo $print_event[0]['time_of_event']; ?> 
			</td>
		</tr>
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<table border="1" style="border: 1px solid black;">
					<tr>
						<td colspan="10">
							Event Description
						</td>
					</tr>
					<tr>
						<td colspan="3">
							Package: <?php
							if ($print_event[0]['package_id'] == 1)
								echo "<u>Package I</u>";
							else if ($print_event[0]['package_id'] == 2)
								echo "<u>Package II</u>";
							else if ($print_event[0]['package_id'] == 3)
								echo "<u>Package III</u>";
							else if ($print_event[0]['package_id'] == 4)
								echo "<u>Package IV</u>";
							?> <br>
							Type of Event:
							<?php
							if ($print_event[0]['type_of_event'] == 20) {
								echo "<u>Wedding</u>";
							}
							else if ($print_event[0]['type_of_event'] == 19) {
								echo "<u>Debut</u>";
							}
							else if ($print_event[0]['type_of_event'] == 18) {
								echo "<u>Birthday, Anniversary, Graduation, and Baptismal</u>";
							}
							else if ($print_event[0]['type_of_event'] == 17) {
								echo "<u>Inauguration, Fiesta, Seminar, and Other Events</u>";
							}
							?> <br>
							<div style="width: 750px;">
							<?php echo $print_event[0]['comments']; ?>
							</div>
							<br><br><br><br><br><br><br><br><br><br><br>
						</td>
					</tr>
					<tr>
						<td align="center">
							Customers agreed to pay in case of loss or damage of property / items based <br>
							on market value <br>
							<br>
							____________________________________________ <br>
							Authorized Signature Over Printed Name
						</td>
						<td align="center">
							Total: P__________________ <br>
							Deposit: P_________________ <br>
							Balance: P_________________ <br>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				Order Taken By: <br>
				____________________________
			</td>
			<td align="center" colspan="2">
				Delivered Received By: <br>
				____________________________
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<hr color="black">
			</td>
		</tr>
		<tr>
			<td>
				catering services <br>
				clown & party favors <br>
				mascot character <br>
				face painting <br>
				party box <br>
				balloons & flower arrangement
			</td>
			<td>
				birthday & wedding <br>
				giveaways <br>
				tent <br>
				photobooth <br>
				photo & video coverage <br>
				hair and make-up artist
			</td>
			<td>
				chocolate fountain <br>
				tarpaulin printing <br>
				lechon baboy & baka <br>
				choreography <br>
				lights & sound <br>
				gowns & barong
			</td>
		</tr>
	</table>





	
	
</body>