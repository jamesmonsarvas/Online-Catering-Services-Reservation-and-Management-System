<?php
	class Reservation_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_reservations() {
			$this->db->order_by('reservation_id', 'DESC');
			$this->db->select('*');    
			$this->db->from('reservation');

			$query = $this->db->get();
			return $query->result_array();

			// $query = $this->db->get('reservation');
			// return $query->row_array();
		}

		public function create_reservation() {

			$reference = url_title($this->input->post('reference-no'));

			$data = array(
				'reference_no' => $reference,
				'type_of_event' => $this->input->post('event'),
				'place_of_event' => $this->input->post('place'),
				'exp_people_count' => $this->input->post('people'),
				'date_of_event' => date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('date')))),
				'time_of_event' => $this->input->post('time'),
				'email_address' => $this->input->post('email'),
				'firstname' => $this->input->post('first-name'),
				'lastname' => $this->input->post('last-name'),
				'telephone' => $this->input->post('telephone')
			);

			return $this->db->insert('reservation', $data);
		}
		
	}
?>