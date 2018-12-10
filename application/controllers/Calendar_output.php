<?php
class Calendar_output extends CI_Controller {

  public function view() {

    // $data['reservations'] = $this->Reservation_model->get_calendar_reservations();
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view', $data);
    $this->load->view('templates/footer');

  }
}

?>