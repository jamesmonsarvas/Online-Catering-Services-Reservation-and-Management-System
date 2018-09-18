<?php
  class Events extends Admin_Controller {

    public function index() {
      $data['events'] = $this->Event_model->get_events();
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/events/index', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

    public function update_event($num) {
    	$this->Event_model->update_events($num);
    	redirect('admin/events/index');
    }

  }
?>