<?php
  class Provinces_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_all_provinces() {
      $query = $this->db->get('provinces');
      return $query->result_array();
    }
  }
?>