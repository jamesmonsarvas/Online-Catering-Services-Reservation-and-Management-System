<h3 class="cms-title">Package 
    <?php echo $packages_content[0]['package_id']; ?>
</h3>
<a href="<?php echo site_url('admin/packages/create') ?>" class="btn btn-secondary">Add New</a>


<table class="table table-bordered table-striped">
    <tr>
        <th>Package Number</th>
        <th>Price</th>
    </tr>

<?php foreach ($packages_content as $package_content) : ?>
 	<tr>
        <td><?php echo $package_content['package_content_id']; ?></td>
        <td><?php echo $package_content['type_of_menu']; ?></td>
        <td>
            <a href="<?php echo base_url(); ?>admin/packages/list_of_menu/<?php echo $package_content['package_content_id']; ?>" class="btn default-btn btn-primary">View</a>
        </td>
        <td>
            <a href="" class="btn default-btn btn-danger">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>