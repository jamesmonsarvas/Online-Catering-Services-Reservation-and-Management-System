<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Packages</h3>
    
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">
      Add New
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <?php echo form_open('admin/packages/insert_content'); ?>

              <div class="form-group">
                <input type="text" class="form-control" name="package-no" placeholder="Package No">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Price"></input>
              </div>

              <input type="hidden" name="id" value="<?php // echo $packages_content[0]['package_id']; ?>">

              <?php $index = 0; ?>
              
              <?php //foreach ($all_package_content as $all_content): ?>
                
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="type_of_menu[]" class="form-check-input" checked value="">Option
                  </label>
                </div>

              <?php //endforeach ?>

              <button type="submit" class="btn btn-default">Submit</button>

            <?php echo form_close(); ?>
            
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>  

        </div>
      </div>
    </div>

  </div>
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
          <tr>
						<th>Packages</th>
						<th>Packages Price</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($packages as $package): ?>
            <tr>
              <td><?php echo $package['package_no']; ?></td>
              <td><?php echo "&#8369;" . $package['price']; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>admin/packages/package_content_index/<?php echo $package['package_id']; ?>" class="btn default-btn btn-primary">View</a>
              </td>
              <td>
                <a href="" class="btn default-btn btn-info">Update</a>
              </td>
              <td>
                <?php echo form_open('admin/packages/delete/' . $package['package_id']); ?>
                    <input type="submit" class="btn default-btn btn-danger" value="Delete">
                <?php echo form_close(); ?>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>

				<tfoot>
          <tr>
            <th>Packages</th>
						<th>Packages Price</th>
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