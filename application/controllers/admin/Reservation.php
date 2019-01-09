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
        redirect('admin/reservation/index');
    }

    public function cancel_reservation() {
        $this->Reservation_model->update_reservations(2);
        redirect('admin/reservation/index');

    }

    public function send_email() {
        $this->load->library('MG_encryption');
        $reference = $this->input->post('reference-no');
        $reference_no = $this->mg_encryption->safe_b64encode($reference);

        $this->load->library('email');
        $this->email->set_mailtype("html");

        $email = $this->input->post('email');


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <noreply@kirstianeventneeds>' . "\r\n";

        echo $reference."<br>";
        echo $reference_no;
        $email_content = "
        <html>
            <body>
                <p>Test email</p>
                <p>Reference No: ".$reference."</p>
                <a href='http://www.kensystem.org/second-reservation?id=".$reference_no."'>
                http://www.kensystem.org/second-reservation?id=".$reference_no."
                </a>
            </body>
        </html>
        ";

        if (!mail($email, "Please fill up the needed additional information", $email_content, $headers)) {
            print_r("Error");
        }
        else {
            print_r("Email sent");
            redirect('admin/reservation/index');
        }

        //$config['protocol'] = "smtp";
        // $config['priority'] = 1;
        // $config['charset'] = 'UTF-8';

        // $this->email->initialize($config);

        // $this->email->from('your@example.com', 'Your Name');
        // $this->email->to('ma.gutlay1012@gmail.com');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        // $this->email->subject('Email Test');

        // $data['reference_no'] = $reference_no;
        // $email_content = $this->load->view('admin/reservation/email-page', $data, TRUE);
        // $this->email->message($email_content);

        // if ($this->email->send()) {
        //     print_r("Email sent");
        //     redirect('admin/reservation/index');
        // }
        // else {
        //     print_r("Error");   
        // }
    }
}
?>