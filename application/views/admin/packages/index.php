
<h3 class="cms-title">Packages</h3>
<a href="<?php echo site_url('admin/packages/create') ?>" class="btn btn-secondary">Add New</a>

<table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Package Number</th>
        <th>Price</th>
    </tr>
    <?php foreach ($packages as $package): ?>
    <tr>
        <td><?php echo $package['package_id']; ?></td>
        <td><?php echo $package['package_no']; ?></td>
        <td>P <?php echo $package['price']; ?></td>
        <td>
            <a href="<?php echo base_url(); ?>admin/packages/package_content_index/<?php echo $package['package_id']; ?>" class="btn default-btn btn-primary">View</a>
        </td>
        <td>
            <a href="" class="btn default-btn btn-info">Update</a>
        </td>
        <td>
            <a href="" class="btn default-btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php endforeach ?>
    
</table>

<!-- <script>
    ClassicEditor
        .create( document.querySelector( '.editor' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            }
        } )
        .catch( error => {
            console.log( error );
        } );
</script> -->