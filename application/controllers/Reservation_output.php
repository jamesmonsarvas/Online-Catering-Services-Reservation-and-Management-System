<?php
class Reservation_output extends CI_Controller {

  public function view() {

    $data['reservations'] = $this->Reservation_model->get_reservations();
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view', $data);
    $this->load->view('templates/footer');

  }

  public function create() {    
    $this->Reservation_model->create_reservation();
    redirect('reservation');
    echo "alert('Thank you for making a reservation at us! Please wait while we review your reservation and we will contact you. Have a nice day!');";
  }
}

?>