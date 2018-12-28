<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?php echo site_url('/admin') ?>">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Services</li>
</ol>

<div class="card mb-3">
  <div class="card-header">
    <h3 class="cms-title">Services</h3>
    <a href="<?php echo site_url('admin/services/create') ?>" class="btn btn-secondary btn-add">Add New</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
          <tr>
            <th>Services Title</th>
            <th>Services Summary</th>
            <th>Services Description</th>
            <th>Action</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($services as $service): ?>
            <tr>
              <td>
                <a href="<?php echo base_url(); ?>admin/services/edit/<?php echo $service['services_slug']; ?>">
                    <?php echo $service['services_title']; ?>
                </a>
              </td>
              <td><?php echo substr($service['service_summary'], 0, 100) . "..."; ?></td>
              <td><?php echo substr($service['services_desc'], 0, 100) . "..."; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>admin/services/edit/<?php echo $service['services_slug']; ?>" class="btn default-btn btn-info float-left" title="Edit"><i class="far fa-edit"></i></a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>

        <tfoot>
          <tr>
            <th>Services Title</th>
            <th>Services Summary</th>
            <th>Services Description</th>
            <th>Action</th>
          </tr>
        </tfoot>

      </table>

    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
</script>
