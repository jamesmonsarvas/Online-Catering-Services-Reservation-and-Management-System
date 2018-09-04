<?php
    class Packages extends Admin_Controller {

        public function index() {

            $data['packages'] = $this->Packages_model->get_packages();
            $this->load->view('templates/_parts/admin_master_header_view');
            $this->load->view('admin/packages/index', $data);
            $this->load->view('templates/_parts/admin_master_footer_view');
        }

        public function package_content_index($id) {

            $data['packages_content'] = $this->Packages_model->get_packages_content($id);
            $this->load->view('templates/_parts/admin_master_header_view');
            $this->load->view('admin/packages/package_content_index', $data);
            $this->load->view('templates/_parts/admin_master_footer_view');
        }

        public function list_of_menu($id) {
            $data['menus'] = $this->Packages_model->get_list_of_menu($id);
            $this->load->view('templates/_parts/admin_master_header_view');
            $this->load->view('admin/packages/list_of_menu', $data);
            $this->load->view('templates/_parts/admin_master_footer_view');
        }

    }

?>