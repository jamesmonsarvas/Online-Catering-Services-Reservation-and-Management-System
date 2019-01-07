<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['reservations'] = $this->Reservation_model->get_pending_reservations();
    $data['packages'] = $this->Packages_model->get_packages();
    $data['count_pending_rsvtion'] = $this->Reservation_model->count_pending_reservation();
    $data['count_latest_fdback'] = $this->Feedback_model->count_latest_feedback();
    $data['feedbacks'] = $this->Feedback_model->get_latest_feedback();
    $data['count_unfinished_events'] = $this->Event_model->count_unfinished_events();
    $this->load->view('templates/_parts/admin_master_header_view');
    $this->load->view('admin/dashboard_view', $data);
    $this->load->view('templates/_parts/admin_master_footer_view');
  }
}

