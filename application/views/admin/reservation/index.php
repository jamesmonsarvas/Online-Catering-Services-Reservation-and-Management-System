
<h2 class="cms-title">Reservation</h2>
<a href="" class="btn btn-secondary">Add New</a>

<table class="table table-bordered table-striped">
	<tr>
		<th>No.</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date of Event</th>
		<th>Time of Event</th>
		<th>Venue</th>
		<th>Status</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach($reservations as $reservation) : ?>
		<tr>
			<td><?php echo $reservation['reservation_id']; ?></td>
			<td><?php echo $reservation['firstname']; ?></td>
			<td><?php echo $reservation['lastname']; ?></td>
			<td><?php echo $reservation['date_of_event']; ?></td>
			<td><?php echo $reservation['time_of_event']; ?></td>
			<td><?php echo $reservation['venue']; ?></td>
			<td>
				<?php if($reservation['status'] == 1)
					echo "Ongoing";
					else 
					echo "Finished";
				?>
					
			</td>
			<td>
				<a href="" class="btn default-btn btn-primary">View</a>
			</td>
			<td>
				<a href="" class="btn default-btn btn-info">Update</a>
			</td>
			<td>
				<a href="" class="btn default-btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
