  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


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

<div class="tabs">
  <div class="tab-button-outer">
    <ul id="tab-button">
      <li><a href="#tab01">SERVICE SUMMARY</a></li>
      <li><a href="#tab02">SERVICE DESCRIPTION</a></li>
      <li><a href="#tab03">PHOTO DISPLAYED</a></li>
      <li><a href="#tab04">GALLERY</a></li>
      <li><a href="#tab05">AMENITIES</a></li>
    </ul>
  </div>
  <div class="tab-select-outer">
    <select id="tab-select">
      <option value="#tab01">SERVICE SUMMARY</option>
      <option value="#tab02">SERVICE DESCRIPTION</option>
      <option value="#tab03">PHOTO DISPLAYED</option>
      <option value="#tab04">GALLERY</option>
      <option value="#tab05">AMENITIES</option>
    </select>
  </div>

  <div id="tab01" class="tab-contents">
      <textarea name="service-summary" class="form-control editor">
        <?php echo $services['service_summary']; ?>
      </textarea>
     <div class="service-button-row">
       <button type="submit" class="btn btn-default btn-add">Submit</button>
     </div>
  </div>

  <div id="tab02" class="tab-contents">
      <textarea name="services-desc" class="form-control editor2">
        <?php echo $services['services_desc']; ?>
      </textarea>
     <div class="service-button-row">
       <button type="submit" class="btn btn-default btn-add">Submit</button>
     </div>
  </div>

  <div id="tab03" class="tab-contents">
    <div class="col-md-4">
      <img src="<?php echo site_url().$services['img_src']; ?>" alt="" style="width: 100%; height: 100%;">
      <?php echo form_open_multipart('admin/services/do_upload', "id='upload-image'");?>
      <input type="hidden" name="id" value="<?php echo $services['ID']; ?>">
      <input type="hidden" name="services-slug" value="<?php echo $services['services_slug']; ?>">
      <input type="file" id="services-img" name="services-img">
    </div>
  </div>

  <div id="tab04" class="tab-contents">
    <p>Gallery Items</p>
  </div>

  <div id="tab05" class="tab-contents">
    <p>Amenities</p>
  </div>

</div> <!-- tabs -->

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

  $(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
</script>