<?php
class Events extends Admin_Controller {

  public function index() {
    $data['events'] = $this->Event_model->get_events_where();
    $this->load->view('templates/_parts/admin_master_header_view');
    $this->load->view('admin/events/index', $data);
    $this->load->view('templates/_parts/admin_master_footer_view');
  }

  public function update_event($num) {
    $this->Event_model->update_events($num);
    redirect('admin/events/index');
  }

  public function print($id, $num) {
    $data['print_event'] = $this->Event_model->get_events_to_print($id);
    $this->load->view('admin/events/print_event', $data); 
  }  

}
?>