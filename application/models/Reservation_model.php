<?php
	class Reservation_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_reservations() {
			$this->db->order_by('status', 'DESC');
			$this->db->select('*');    
			$this->db->from('reservation');

			$query = $this->db->get();
			return $query->result_array();

			// $query = $this->db->get('reservation');
			// return $query->row_array();
		}

		public function count_pending_reservation() {
			$this->db->select('*');    
			$this->db->from('reservation');
			$this->db->where('status', 1);

			$query = $this->db->get();
			return count($query->result());
		}

		public function create_reservation() {

			$reference = url_title($this->input->post('reference-no'));

			$event_type = $this->input->post('event');
			$event_id = 0;

			if ($event_type == "Wedding") {
				$event_id = 20;
			}
			else if ($event_type == "Debut") {
				$event_id = 19;
			}
			else if ($event_type == "Birthday, Anniversary, Graduation, and Baptismal") {
				$event_id = 18;
			}
			else if ($event_type == "Inauguration, Fiesta, Seminar, and Other Events") {
				$event_id = 17;
			}

			$data = array(
				'reference_no' => $reference,
				'type_of_event' => $event_id,
				'place_of_event' => $this->input->post('place'),
				'exp_people_count' => $this->input->post('people'),
				'date_of_event' => date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('date')))),
				'time_of_event' => $this->input->post('time'),
				'email_address' => $this->input->post('email'),
				'firstname' => $this->input->post('first-name'),
				'lastname' => $this->input->post('last-name'),
				'telephone' => $this->input->post('telephone'),
				'status' => 1
			);

			return $this->db->insert('reservation', $data);
		}

		public function update_reservations($value) {
			$data = array(
			  'status' => $value,
			);

			$this->db->where('reservation_id', $this->input->post('id'));
			return $this->db->update('reservation', $data);
		}
		
	}
?>