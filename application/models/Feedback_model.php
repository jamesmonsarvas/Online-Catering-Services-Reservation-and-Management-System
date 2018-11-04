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

  public function get_latest_feedback() {
    $this->db->select('*');    
    $this->db->from('feedback');
    $this->db->like('date_added', date("Y-m-d"));

    $query = $this->db->get();
    return $query->result_array();
  }

  public function count_feedback() {
      $month = $this->input->post('selectMonth');

      $this->db->select('*');    
      $this->db->from('feedback');

      if ($month == 0) {
        
      }
      else if ($month == 1) {
        $this->db->where('MONTH(date_added)', 1);
      }
      else if ($month == 2) {
        $this->db->where('MONTH(date_added)', 2);
      }
      else if ($month == 3) {
        $this->db->where('MONTH(date_added)', 3);
      }
      else if ($month == 4) {
        $this->db->where('MONTH(date_added)', 4);
      }
      else if ($month == 5) {
        $this->db->where('MONTH(date_added)', 5);
      }
      else if ($month == 6) {
        $this->db->where('MONTH(date_added)', 6);
      }
      else if ($month == 7) {
        $this->db->where('MONTH(date_added)', 7);
      }
      else if ($month == 8) {
        $this->db->where('MONTH(date_added)', 8);
      }
      else if ($month == 9) {
        $this->db->where('MONTH(date_added)', 9);
      }
      else if ($month == 10) {
        $this->db->where('MONTH(date_added)', 10);
      }
      else if ($month == 11) {
        $this->db->where('MONTH(date_added)', 11);
      }
      else if ($month == 12) {
        $this->db->where('MONTH(date_added)', 12);
      }

      $query = $this->db->get();
      return count($query->result());
    }

    public function report_feedback() {
      $month = $this->input->post('selectMonth');

      $this->db->select('*');    
      $this->db->from('feedback');

      if ($month == 0) {
        
      }
      else if ($month == 1) {
        $this->db->where('MONTH(date_added)', 1);
      }
      else if ($month == 2) {
        $this->db->where('MONTH(date_added)', 2);
      }
      else if ($month == 3) {
        $this->db->where('MONTH(date_added)', 3);
      }
      else if ($month == 4) {
        $this->db->where('MONTH(date_added)', 4);
      }
      else if ($month == 5) {
        $this->db->where('MONTH(date_added)', 5);
      }
      else if ($month == 6) {
        $this->db->where('MONTH(date_added)', 6);
      }
      else if ($month == 7) {
        $this->db->where('MONTH(date_added)', 7);
      }
      else if ($month == 8) {
        $this->db->where('MONTH(date_added)', 8);
      }
      else if ($month == 9) {
        $this->db->where('MONTH(date_added)', 9);
      }
      else if ($month == 10) {
        $this->db->where('MONTH(date_added)', 10);
      }
      else if ($month == 11) {
        $this->db->where('MONTH(date_added)', 11);
      }
      else if ($month == 12) {
        $this->db->where('MONTH(date_added)', 12);
      }

      $query = $this->db->get();
      //return count($query->result());
      return $query->result_array();
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