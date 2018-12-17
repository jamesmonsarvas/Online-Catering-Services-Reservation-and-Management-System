<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Report</h3>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <?php echo form_open('admin/report/report_event'); ?>
      <h2>Event Report Panel</h2>
      <p>
        Number of Event: <?php echo $count_events; ?> 
      </p>
      <a href="<?php echo site_url('admin/report/report_event_charts') ?>" class="btn btn-secondary">View Charts & Graphs</a>
      <p>
        Events for the month of : <select name="selectMonth" id="selectMonth">
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
            <th>Reason</th>
            <th>Date Added</th>
            <th></th>
          </tr>
        </thead>

        <?php $num = 1; ?>
        <tbody>
         <?php if (!empty($events)) : ?>
          <?php foreach ($events as $event) : ?>
            <tr>
              <td>
                <?php echo $num; ?>
              </td>
              <td>
                <?php echo $event['firstname'] . " " . $event['lastname']; ?>
              </td>
              <td>
                <?php
                if ($event['type_of_event'] == 20) {
                  echo "Wedding";
                }
                else if ($event['type_of_event'] == 19) {
                  echo "Debut";
                }
                else if ($event['type_of_event'] == 18) {
                  echo "Birthday, Anniversary, Graduation, and Baptismal";
                }
                else if ($event['type_of_event'] == 17) {
                  echo "Inauguration, Fiesta, Seminar, and Other Events";
                }
                ?>
              </td>
              <td>
                <?php 
                if ($event['event_status'] == 0) {
                  echo "Ongoing";
                }
                else if ($event['event_status'] == 1) {
                  echo "Finished";
                }
                ?>
              </td>
              <td>
                <a href="#" class="btn default-btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $num; ?>">
                  View
                </a>

                <!-- The Modal -->
                <div class="modal event-modal" id="myModal<?php echo $num; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Event View</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6">
                            <p>
                              <b>Reference No.: </b>
                              <?php echo $event['reference_no']; ?>
                            </p>
                            <p>
                              <b>Name: </b>
                              <?php echo $event['firstname'] . " " . $event['lastname']; ?>
                            </p>
                            <p>
                              <b>Type of Event: </b>
                              <?php
                              if ($event['type_of_event'] == 20) {
                                echo "Wedding";
                              }
                              else if ($event['type_of_event'] == 19) {
                                echo "Debut";
                              }
                              else if ($event['type_of_event'] == 18) {
                                echo "Birthday, Anniversary, Graduation, and Baptismal";
                              }
                              else if ($event['type_of_event'] == 17) {
                                echo "Inauguration, Fiesta, Seminar, and Other Events";
                              } 
                              ?>
                            </p>
                            <p>
                              <b>Color Theme: </b>
                              <?php echo $event['color_theme']; ?>
                            </p>
                            <p>
                              <b>Package: </b>
                              <?php
                              if ($event['package_id'] == 1)
                                echo "Package I";
                              else if ($event['package_id'] == 2)
                                echo "Package II";
                              else if ($event['package_id'] == 3)
                                echo "Package III";
                              else if ($event['package_id'] == 4)
                                echo "Package IV";
                              ?>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <p>
                              <b>Venue: </b>
                              <?php echo $event['place_of_event']; ?>
                            </p>
                            <p>
                              <b>Date of Event: </b>
                              <?php echo date("M-d-Y", strtotime($event['date_of_event'])); ?>
                            </p>
                            <p>
                              <b>Time of Event: </b>
                              <?php echo $event['time_of_event']; ?>
                            </p>
                            <p>
                              <?php echo form_open("admin/events/update_event/$num", "class='event_status$num'" ); ?>
                              <input type="hidden" name="id" value="<?php echo $event['event_id']; ?>">
                              <b>Status</b>
                              <input type="radio" id="yes" name="event_status<?php echo $num; ?>" value="1"
                              <?php
                              if ($event['event_status'] == 1)
                              {
                                echo "checked";
                              }
                              ?>
                              >
                              <label for="yes">Finished</label>
                              <input type="radio" id="no" name="event_status<?php echo $num; ?>" value="0"
                              <?php
                              if ($event['event_status'] == 0)
                              {
                                echo "checked";
                              }
                              ?>
                              >
                              <label for="no">Ongoing</label>
                            </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <b>Amenities: </b><br>
                            <div class="row">
                              <?php 
                              if ($event['type_of_event'] == 20) {
                                echo "<div class='col-md-6'>
                                -chair with cover & motif ribbon <br>
                                -round table with cloth & motif topping <br>
                                -floral or lampara centerpiece <br>
                                -catering equipments <br>
                                -toast of red wine <br>
                                -waiter/server in uniform <br>
                                -arch entrance with floral arrangement <br>
                                </div>
                                <div class='col-md-6'>
                                -buffet table with set up & motif cloth <br>
                                -gift & cake table with motif cloth <br>
                                -carpet with fresh rose petals <br>
                                -couple of dove in a cage <br>
                                -newly wed table in gazebo or backdrop with balloon & floral arrangement <br>
                                -name tag & table number <br>
                                </div>";
                              }
                              else if ($event['type_of_event'] == 19) {
                                echo "<div class='col-md-6'>
                                - chair with cover & motif ribbon <br>
                                - round table with cloth & motif topping <br>
                                - floral or lampara centerpiece <br>
                                - catering equipments <br>
                                - toast of red wine <br>
                                - waiter/server in uniform <br>
                                - arch entrance with floral arrangement <br>
                                </div>
                                <div class='col-md-6'>
                                - gift table with motif cloth <br>
                                - carpet with balloon arrangement <br>
                                - 18 roses & candles with motif ribbon <br>
                                - debutant cake table in gazebo with balloon & floral arrangement <br>
                                - table number <br>
                                </div>";
                              }
                              else if ($event['type_of_event'] == 18) {
                                echo "<div class='col-md-6'>
                                -chair with cover & motif ribbon <br>
                                -round table with cloth & motif topping <br>
                                -floral or lampara centerpiece <br>
                                -catering equipments <br>
                                -waiter/server in uniform <br>
                                </div>
                                <div class='col-md-6'>
                                -buffet table with set up & motif cloth <br>
                                -gift & cake table with motif cloth <br>
                                -backdrop with balloon arrangement <br>
                                </div>";
                              }
                              else if ($event['type_of_event'] == 17) {
                                echo "<div class='col-md-6'>
                                -chair with cover & motif ribbon <br>
                                -round table with cloth & motif topping <br>
                                -floral or lampara centerpiece <br>
                                -catering equipments <br>
                                </div>
                                <div class='col-md-6'>
                                -waiter/server in uniform <br>
                                -buffet table with set up & motif cloth <br>
                                -balloon arrangement <br>
                                </div>";
                              }
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <b>Comments: </b><br>
                            <textarea name="comments"><?php echo $event['comments']; ?></textarea>
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