<h3 class="cms-title">
    <?php echo $menus[0]['type_of_menu']; ?> Menu
</h3>
<a href="<?php echo site_url('admin/packages/create') ?>" class="btn btn-secondary">Add New</a>


<table class="table table-bordered table-striped">
    <tr>
        <th>Package Number</th>
        <th>Price</th>
    </tr>

<?php foreach ($menus as $menu) : ?>
 	<tr>  

        <td><?php echo $menu['menu_details']; ?></td>
        <td>
            <a href="" class="btn default-btn btn-danger">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>