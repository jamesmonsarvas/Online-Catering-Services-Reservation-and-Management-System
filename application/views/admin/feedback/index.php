<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Feedback</h3>
  </div>
  <div class="card-body">
    <div class="table-responsive">

    <?php echo form_open('admin/feedback/index'); ?>

      Search : <input type="text" id="search" name="search" value="">

      Filter : <select id="filter" name="filter">
        <option value="any" selected>Any</option>
      	<option value="name">Name</option>
      	<option value="reason">Reason</option>
      </select>

      <input type="submit" name="submit" value="GO">

    <?php echo form_close(); ?>

    <br>

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
                <?php echo $feedback['reason']; ?>
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
                              <div class="col-md-6">
                                <p><b>Name</b> : <?php echo $feedback['name']; ?></p> 
                                <p><b>Reason</b> : <?php echo $feedback['reason']; ?></p>
                              </div>
                              <div class="col-md-6">
                                <p><b>Email</b> : <?php echo $feedback['email']; ?></p>
                                <p><b>Contact</b> : <?php echo $feedback['phone_number']; ?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <p><b>Message</b> : </p>
                                <p><?php echo $feedback['message']; ?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">

                                <?php echo form_open("admin/feedback/update_feature/$num", "class='feature$num'" ); ?>
                                <input type="hidden" name="id" value="<?php echo $feedback['feedback_id']; ?>">

                                <b>Feature:</b>
                                <input type="radio" id="yes" name="feature<?php echo $num; ?>" value="1"
                                <?php
                                  if ($feedback['feature'] == 1)
                                  {
                                    echo "checked";
                                  }
                                ?>
                                >
                                <label for="yes">Yes</label>
                                <input type="radio" id="no" name="feature<?php echo $num; ?>" value="0"
                                <?php
                                  if ($feedback['feature'] == 0)
                                  {
                                    echo "checked";
                                  }
                                ?>
                                >
                                <label for="no">No</label>


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