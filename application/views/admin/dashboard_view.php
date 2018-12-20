
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Overview</li>
</ol>

<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-4 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="mr-5"><?php echo $count_pending_rsvtion; ?> Pending Reservations!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/reservation/index') ?>">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-list"></i>
        </div>
        <div class="mr-5"><?php echo $count_latest_fdback; ?> Latest Feedbacks!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/feedback/index') ?>">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-4 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-shopping-cart"></i>
        </div>
        <div class="mr-5"><?php echo $count_unfinished_events; ?> Unfinished Events!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/events/index') ?>">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
      <!-- <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-fw fa-life-ring"></i>
            </div>
            <div class="mr-5">13 New Tickets!</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div> -->
    </div>

    <?php $num = 1; ?>
    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        <b>Pending Reservations</b></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Type of Event</th>
                  <th>Venue</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Type of Event</th>
                  <th>Venue</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php if(!empty($reservations)) : ?>
                  <?php foreach($reservations as $reservation) : ?>
                    <tr>
                      <td><?php echo $reservation['firstname']." ".$reservation['lastname']; ?></td>
                      <td><?php
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
                      ?></td>
                      <td><?php echo $reservation['place_of_event']; ?></td>
                      <td><?php if($reservation['status'] == 1)
                      echo "Pending";
                      else if ($reservation['status'] == 0)
                        echo "Approved";
                      else 
                        echo "Cancelled";
                      ?></td>
                      <td><a href="#" class="btn default-btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $num; ?>">Manage</a></td>
                    </tr>
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
                                  else
                                    echo "Cancelled";
                                  ?>
                                </p>
                                <?php if ($reservation['status'] == 1) : ?>
                                  <p><b>Manage: </b></p>

                                  <input type="hidden" name="id" value="<?php echo $reservation['reservation_id']; ?>">
                                  <input type='submit' class='btn btn-success' value='Approve'>
                                  <?php echo form_close(); ?>

                                  <?php echo form_open('admin/reservation/cancel_reservation/'); ?>
                                  <input type="hidden" name="id" value="<?php echo $reservation['reservation_id']; ?>">
                                  <input type='submit' class='btn btn-danger' value='Cancel'>
                                  <?php echo form_close(); ?>
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
                    <?php $num++; ?>
                  <?php endforeach; ?>
                  <?php else : ?>
                    <tr> 
                      <td colspan="6">
                        <center>
                          ~ No pending reservations! ~
                        </center>  
                      </td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <h3 class="cms-title">Feedback</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Feedback Type</th>
                    <th>Date Added</th>
                    <th></th>
                  </tr>
                </thead>

                <?php $num = 1; ?>

                <tbody>
                  <?php if(!empty($feedbacks)) : ?>
                    <?php foreach ($feedbacks as $feedback) : ?>
                      <tr>
                        <td>
                          <?php echo $num; ?>
                        </td>
                        <td>
                          <?php echo $feedback['name']; ?>
                        </td>
                        <td>
                          <?php
                          if ($feedback['feedback_type'] == 1) {
                            echo "System";
                          }
                          else if ($feedback['feedback_type'] == 2) {
                            echo "Service";
                          } 
                          ?>
                        </td>
                        <td>
                          <?php 
                          $date = strtotime($feedback['date_added']);
                          echo date("M d Y" ,$date);
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
                                  <h4 class="modal-title">Feedback View</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      Name: <?php echo $feedback['name']; ?>
                                    </div>
                                    <div class="col-sm-6">
                                      Email Address: <?php echo $feedback['email']; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-6">
                                      Feedback Type: <b>
                                      <?php 
                                      if ($feedback['feedback_type'] == 1) {
                                        echo "SYSTEM";
                                      }
                                      else if ($feedback['feedback_type'] == 2) {
                                        echo "SERVICE";
                                      }
                                      ?>
                                      </b>
                                    </div>
                                    <div class="col-sm-6">
                                      Phone Number : <?php echo $feedback['phone_number']; ?>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="dropdown-divider"></div>
                                      <b>Feedback Scores</b>
                                      <?php if ($feedback['feedback_type'] == 1) : ?>
                                        <br />
                                        1. I thought the system was easy to use.
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q1']; ?>
                                        <br />
                                        2. I think that I would need the support of a technical person to be able to use this system. 
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q2']; ?>
                                        <br />
                                        3. I found the various functions in this system were well integrated.
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q3']; ?>
                                        <br />
                                        4. I thought there was too much inconsistency in this system.
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q4']; ?>
                                        <br />
                                        5. I found the system unnecessarily complex.
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q5']; ?>
                                      <?php elseif($feedback['feedback_type'] == 2) : ?>
                                        <br />
                                        1. I thought the event was excellent and well-planned. 
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q1']; ?>
                                        <br />
                                        2. I think the food served at the event was delicious. 
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q2']; ?>
                                        <br />
                                        3. I found the staff was performing service right. 
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q3']; ?>
                                        <br />
                                        4. I felt the sincerity of interest when the event was being planned. 
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q4']; ?>
                                        <br />
                                        5. The overall service I received was better than I expected. 
                                        <br />
                                        <b>SCORE : </b><?php echo $feedback['q5']; ?>
                                      <?php endif; ?>
                                      <br />
                                      <b>Median : </b><?php
                                      $median = doubleval(($feedback['q1'] + $feedback['q2'] + $feedback['q3'] + $feedback['q4'] + $feedback['q5']) / 5);
                                      echo $median;
                                      ?>
                                      <div class="dropdown-divider"></div>
                                      <b>SUGGESTION OF USER: </b>
                                      <br />
                                      <?php echo $feedback['suggestion']; ?>
                                    </div>
                                  </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                  <input type="submit" name="submit" class="btn btn-success">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>  

                                <?php echo form_close(); ?>

                              </div>
                            </div>
                          </div>


                        </td>
                      </tr>
                      <?php $num++; ?>
                    <?php endforeach; ?>
                    <?php else : ?>
                      <tr>
                        <td colspan="8">
                          <center>
                            No records!
                          </center>
                        </td>

                      </tr>
                    <?php endif; ?>
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Reason</th>
                      <th>Date Added</th>
                      <th></th>
                    </tr>
                  </tr>
                </tfoot>

              </table>
            </div>
          </div>
        </div>
    <!-- /.container-fluid -->