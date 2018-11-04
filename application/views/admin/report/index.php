<div class="card mb-3">
	<div class="card-header">
		<h3 class="cms-title">Report</h3>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<?php echo form_open('admin/report/index'); ?>
			<h2>Reservation Report Panel</h2>
				<p>
					Number of Reservations: <?php echo $count_reservations; ?> 
				</p>
			<p>
				Reservations for the month of : <select name="selectMonth" id="selectMonth">
					<option value="0">All</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<input type="submit" name="submit" value="GO">
			</p>
			<?php echo form_close(); ?>


			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>Venue</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
				</tbody>
				<?php $num = 1; ?>
				<?php if(!empty($reservations)) : ?>
					<?php foreach($reservations as $reservation) : ?>
						<tr>
						  <td><?php echo $reservation['firstname']." ".$reservation['lastname']; ?></td>
						  <td>
						    <?php
						    if ($reservation['type_of_event'] == 20) {
						      echo "Wedding";
						    }
						    else if ($reservation['type_of_event'] == 19) {
						      echo "Debut";
						    }
						    else if ($reservation['type_of_event'] == 18) {
						      echo "Birthday, Anniversary, Graduation, and Baptismal";
						    }
						    else if ($reservation['type_of_event'] == 17) {
						      echo "Inauguration, Fiesta, Seminar, and Other Events";
						    }
						    ?>

						  </td>
						  <td><?php echo $reservation['place_of_event']; ?></td>
						  <td>
						    <?php if($reservation['status'] == 1)
						    echo "Pending";
						    else if ($reservation['status'] == 0)
						      echo "Approved";
						    else 
						      echo "Cancelled";
						    ?>
						  </td>
						  <td>
						    <a href="#" class="btn default-btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $num; ?>">
						      View
						    </a>

						    <!-- The Modal -->
						    <div class="modal" id="myModal<?php echo $num; ?>">
						      <div class="modal-dialog">
						        <div class="modal-content">

						          <!-- Modal Header -->
						          <div class="modal-header">
						            <h4 class="modal-title">Reservation View</h4>
						            <button type="button" class="close" data-dismiss="modal">&times;</button>
						          </div>

						          <!-- Modal body -->
						          <div class="modal-body">
						            <div class="row">
						              <div class="col-md-5">

						                <p>
						                  <b>Name: </b>
						                  <?php echo $reservation['firstname'] . " " . $reservation['lastname']; ?>
						                </p>
						                <p>
						                  <b>Date: </b>
						                  <?php echo $reservation['date_of_event']; ?>
						                </p>
						                <p>
						                  <b>Time: </b>
						                  <?php echo $reservation['time_of_event']; ?>
						                </p>
						              </div>
						              <div class="col-md-7">
						                <p>
						                  <b>Type of Event: </b>
						                  <?php
						                  if ($reservation['type_of_event'] == 20) {
						                    echo "Wedding";
						                  }
						                  else if ($reservation['type_of_event'] == 19) {
						                    echo "Debut";
						                  }
						                  else if ($reservation['type_of_event'] == 18) {
						                    echo "Birthday, Anniversary, Graduation, and Baptismal";
						                  }
						                  else if ($reservation['type_of_event'] == 17) {
						                    echo "Inauguration, Fiesta, Seminar, and Other Events";
						                  }
						                  ?>
						                </p>
						                <p>
						                  <b>Venue: </b>
						                  <?php echo $reservation['place_of_event']; ?>
						                </p>
						                <p>
						                  <b>Expected Guest Count: </b>
						                  <?php echo $reservation['exp_people_count']; ?>
						                </p>

						              </div>
						            </div>
						            <div class="row">
						              <div class="col-md-12">
						                <input type="hidden" name="id" value="<?php echo $reservation['reservation_id']; ?>">
						                <p><b>Status : </b>
						                  <?php
						                  if ($reservation['status'] == 1)
						                    echo "Pending";
						                  else if ($reservation['status'] == 0)
						                    echo "Approved";
						                  else
						                    echo "Cancelled";
						                  ?>
						                </p>
						                
						              </div>
						            </div>
						          </div>

						          <!-- Modal footer -->
						          <div class="modal-footer">
						            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						          </div>

						        </div>
						      </div>
						    </div>
						  </td>
						</tr>
						<?php $num++; ?>
					<?php endforeach; ?>
					<?php else : ?>
						<tr> 
							<td colspan="6">
								<center>
									~ No records! ~
								</center>  
							</td>
						</tr>
					<?php endif; ?>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>Venue</th>
							<th>Status</th>
							<th></th>
						</tr>
					</tr>
				</tfoot>

			</table>


		</div>
	</div>
</div>