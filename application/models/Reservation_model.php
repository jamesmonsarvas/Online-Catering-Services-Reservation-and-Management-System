<?php
	class Reservation_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_reservations() {
			//SELECT * FROM `reservation`as `r` JOIN `services_cms` as `sc` ON `r`.`type_of_event` = `sc`.`ID` WHERE 1 

			$this->db->order_by('status', 'DESC');
			$this->db->select('*');    
			$this->db->from('reservation');
			$this->db->join('services_cms', 'reservation.type_of_event = services_cms.ID');

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
			$search = $this->input->post('submit');

			$this->db->select('*');
			$this->db->from('reservation');

			if ($search == "Pending"){
				$this->db->where('status', 1);
			}
			else if ($search == "Approved") {
				$this->db->where('status', 0);
			}
			else if ($search == "Cancelled") {
				$this->db->where('status', 2);
			}
			else {

			}

			$query = $this->db->get();
			return $query->result_array();
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

			// $reference = "10000";
			// $this->db->select('*');    
			// $this->db->from('reservation');
			// $this->db->order_by('reservation_id', 'DESC')->limit(1);
			// $last_reference = $this->db->get()->row();
			// if (count($last_reference) <= 0) {
			// 	$reference += 1;
			// }
			// else {
			// 	$reference = $last_reference->reference_no + 1;
			// }
			$reference = "";
			do {
				$rand_num1 = sprintf('%04d', rand(1, 9999));
				$rand_num2 = sprintf('%05d', rand(1, 99999));
				$rand_num3 = sprintf('%04d', rand(1, 9999));
				$reference = "1-".$rand_num1."-".$rand_num2."-".$rand_num3;
				$this->db->select('*');    
				$this->db->from('reservation');
				$this->db->where('reference_no', $reference);

				$query2 = $this->db->get();
			} while (count($query2->result()) >= 1);



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
				
				return $reference;
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

		public function reservation_chart() {
			//SELECT MONTH(date_of_event) MONTH, COUNT(*) COUNT FROM reservation WHERE YEAR(date_of_event) = '2018' GROUP BY MONTH(date_of_event)

			$this->db->select('MONTHNAME(date_of_event) MONTH, COUNT(*) COUNT');
			$this->db->from('reservation');
			$this->db->where("YEAR(date_of_event) = 2018 GROUP BY MONTH(date_of_event)");

			$query = $this->db->get();
			return $query->result_array();
		}
		
	}
?>