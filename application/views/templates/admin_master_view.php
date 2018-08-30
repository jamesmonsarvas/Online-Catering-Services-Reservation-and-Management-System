<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('templates/_parts/admin_master_header_view'); ?>
	<div class="main-content">
	    <?php echo $the_view_content; ?>
	</div>
<?php $this->load->view('templates/_parts/admin_master_footer_view');?>