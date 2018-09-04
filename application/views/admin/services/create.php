
<?php echo validation_errors(); ?>

<?php echo form_open('admin/services/create'); ?>

	<div class="form-group">
		<label for="services-title">Services Title</label>
		<input type="text" class="form-control" name="services-title" placeholder="Title">
	</div>
	<div class="form-group">
		<label for="services-desc">Services Desc</label>
		<textarea name="services-desc" class="form-control editor"></textarea>
	</div>

	<button type="submit" class="btn btn-default">Submit</button>

<?php echo form_close(); ?>

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

