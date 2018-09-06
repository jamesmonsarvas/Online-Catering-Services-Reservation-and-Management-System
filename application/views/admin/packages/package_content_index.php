<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Package 
        <?php echo $packages_content[0]['package_id']; ?>
    </h3>
    <a href="<?php echo site_url('admin/packages/create') ?>" class="btn btn-secondary">Add New</a>
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
                <a href="" class="btn default-btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>

				<tfoot>
          <tr>
            <th>Type of Menu</th>
						<th></th>
            <th></th>
          </tr>
        </tfoot>

      </table>

    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>