

<div class="row">
<?php foreach($services as $service) : ?>
	<div class="col-md-12">
		<h2><?php echo $service['services_title'] ?></h2>
		<a href="<?php echo base_url(); ?>admin/services/edit/<?php echo $service['services_slug']; ?>" class="btn btn-info float-left">Edit</a>
		<?php echo form_open('admin/services/delete/' . $service['ID']); ?>
			<input type="submit" class="btn btn-danger" value="Delete">
		<?php echo form_close(); ?>
	</div>
<?php endforeach; ?>

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
