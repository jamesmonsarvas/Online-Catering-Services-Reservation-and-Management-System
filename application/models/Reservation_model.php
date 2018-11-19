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

		}

		public function get_pending_reservations() {
			$this->db->order_by('status', 'DESC');
			$this->db->select('*');    
			$this->db->from('reservation');
			$this->db->where('status', 1);

			$query = $this->db->get();
			return $query->result_array();

		}

		public function get_reservations_where() {
			$search = $this->input->post('search');
			$searchFilter = $this->input->post('searchFilter');
			$statusFilter = $this->input->post('statusFilter');

			if ($search == "") {
			  $this->db->select('*');    
			  $this->db->from('reservation');

			  $query = $this->db->get();
			  return $query->result_array();
			}
			else {
				if ($searchFilter == "name") {
				  $this->db->select('*');    
				  $this->db->from('reservation');
				  $this->db->group_start()
				  				->like('firstname', $search)
				  				->or_like('lastname', $search)
				  				->group_end();
				  
				}
				else if ($searchFilter == "type-of-event") {
				  $this->db->select('*');    
				  $this->db->from('reservation');
				  $this->db->like('type_of_event', $search);
				  
				}
				else if ($searchFilter == "any") {
				  $this->db->select('*');    
				  $this->db->from('reservation');
				  $this->db->group_start()
				  				->like('firstname', $search)
				  				->or_like('lastname', $search)
				  				->or_like('type_of_event', $search)
				  				->group_end();
				  
				}
				if ($statusFilter == "pending") {
				  $this->db->where('status', 1);
				  
				}
				else if ($statusFilter == "approved") {
				   $this->db->where('status', 0);
				  
				}
				else if ($statusFilter == "cancelled") {
				   $this->db->where('status', 2);
				  
				}
				
				$query = $this->db->get();
				return $query->result_array();

			}
		}

		public function count_pending_reservation() {
			$this->db->select('*');    
			$this->db->from('reservation');
			$this->db->where('status', 1);

			$query = $this->db->get();
			return count($query->result());
		}

		public function count_reservation() {
			$month = $this->input->post('selectMonth');

			$this->db->select('*');    
			$this->db->from('reservation');

			if ($month == 0) {
				
			}
			else if ($month == 1) {
				$this->db->where('MONTH(date_of_event)', 1);
			}
			else if ($month == 2) {
				$this->db->where('MONTH(date_of_event)', 2);
			}
			else if ($month == 3) {
				$this->db->where('MONTH(date_of_event)', 3);
			}
			else if ($month == 4) {
				$this->db->where('MONTH(date_of_event)', 4);
			}
			else if ($month == 5) {
				$this->db->where('MONTH(date_of_event)', 5);
			}
			else if ($month == 6) {
				$this->db->where('MONTH(date_of_event)', 6);
			}
			else if ($month == 7) {
				$this->db->where('MONTH(date_of_event)', 7);
			}
			else if ($month == 8) {
				$this->db->where('MONTH(date_of_event)', 8);
			}
			else if ($month == 9) {
				$this->db->where('MONTH(date_of_event)', 9);
			}
			else if ($month == 10) {
				$this->db->where('MONTH(date_of_event)', 10);
			}
			else if ($month == 11) {
				$this->db->where('MONTH(date_of_event)', 11);
			}
			else if ($month == 12) {
				$this->db->where('MONTH(date_of_event)', 12);
			}

			$query = $this->db->get();
			return count($query->result());
		}

		public function report_reservation() {
			$month = $this->input->post('selectMonth');

			$this->db->select('*');    
			$this->db->from('reservation');

			if ($month == 0) {
				
			}
			else if ($month == 1) {
				$this->db->where('MONTH(date_of_event)', 1);
			}
			else if ($month == 2) {
				$this->db->where('MONTH(date_of_event)', 2);
			}
			else if ($month == 3) {
				$this->db->where('MONTH(date_of_event)', 3);
			}
			else if ($month == 4) {
				$this->db->where('MONTH(date_of_event)', 4);
			}
			else if ($month == 5) {
				$this->db->where('MONTH(date_of_event)', 5);
			}
			else if ($month == 6) {
				$this->db->where('MONTH(date_of_event)', 6);
			}
			else if ($month == 7) {
				$this->db->where('MONTH(date_of_event)', 7);
			}
			else if ($month == 8) {
				$this->db->where('MONTH(date_of_event)', 8);
			}
			else if ($month == 9) {
				$this->db->where('MONTH(date_of_event)', 9);
			}
			else if ($month == 10) {
				$this->db->where('MONTH(date_of_event)', 10);
			}
			else if ($month == 11) {
				$this->db->where('MONTH(date_of_event)', 11);
			}
			else if ($month == 12) {
				$this->db->where('MONTH(date_of_event)', 12);
			}

			$query = $this->db->get();
			//return count($query->result());
			return $query->result_array();
		}

		public function create_reservation() {

			$this->db->select('*');    
			$this->db->from('reservation');
			$this->db->where('date_of_event', date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('date')))));

			$query = $this->db->get();

			$reference = "10000";
			$this->db->select('*');    
			$this->db->from('reservation');
			$this->db->order_by('reservation_id', 'DESC')->limit(1);
			$last_reference = $this->db->get()->row();
			if (count($last_reference) <= 0) {
				$reference += 1;
			}
			else {
				$reference = $last_reference->reference_no + 1;
			}

			if (count($query->result()) <= 1) {
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

				$this->db->insert('reservation', $data);
				
				return "true";
			}
			else {
				return "false";
			}
		}

		public function update_reservations($value) {
			$data = array(
			  'status' => $value,
			);

			$this->db->where('reservation_id', $this->input->post('id'));
			return $this->db->update('reservation', $data);
		}

		public function get_calendar_reservations() {
			// SELECT date_of_event, COUNT(*) AS count_date FROM `reservation` GROUP BY date_of_event

			$this->db->select('*, COUNT(*) AS count_date FROM `reservation` GROUP BY date_of_event');
			$query = $this->db->get();
			return $query->result_array();

		}
		
	}
?>