<?php
	class Client_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_clients() {
			$this->db->order_by('client_id', 'DESC');
			$query = $this->db->get('client');
			return $query->result_array();

			$query = $this->db->get('client');
			return $query->row_array();
		}

		public function get_client($id = false) {

			if ($id === false) {

				$this->db->order_by('client_id', 'DESC');
				$query = $this->db->get('client');
				return $query->result_array();
			}

			$query = $this->db->get_where('client', array('client_id' => $id));
			return $query->row_array();
		}
	}
?>