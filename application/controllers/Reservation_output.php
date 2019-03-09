<?php
class Reservation_output extends CI_Controller {

  public function view() {
    $this->load->model('Provinces_model');

    $data['reservations'] = $this->Reservation_model->get_reservations();
    $data['provinces'] = $this->Provinces_model->get_all_provinces();
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view', $data);
    $this->load->view('templates/footer');

  }

  public function create() {    
    $this->load->library('MG_encryption');
    $msg = $this->Reservation_model->create_reservation();
    $reference_no = $this->mg_encryption->safe_b64encode($msg);
    echo $msg;
    if ($msg == 'false') {
      echo "1";
      redirect('reservation?msg='.$msg);
    }
    else {
      echo "2";
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
    $this->load->library('MG_encryption');

    $rn = $this->input->get('rn');
    $decrypted_no = $this->mg_encryption->safe_b64decode($rn);
    $reservation = $this->Reservation_model->get_reservation_by_rn($decrypted_no);

    $data['reference_no'] = $decrypted_no;
    $data['reservation'] = $reservation;
    $this->load->view('templates/header');
    $this->load->view('reservation_output/view_reference', $data);
    $this->load->view('templates/footer');
  }
}

?>