<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Feedback</li>
</ol>

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
              <th>Feedback Type</th>
              <th>Date Added</th>
              <th></th>
            </tr>
        </tfoot>

      </table>
    </div>
  </div>
</div>
