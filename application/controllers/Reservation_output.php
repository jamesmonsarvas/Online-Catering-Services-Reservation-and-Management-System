<?php
class Reservation_output extends CI_Controller {

  public function view() {

    $data['reservations'] = $this->Reservation_model->get_reservations();
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view', $data);
    $this->load->view('templates/footer');

  }

  public function create() {

    // $this->form_validation->set_rules('event', 'Event', 'required');
    // $this->form_validation->set_rules('place', 'Place', 'required');
    // $this->form_validation->set_rules('people', 'Expected people', 'required');
    // $this->form_validation->set_rules('date', 'Date of event', 'required');
    // $this->form_validation->set_rules('time', 'Time of event', 'required');
    // $this->form_validation->set_rules('email', 'Email', 'required');
    // $this->form_validation->set_rules('first-name', 'First name', 'required');
    // $this->form_validation->set_rules('last-name', 'Last name', 'required');
    // $this->form_validation->set_rules('telephone', 'Phone number', 'required');

    // if ($this->form_validation->run() === FALSE) {
    //   $this->load->view('templates/header');
    //   $this->load->view('reservation_output/view');
    //   $this->load->view('templates/footer');
    // } else {
    //   $this->Reservation_model->create_reservation();
    //   redirect('reservation');
    // }
    $this->Reservation_model->create_reservation();
    redirect('reservation');

  }
}

?>