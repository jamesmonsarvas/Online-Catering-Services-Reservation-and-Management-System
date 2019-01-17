<?php

class Reservation extends Admin_Controller {

  public function index() {

    $data['reservations'] = $this->Reservation_model->get_reservations_where();
    $data['packages'] = $this->Packages_model->get_packages();
    $this->load->view('templates/_parts/admin_master_header_view');
    $this->load->view('admin/reservation/index', $data);
    $this->load->view('templates/_parts/admin_master_footer_view');
  }

  public function approve_reservation($rid) {
    $this->Reservation_model->update_reservations(0);
    $this->Event_model->create_event($rid);
    $this->load->library('email');
    $this->email->set_mailtype("html");

    $id = $this->input->post('id');
    $email = $this->input->post('email');

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <admin@kensystem.org>' . "\r\n";

    $reservation_record = $this->Reservation_model->get_reservation_by_id($id);
    $data['reservation'] = $reservation_record;
    $email_content = $this->load->view('admin/reservation/email-approve', $data, TRUE);

    if (!mail($email, "Your reservation has been approved", $email_content, $headers)) {
      print_r("Error");
      redirect('admin/reservation/index?msg=false');
    }
    else {
      print_r("Email sent");
      redirect('admin/reservation/index?msg=true');
    }
  }

  public function cancel_reservation() {
    $this->Reservation_model->update_reservations(3);
    $this->load->library('email');
    $this->email->set_mailtype("html");

    $id = $this->input->post('id');
    $email = $this->input->post('email');

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <admin@kensystem.org>' . "\r\n";

    $reservation_record = $this->Reservation_model->get_reservation_by_id($id);
    $data['reservation'] = $reservation_record;
    $email_content = $this->load->view('admin/reservation/email-cancel', $data, TRUE);

    if (!mail($email, "Your reservation has been cancelled", $email_content, $headers)) {
      print_r("Error");
      redirect('admin/reservation/index?msg=false');
    }
    else {
      print_r("Email sent");
      redirect('admin/reservation/index?msg=true');
    }

  }

  public function send_email() {
    $this->load->library('MG_encryption');
    $reference = $this->input->post('reference-no');
    $reference_no = $this->mg_encryption->safe_b64encode($reference);

    $this->load->library('email');
    $this->email->set_mailtype("html");

    $id = $this->input->post('id');
    $email = $this->input->post('email');

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <admin@kensystem.org>' . "\r\n";

    $reservation_record = $this->Reservation_model->get_reservation_by_id($id);
    echo json_encode($reservation_record)."<br>";
    echo $reference."<br>";
    echo $reference_no;
    $data['enc_reference_no'] = $reference_no;
    $data['reservation'] = $reservation_record;
    $email_content = $this->load->view('admin/reservation/email-page', $data, TRUE);

    if (!mail($email, "Please fill up the needed additional information", $email_content, $headers)) {
      print_r("Error");
      redirect('admin/reservation/index?msg=false');
    }
    else {
      print_r("Email sent");
      redirect('admin/reservation/index?msg=true');
    }
  }
}
?>