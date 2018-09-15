<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Package 
        <?php echo $packages_content[0]['package_id']; ?>
    </h3>
    <!-- <a href="<?php echo site_url('admin/packages/create') ?>" class="btn btn-secondary">Add New</a> -->
    <!-- Button to Open the Modal -->
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

              <input type="hidden" name="id" value="<?php echo $packages_content[0]['package_id']; ?>">

              <?php $index = 0; ?>
              
              <?php foreach ($all_package_content as $all_content): ?>
                
                <div class="form-check">

                  <?php if ($all_content['package_content_id'] == $packages_content[$index]['package_content_id']): ?>

                    <label class="form-check-label">
                      <input type="checkbox" name="type_of_menu[]" class="form-check-input" checked value="<?php echo $all_content['package_content_id']; ?>"><?php echo $all_content['type_of_menu']; ?>
                    </label>

                    <?php $index += 1; ?>

                  <?php else : ?>

                    <label class="form-check-label">
                      <input type="checkbox" name="type_of_menu[]" class="form-check-input" value="<?php echo $all_content['package_content_id']; ?>"><?php echo $all_content['type_of_menu']; ?>
                    </label>

                  <?php endif; ?>

                </div>

              <?php endforeach ?>

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
						<th>Type of Menu</th>
						<th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($packages_content as $package_content) : ?>
            <tr>
              <td><?php echo $package_content['type_of_menu']; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>admin/packages/list_of_menu/<?php echo $package_content['package_content_id']; ?>" class="btn default-btn btn-primary">View</a>
              </td>
              <td>
                <?php echo form_open('admin/packages/delete_content/' . $package_content['package_content_id']); ?>
                    <input type="submit" class="btn default-btn btn-danger" value="Delete">
                <?php echo form_close(); ?>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>

				<!-- <tfoot>
          <tr>
            <th>Type of Menu</th>
						<th></th>
            <th></th>
          </tr>
        </tfoot> -->

      </table>

    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>