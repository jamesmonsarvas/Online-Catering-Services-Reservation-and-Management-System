<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Packages</h3>
    <a href="<?php echo site_url('admin/packages/create') ?>" class="btn btn-secondary">Add New</a>
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