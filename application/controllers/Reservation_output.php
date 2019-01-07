<?php
class Reservation_output extends CI_Controller {

  public function view() {

    $data['reservations'] = $this->Reservation_model->get_reservations();
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view', $data);
    $this->load->view('templates/footer');

  }

  public function create() {    
    $this->load->library('mg_encryption');
    $msg = $this->Reservation_model->create_reservation();
    $reference_no = $this->mg_encryption->safe_b64encode($msg);
    
    if (gettype($msg) == boolean) {
      redirect('reservation?msg='.$msg);
    }
    else {
      redirect('reservation/view_reference?rn='.$reference_no);
    }
  }

  public function confirm_verification() {
    $this->load->library('MG_encryption');
    $reference_no = $this->input->post('id');
    $reference_no2 = $this->mg_encryption->safe_b64decode($reference_no);

    $reservation = $this->Reservation_model->get_reservation_by_rn($reference_no2);

    var_dump($reservation);

    $this->Reservation_model->add_reservation_details($reservation[0]['reservation_id']);

    redirect('');
  }

  public function view_reference() {
    $this->load->helper('url');
    $this->load->library('mg_encryption');

    $rn = $this->input->get('rn');
    $decrypted_no = $this->mg_encryption->safe_b64decode($rn);

    $data['reference_no'] = $decrypted_no;
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view_reference', $data);
    $this->load->view('templates/footer');
  }
}

?>