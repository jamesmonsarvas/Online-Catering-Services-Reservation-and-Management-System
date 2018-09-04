
<div class="card mb-3">
  <div class="card-header">
    <h2 class="cms-title">Reservation</h2>
		<a href="" class="btn btn-secondary">Add New</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
          <tr>
						<th>Name</th>
						<th>Date of Event</th>
						<th>Time of Event</th>
						<th>Venue</th>
						<th>Status</th>
						<th></th>
						<th></th>
						<th></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($reservations as $reservation) : ?>
						<tr>
							<td><?php echo $reservation['lastname'] . ", " . $reservation['firstname'] ; ?></td>
							<td><?php echo $reservation['date_of_event']; ?></td>
							<td><?php echo $reservation['time_of_event']; ?></td>
							<td><?php echo $reservation['venue']; ?></td>
							<td>
								<?php if($reservation['status'] == 1)
									echo "Pending";
									else 
									echo "Done";
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
        </tbody>

				<tfoot>
          <tr>
            <th>Name</th>
						<th>Date of Event</th>
						<th>Time of Event</th>
						<th>Venue</th>
						<th>Status</th>
						<th></th>
						<th></th>
						<th></th>
          </tr>
        </tfoot>

      </table>

    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

