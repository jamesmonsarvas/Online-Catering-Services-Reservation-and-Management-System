<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Create New Service</li>
</ol>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/services/create'); ?>

<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Services</h3>
  </div>
  <div class="card-body">

   <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
        <label for="services-title">Service Title</label>
        <input type="text" class="form-control" name="services-title" placeholder="Title">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8">
      <label for="services-summary">Service Summary</label>
      <textarea name="service-summary" class="form-control editor">
      </textarea>
      <label for="services-desc">Service Description</label>
      <textarea name="services-desc" class="form-control editor2">
      </textarea>    
  </div>
  <div class="col-sm-4">
    <label for="services-img">Choose Image To Be Displayed</label><br />
    <input type="file" class="form-control" name="new-img">
  </div>
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
  ClassicEditor
  .create( document.querySelector( '.editor2' ), {
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

</div></div>

