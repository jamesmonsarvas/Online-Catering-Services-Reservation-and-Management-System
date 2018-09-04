<?php
    class Services_output extends CI_Controller {

        public function index() {

            $data['services'] = $this->Services_model->get_services();
            $this->load->view('templates/header');
            $this->load->view('services_output/view', $data);
            $this->load->view('templates/footer');
        }
    }
?>