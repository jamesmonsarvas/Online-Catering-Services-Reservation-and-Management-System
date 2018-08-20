<?php
    class Admin extends CI_Controller {
        public function view( $page = 'login' ) {

        	if(!file_exists(APPPATH . 'views/admin/' . $page . '.php')) {
        	    redirect('/');
        	}

            $data['title'] = "Dashboard";

            $this->load->view('admin/admin_master_templates/admin_master_header');
            $this->load->view('admin/' . $page, $data);
            $this->load->view('admin/admin_master_templates/admin_master_footer');
        }
    }

?>