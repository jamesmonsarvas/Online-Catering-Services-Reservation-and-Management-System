<?php
	class Report extends Admin_Controller {

    public function index() {
      $data['month'] = $this->input->post('selectMonth');

    	$data['reservations'] = $this->Reservation_model->report_reservation();
    	$data['count_reservations'] = $this->Reservation_model->count_reservation();
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/report/index', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

    public function report_event() {
      $data['month'] = $this->input->post('selectMonth');

    	$data['events'] = $this->Event_model->report_event();
    	$data['count_events'] = $this->Event_model->count_event();
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/report/report_event_index', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

    public function report_feedback() {
      $data['month'] = $this->input->post('selectMonth');

    	$data['feedbacks'] = $this->Feedback_model->report_feedback();
    	$data['count_feedbacks'] = $this->Feedback_model->count_feedback();
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/report/report_feedback_index', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

    public function report_reservation_charts() {

      $data['report_chart'] = $this->Reservation_model->reservation_chart();
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/report/report_reservation_charts', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

    public function report_event_charts() {

      $data['report_chart'] = $this->Event_model->event_chart();
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/report/report_event_charts', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

    public function report_feedback_charts() {
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/report/report_feedback_charts');
      $this->load->view('templates/_parts/admin_master_footer_view');
    }

  } 
?>