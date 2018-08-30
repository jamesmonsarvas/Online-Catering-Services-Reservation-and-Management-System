
<h3 class="cms-title">Services</h3>
<a href="<?php echo site_url('admin/services/create') ?>" class="btn btn-secondary">Add New</a>

<table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Services Title</th>
        <th>Services Description</th>
        <th>Services Slug</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($services as $service): ?>
    <tr>
        <td><?php echo $service['ID']; ?></td>
        <td>
            <a href="<?php echo base_url(); ?>admin/services/edit/<?php echo $service['services_slug']; ?>">
                <?php echo $service['services_title']; ?>
            </a>
        </td>
        <td><?php echo substr($service['services_desc'], 0, 80) . "..."; ?></td>
        <td><?php echo $service['services_slug']; ?></td>
        <td>
            <a href="<?php echo base_url(); ?>admin/services/edit/<?php echo $service['services_slug']; ?>" class="btn default-btn btn-info float-left">Edit</a>
        </td>
        <td>
            <?php echo form_open('admin/services/delete/' . $service['ID']); ?>
                <input type="submit" class="btn default-btn btn-danger" value="Delete">
            <?php echo form_close(); ?>
        </td>
    </tr>
    <?php endforeach ?>
    
</table>

<script>
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
</script>
