<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Reservation</li>
</ol>

<div class="card mb-3">
  <div class="card-header">
    <h2 class="cms-title">Reservation</h2>
    <a href="<?php echo site_url('reservation') ?>" class="btn btn-secondary btn-add">Make Reservation</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <?php echo form_open('admin/reservation/index'); ?>

      <input type="submit" name="submit" value="All" class="btn-add btn-add-inverse" > |
      <input type="submit" name="submit" value="Pending" class="btn-add btn-add-inverse"> |
      <input type="submit" name="submit" value="Approved" class="btn-add btn-add-inverse"> |
      <input type="submit" name="submit" value="Cancelled" class="btn-add btn-add-inverse"> |
      <input type="submit" name="submit" value="Confirmed" class="btn-add btn-add-inverse">
      <?php echo form_close(); ?>

      <br>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
          <tr>
            <th>Name</th>
            <th>Type of Event</th>
            <th>Date of Event</th>
            <th>Email Address</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php
        $max = 0;
        $num = 1;
        ?>

        <tbody>
          <?php if (!empty($reservations)) : ?>
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
                <td>
                  <?php
                  $date = strtotime($reservation['date_of_event']);
                  echo date("M d Y" ,$date); ?>
                </td>
                <td>
                  <?php echo $reservation['email_address']; ?>
                </td>
                <td>
                  <?php if($reservation['status'] == 1)
                  echo "Pending";
                  else if ($reservation['status'] == 0)
                    echo "Approved";
                  else if ($reservation['status'] == 2)
                    echo "Confirmed by User";
                  else 
                    echo "Cancelled";
                  ?>
                </td>
                <td>
                  <a href="#" class="btn default-btn btn-primary far fa-edit" data-toggle="modal" data-target="#myModal<?php echo $num; ?>" title="Edit">  </a>

                  <!-- The Modal -->
                  <div class="modal modal-inverse" id="myModal<?php echo $num; ?>">
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
                              <p>
                                <?php echo form_open('admin/reservation/approve_reservation/' . $reservation['reservation_id']); ?>
                                <b>Color Theme: </b>
                                <input type="text" name="color-theme" >
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
                              <p>
                                <b>Packages: </b>
                                <select name="package_id">
                                  <?php foreach($packages as $package) : ?>
                                    <option value="<?php echo $package['package_id']; ?>">
                                      <?php echo $package['package_no']; ?>
                                    </option>
                                  <?php endforeach; ?>
                                </select>
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
                                else if ($reservation['status'] == 2)
                                  echo "Confirmed by User";
                                else
                                  echo "Cancelled";
                                ?>
                              </p>
                              <?php if ($reservation['status'] == 1 || $reservation['status'] == 2) : ?>
                                <p><b>Manage: </b></p>
                                <div class="row row-inverse">
                                  <div class="col-md-2">
                                    <input type="hidden" name="id" value="<?php echo $reservation['reservation_id']; ?>">
                                    <input type='submit' class='btn btn-success' value='Approve' <?php if ($reservation['status'] != 2) { echo 'disabled'; } ?>>
                                    <?php echo form_close(); ?>
                                  </div>

                                  <div class="col-md-2">
                                    <?php echo form_open('admin/reservation/cancel_reservation/'); ?>
                                    <input type="hidden" name="id" value="<?php echo $reservation['reservation_id']; ?>">
                                    <input type='submit' class='btn btn-danger' value='Cancel'>
                                    <?php echo form_close(); ?>
                                  </div>

                                  <div class="col-md-2">
                                    <?php echo form_open('admin/reservation/send_email'); ?>
                                    <input type="hidden" name="id" value="<?php echo $reservation['reservation_id']; ?>">
                                    <input type="hidden" name="reference-no" value="<?php echo $reservation['reference_no']; ?>">
                                    <input type="hidden" name="email" value="<?php echo $reservation['email_address']; ?>">
                                    <input type='submit' class='btn btn-secondary' value='Send email' <?php if ($reservation['status'] == 2) { echo 'disabled'; } ?>>
                                    <?php echo form_close(); ?>
                                  </div>
                                </div>
                              <?php endif; ?>
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
                <?php
                if ($reservation['timestamp'] >= $max) {
                  $max = $reservation['timestamp'];
                }
                ?>
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
          </tbody>

          <tfoot>
            <tr>
              <tr>
                <th>Name</th>
                <th>Type of Event</th>
                <th>Date of Event</th>
                <th>Email Address</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tr>
          </tfoot>

        </table>

      </div>
    </div>
    <div class="card-footer small text-muted">Updated at <?php echo $max; ?> </div>
  </div>

  <?php
  if (isset($_GET['msg']) && $_GET['msg'] == 'true') {
    echo "<script>alert('Email has been sent. Please wait for the user to confirm his/her reservation.');</script>";
  }
  elseif (isset($_GET['msg']) && $_GET['msg'] == 'false') {
    echo "<script>alert('Uh oh. There seems to be a problem sending the email. Please try again.');</script>";
  }
  ?>









