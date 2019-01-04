<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin/services/index') ?>">Services</a>
  </li>
  <li class="breadcrumb-item active">Edit Service</li>
</ol>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/services/update'); ?>
<div class="row">
  <div class="col-sm-12">
    <input type="hidden" name="id" value="<?php echo $services['ID']; ?>">
    <div class="form-group">
      <label for="services-title">Service Title</label>
      <input type="text" class="form-control" name="services-title" placeholder="Title" value="<?php echo $services['services_title'] ?>">
    </div>
  </div>
</div>

<button class="btn-add">Service Summary</button> | <button class="btn-add">Service Description</button>

<div class="row">
  <div class="col-sm-9">

    <fieldset class="fieldset-summary">
      <legend for="services-summary" class="services-summary-legend">Service Summary</legend>
      <textarea name="service-summary" class="form-control editor">
        <?php echo $services['service_summary']; ?>
      </textarea>
    </fieldset>

    <fieldset class="fieldset-desc">
      <legend for="services-desc" class="services-desc-legend">Service Description</legend>
      <textarea name="services-desc" class="form-control editor2">
        <?php echo $services['services_desc']; ?>
      </textarea>
    </fieldset>

   <div class="service-button-row">
     <button type="submit" class="btn btn-default btn-add">Submit</button>
   </div>
   </form>
 </div>
 <div class="col-sm-3">
    <fieldset>
      <legend for="services-img" class="services-img-legend">Image Displayed</legend>
      <img src="<?php echo site_url().$services['img_src']; ?>" alt="" style="width: 100%; height: 100%;">
      <?php echo form_open_multipart('admin/services/do_upload', "id='upload-image'");?>
      <input type="hidden" name="id" value="<?php echo $services['ID']; ?>">
      <input type="hidden" name="services-slug" value="<?php echo $services['services_slug']; ?>">
      <input type="file" id="services-img" name="services-img">
    </fieldset>
  <?php echo form_close(); ?>

</div>
</div>



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