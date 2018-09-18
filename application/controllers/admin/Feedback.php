<?php
  class Feedback extends Admin_Controller {

    public function index() {
      $data['feedbacks'] = $this->Feedback_model->get_feedbacks_where();
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/feedback/index', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

    public function update_feature($num) {
    	$this->Feedback_model->update_features($num);
    	redirect('admin/feedback/index');
    }
  }
?>