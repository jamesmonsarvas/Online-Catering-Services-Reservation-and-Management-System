<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['reservations'] = $this->Reservation_model->get_reservations();
    $data['count_pending_rsvtion'] = $this->Reservation_model->count_pending_reservation();
    $data['count_latest_fdback'] = $this->Feedback_model->count_latest_feedback();
    $this->load->view('templates/_parts/admin_master_header_view');
    $this->load->view('admin/dashboard_view', $data);
    $this->load->view('templates/_parts/admin_master_footer_view');
  }
}

