<?php
class Feedback_model extends CI_Model {

  public function __construct(){
    $this->load->database();
  }

  public function get_feedbacks() {
    $this->db->order_by('feedback_id', 'DESC');
    $this->db->select('*');    
    $this->db->from('feedback');

    $query = $this->db->get();
    return $query->result_array();

    $query = $this->db->get('feedback');
    return $query->row_array();
  }

  public function count_latest_feedback() {
    $this->db->select('*');    
    $this->db->from('feedback');
    $this->db->like('date_added', date("Y-m-d"));

    $query = $this->db->get();
    return count($query->result());
  }

  public function get_feedbacks_where() {
    $search = $this->input->post('search');
    $filter = $this->input->post('filter');

    if ($search == "") {
      $this->db->select('*');    
      $this->db->from('feedback');

      $query = $this->db->get();
      return $query->result_array();
    }
    else {
      if ($filter == "name") {
        $this->db->select('*');    
        $this->db->from('feedback');
        $this->db->like('name', $search);
        $query = $this->db->get();
      }
      else if ($filter == "reason") {
        $this->db->select('*');    
        $this->db->from('feedback');
        $this->db->like('reason', $search);
        $query = $this->db->get();
      }
      else if ($filter == "any") {
        $this->db->select('*');    
        $this->db->from('feedback');
        $this->db->like('name', $search);
        $this->db->or_like('reason', $search);
        $query = $this->db->get();
      }

      return $query->result_array();
    }

  }

  public function create_feedback() {
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'phone_number' => $this->input->post('phone-number'),
      'reason' => $this->input->post('reason'),
      'message' => $this->input->post('message'),
    );

    return $this->db->insert('feedback', $data);
  }

  public function update_features($num) {
    $data = array(
      'feature' => $this->input->post('feature' . $num),
    );

    $this->db->where('feedback_id', $this->input->post('id'));
    return $this->db->update('feedback', $data);
  }
}
?>