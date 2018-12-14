<?php
class Pages extends CI_Controller {
  public function view($page = 'home') {
    if(!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
      show_404();
    }

    $data['title'] = ucfirst($page);

    $data['feedbacks'] = $this->Feedback_model->get_feedbacks();

    $this->load->view('templates/header', $data);
    $this->load->view('pages/' . $page, $data);
    $this->load->view('templates/footer');
  }

  public function viewsystemfeedback() {
    $this->load->view('templates/header');
    $this->load->view('pages/systemfeedback');
    $this->load->view('templates/footer');
  }

  public function viewservicefeedback() {
    $this->load->view('templates/header', $data);
    $this->load->view('pages/viewservicefeedback');
    $this->load->view('templates/footer');
  }

  public function create() {
    $this->Feedback_model->create_feedback(0);
    redirect('contact');
  }

  public function createsystemfeedback() {
    $this->Feedback_model->create_feedback(1);
    redirect('contact');
  }

  public function createservicefeedback() {
    $this->Feedback_model->create_feedback(2);
    redirect('contact');
  }
}

?>