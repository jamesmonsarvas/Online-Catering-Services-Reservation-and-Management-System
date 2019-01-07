  <?php
  // function myFunction($id) 
  // {
  //   $pcArr = array();
  //   foreach ($packages_content as $package_content) {
  //     if ($package['package_id'] == $package_content['package_id']) {
  //       array_push($pcArr, $package_content);
  //     }
  //   }
    
  //   for ($i=0; $i < 6; $i++) { 
  //     $flag = "false";
  //     foreach ($pcArr as $pc) {
  //       if ($pc['package_content_id'] == $all_package_content[$i]['package_content_id'])
  //       {
  //           echo "<label class='form-check-label'>
  //             <input type='checkbox' name='type_of_menu[]' class='form-check-input' checked value=".$all_package_content[$i]['package_content_id'].">".$all_package_content[$i]['type_of_menu']."
  //           </label>
  //           <br>";
  //           $flag = "true";
  //           break;
  //       }
  //       $index++;
  //     }
  //     if ($flag == "false") {
  //       echo "<label class='form-check-label'>
  //             <input type='checkbox' name='type_of_menu[]' class='form-check-input' value=".$all_package_content[$i]['package_content_id'].">".$all_package_content[$i]['type_of_menu']."
  //           </label>
  //           <br>";
  //     }
  //   }
  // }
?>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Packages</li>
</ol>

<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Packages</h3>
    
    <button type="button" class="btn btn-secondary btn-add" data-toggle="modal" data-target="#myModal">
      Add New
    </button>

    <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add Package</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
              <?php echo form_open('admin/packages/create'); ?>

              <div class="form-group">
                <input type="text" class="form-control" name="package-no" placeholder="Package No">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="price" placeholder="Price"></input>
              </div>

              <input type="hidden" name="id" value="<?php //echo $packages_content[0]['package_id']; ?>">

              <ul>
                <?php foreach($all_package_content as $apc) : ?>
                  <li>
                    <label class="form-check-label">
                      <input type="checkbox" name="type_of_menu[]" class="form-check-input" value="<?php echo $apc['package_content_id']; ?>"><?php echo $apc['type_of_menu']; ?>
                    </label>
                  </li>
                <?php endforeach; ?>
              </ul>
                            
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
						<th>Packages Menu</th>
            <th>Packages Price</th>
            <th colspan="2"><center>Action</center></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($packages as $package): ?>
            <tr>
              <td>
                <?php echo $package['package_no']; ?>
              </td>
              <td class="package-no">
                <ul class="package-menu">
                  <?php if (isset($packages_content)) : ?>
                    <?php foreach ($packages_content as $package_content): ?>
                      <?php if ($package['package_id'] == $package_content['package_id']) : ?>
                        <li>
                          <?php echo form_open('admin/packages/delete_content/' . $package['package_id'] . "/" . $package_content['package_content_id']); ?>
                              <label><?php echo $package_content['type_of_menu']; ?></label>
                              <button class="btn btn-danger delete-menu" title="Delete"><i class="far fa-trash-alt"></i></button>
                          <?php echo form_close(); ?>
                        </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </td>
              <td><?php echo "&#8369;" . $package['price']; ?></td>
              <td>
                <a href="<?php echo site_url('admin/packages/add_content/') . $package['package_id']; ?>" class="btn default-btn btn-primary btn-inverse" title="Edit"><i class="far fa-edit"></i></a>
              </td>
              <td>
                <?php echo form_open('admin/packages/delete/' .   $package['package_id']); ?>
                    <button class="btn default-btn btn-danger btn-inverse" value="Delete" title="Delete"><i class="far fa-trash-alt"></i></button>
                    <!-- <input type="submit" class="btn default-btn btn-danger btn-inverse" value="Delete"> -->
                <?php echo form_close(); ?>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>

				<tfoot>
          <tr>
            <th>Packages</th>
            <th>Packages Menu</th>
            <th>Packages Price</th>
            <th colspan="2"><center>Action</center></th>
          </tr>
        </tfoot>

      </table>

    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>