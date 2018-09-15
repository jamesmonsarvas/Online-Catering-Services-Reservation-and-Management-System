<?php
    class Packages extends Admin_Controller {

      public function index() {
        $data['packages'] = $this->Packages_model->get_packages();
        $data['packages_content'] = $this->Packages_model->get_packages_content();
        $data['all_package_content'] = $this->Packages_model->get_all_packages();
        $this->load->view('templates/_parts/admin_master_header_view');
        $this->load->view('admin/packages/index', $data);
        $this->load->view('templates/_parts/admin_master_footer_view');
      }

      public function create() {
      	$data['title'] = 'Create Packages';

      	$this->form_validation->set_rules('package-no', 'Package Number', 'required');
      	$this->form_validation->set_rules('price', 'Price', 'required');

      	if ($this->form_validation->run() === FALSE) {
      		$this->load->view('templates/_parts/admin_master_header_view');
      		$this->load->view('admin/packages/create_packages', $data);
      		$this->load->view('templates/_parts/admin_master_footer_view');
      	} else {
      		$this->Packages_model->create_packages();
      		redirect('admin/packages/index');
      	}
      }

      public function delete($id)
      {
        $this->Packages_model->delete_packages($id);
        $this->Packages_model->delete_package($id);
        redirect('admin/packages/index');
      }

      public function package_content_index($id) {
        $data['packages_content'] = $this->Packages_model->get_packages_content($id);
        $data['all_package_content'] = $this->Packages_model->get_all_packages();
        $this->load->view('templates/_parts/admin_master_header_view');
        $this->load->view('admin/packages/package_content_index', $data);
        $this->load->view('templates/_parts/admin_master_footer_view');
      }

      public function list_of_menu() {
        $data['packages_content'] = $this->Packages_model->get_all_package_content();
        $data['menus'] = $this->Packages_model->get_list_of_menu();
        $this->load->view('templates/_parts/admin_master_header_view');
        $this->load->view('admin/packages/list_of_menu', $data);
        $this->load->view('templates/_parts/admin_master_footer_view');
      }

      public function insert_content() {
        $this->Packages_model->insert_new_content();
        $this->Packages_model->update_package();
        redirect('admin/packages/index');
      }

      public function delete_content($pid, $cid)
      {
        $this->Packages_model->delete_content_in_package($pid, $cid);
        redirect('admin/packages');
      }

      public function add_content($id)
      {
        $data['packages'] = $this->Packages_model->get_package($id);
        $data['menus'] = $this->Packages_model->get_pc_by_pid($id);
        $data['packages_content'] = $this->Packages_model->get_all_package_content();
        $this->load->view('templates/_parts/admin_master_header_view');
        $this->load->view('admin/packages/add_content', $data);
        $this->load->view('templates/_parts/admin_master_footer_view');
      }

    }

?>