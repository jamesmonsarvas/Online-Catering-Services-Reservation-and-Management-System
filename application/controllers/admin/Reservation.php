<?php
    class Reservation extends Admin_Controller {

        public function index() {

            $data['reservations'] = $this->Reservation_model->get_reservations();
            $this->load->view('templates/_parts/admin_master_header_view');
            $this->load->view('admin/reservation/index', $data);
            $this->load->view('templates/_parts/admin_master_footer_view');
        }

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