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
    $this->load->view('templates/_parts/admin_master_header_view');
    $this->load->view('admin/dashboard_view', $data);
    $this->load->view('templates/_parts/admin_master_footer_view');
  }
}