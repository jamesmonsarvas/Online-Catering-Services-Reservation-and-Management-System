<?php
    class Services extends CI_Controller {
        public function index() {
            

            $data['title'] = "Our Services";
            $data['services'] = $this->Services_model->get_services();

            $this->load->view('templates/header');
            $this->load->view('services/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
        	$data['services'] = $this->Services_model->get_services($slug);

        	if (empty($data['services'])) {
        		show_404();
        	}

        	$data['title'] = $data['services']['title'];

        	$this->load->view('templates/header');
        	$this->load->view('services/view', $data);
        	$this->load->view('templates/footer');
        }

        public function create() {
        	$data['title'] = 'Create Services';

        	$this->form_validation->set_rules('services-title', 'Services Title', 'required');
        	$this->form_validation->set_rules('services-desc', 'Services Desc', 'required');

        	if ($this->form_validation->run() === FALSE) {
        		$this->load->view('templates/header');
        		$this->load->view('services/create', $data);
        		$this->load->view('templates/footer');
        	} else {
        		$this->Services_model->create_services();
        		redirect('services');
        	}
        }
    }

?>