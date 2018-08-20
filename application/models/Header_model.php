<?php
	class Header_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_brand_title() {
			$query = $this->db->get('header_cms');
			return $query->result_array();
		}
	}
?>