<?php
    class Reservation extends Admin_Controller {

        public function index() {

            $data['reservations'] = $this->Reservation_model->get_reservations();
            $this->load->view('templates/_parts/admin_master_header_view');
            $this->load->view('admin/reservation/index', $data);
            $this->load->view('templates/_parts/admin_master_footer_view');
        }

        // public function create() {
        // 	$data['title'] = 'Create Services';

        // 	$this->form_validation->set_rules('services-title', 'Services Title', 'required');
        // 	$this->form_validation->set_rules('services-desc', 'Services Desc', 'required');

        // 	if ($this->form_validation->run() === FALSE) {
        // 		$this->load->view('templates/_parts/admin_master_header_view');
        // 		$this->load->view('admin/services/create', $data);
        // 		$this->load->view('templates/_parts/admin_master_footer_view');
        // 	} else {
        // 		$this->Services_model->create_services();
        // 		redirect('admin/services');
        // 	}
        // }

        // public function edit($slug)
        // {
        //     $data['services'] = $this->Services_model->get_services($slug);

        //     if (empty($data['services'])) {
        //         show_404();
        //     }

        //     $this->load->view('templates/_parts/admin_master_header_view');
        //     $this->load->view('admin/services/edit', $data);
        //     $this->load->view('templates/_parts/admin_master_footer_view');
        // }

        // public function update()
        // {
        //     $this->Services_model->update_services();
        //     redirect('admin/services');
        // }

        // public function delete($id)
        // {
        //     $this->Services_model->delete_services($id);
        //     redirect('admin/services');
        // }
    }

?>