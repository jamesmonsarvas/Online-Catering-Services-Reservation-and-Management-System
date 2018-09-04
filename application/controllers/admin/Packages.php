<?php
    class Packages extends Admin_Controller {

        public function index() {

            $data['packages'] = $this->Packages_model->get_packages();
            $this->load->view('templates/_parts/admin_master_header_view');
            $this->load->view('admin/packages/index', $data);
            $this->load->view('templates/_parts/admin_master_footer_view');
        }

    }

?>