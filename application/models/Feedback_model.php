<?php class Feedback_model extends CI_Model {

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
    $this->db->from('feedback_full');
    $this->db->like('date_added', date("Y-m-d"));

    $query = $this->db->get();
    return $query->result_array();
  }

  public function count_feedback() {
      $month = $this->input->post('selectMonth');

      $this->db->select('*');    
      $this->db->from('feedback_full');

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
      $this->db->from('feedback_full');

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
    $this->db->select('*');
    $this->db->from('feedback_full');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function create_feedback($feedback_type) {

    $message = $this->input->post('message');
    if ($message == "") {
      $message = "None given";
    }
    $data = array(
      'feedback_type' => $feedback_type,
      'q1' => $this->input->post('question-1'),
      'q2' => $this->input->post('question-2'),
      'q3' => $this->input->post('question-3'),
      'q4' => $this->input->post('question-4'),
      'q5' => $this->input->post('question-5'),
      'suggestion' => $message,
    );

    $this->db->insert('feedback_scores', $data);
    $fs_id = $this->db->insert_id();

    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone_number = $this->input->post('phone-number');

    if ($this->input->post('name') == "")
      $name = "Anonymous";
    if ($this->input->post('email') == "")
      $email = "None given";
    if ($this->input->post('phone-number') == "")
      $phone_number = "None given";

    $data = array(
      'name' => $name,
      'email' => $email,
      'phone_number' => $phone_number,
      'fs_id' => $fs_id,
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