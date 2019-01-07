<?php
class Services extends Admin_Controller {

  public function index() {

    $data['services'] = $this->Services_model->get_services();
    $this->load->view('templates/_parts/admin_master_header_view');
    $this->load->view('admin/services/index', $data);
    $this->load->view('templates/_parts/admin_master_footer_view');
  }

  public function create() {
    $data['title'] = 'Create Services';

    $this->form_validation->set_rules('services-title', 'Services Title', 'required');
    $this->form_validation->set_rules('services-desc', 'Services Desc', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/_parts/admin_master_header_view');
      $this->load->view('admin/services/create', $data);
      $this->load->view('templates/_parts/admin_master_footer_view');
    } else {
      $config['upload_path']          = './assets/images/';
      $config['allowed_types']        = 'jpg|png';
      $config['max_size']             = 1000;
      $config['max_width']            = 2048;
      $config['max_height']           = 1152;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('new-img'))
      {
        echo $this->upload->display_errors();
      }
      else
      {
        $filename = $this->upload->data('file_name');
        $this->Services_model->create_services($filename);
        redirect('admin/services');
      }
    }
  }

  public function edit($slug)
  {
    $data['services'] = $this->Services_model->get_services($slug);

    if (empty($data['services'])) {
      show_404();
    }

    $this->load->view('templates/_parts/admin_master_header_view');
    $this->load->view('admin/services/edit', $data);
    $this->load->view('templates/_parts/admin_master_footer_view');
  }

  public function update()
  {
    $this->Services_model->update_services();
    redirect('admin/services');
  }

  public function delete($id)
  {
    $this->Services_model->delete_services($id);
    redirect('admin/services');
  }

  public function do_upload()
  {
    $config['upload_path']          = './assets/images/';
    $config['allowed_types']        = 'jpg|png';
    $config['max_size']             = 1000;
    $config['max_width']            = 2048;
    $config['max_height']           = 1152;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('services-img'))
    {
      echo $this->upload->display_errors();
    }
    else
    {
      $filename = $this->upload->data('file_name');
      $this->Services_model->update_image($filename);
      redirect('admin/services/edit/'.$this->input->post('services-slug'));
    }
  }
}

?>