<?php
class Reservation_output extends CI_Controller {

  public function view() {

    $data['reservations'] = $this->Reservation_model->get_reservations();
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view', $data);
    $this->load->view('templates/footer');

  }

  public function create() {    
    $msg = $this->Reservation_model->create_reservation();
    redirect('reservation?msg=' . $msg);
  }
}

?>