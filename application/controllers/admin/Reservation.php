<?php
    class Reservation extends Admin_Controller {

        public function index() {

            $data['reservations'] = $this->Reservation_model->get_reservations();
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
    }

?>