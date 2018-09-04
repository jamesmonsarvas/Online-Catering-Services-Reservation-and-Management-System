<?php
    class Packages_output extends CI_Controller {

        public function index() {

            $data['packages'] = $this->Packages_model->get_packages();
            $this->load->view('templates/header');
            $this->load->view('packages_output/view', $data);
            $this->load->view('templates/footer');
        }
    }
?>