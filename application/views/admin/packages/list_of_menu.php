
<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">
      <?php echo $menus[0]['type_of_menu']; ?> Menu
    </h3>
    <a href="<?php echo site_url('admin/packages/create') ?>" class="btn btn-secondary">Add New</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
          <tr>
						<th>Dishes</th>
						<th></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($menus as $menu) : ?>
            <tr>  
              <td><?php echo $menu['menu_details']; ?></td>
              <td>
                <a href="" class="btn default-btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>

				<tfoot>
          <tr>
            <th>Dishes</th>
						<th></th>
          </tr>
        </tfoot>

      </table>

    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>