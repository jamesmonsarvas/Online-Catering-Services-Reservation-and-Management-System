<?php
class Event_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function get_events() {
		$this->db->select('*');    
		$this->db->from('event');
		$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');
		$this->db->where('reservation.status', 0);

		$query = $this->db->get();
		return $query->result_array();

			// query : SELECT * FROM event JOIN reservation ON event.reservation_id = reservation.reservation_id;
	}

	public function get_events_to_print($id) {
		$this->db->select('*');    
		$this->db->from('event');
		$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');
		$this->db->where('reservation.status', 0);
		$this->db->where('event_id', $id);

		$query = $this->db->get();
		return $query->result_array();

			// query : SELECT * FROM event JOIN reservation ON event.reservation_id = reservation.reservation_id;
	}

	public function get_events_where() {
		$search = $this->input->post('search');
		$searchFilter = $this->input->post('searchFilter');
		$statusFilter = $this->input->post('statusFilter');

		if ($search == "") {
			$this->db->select('*');    
			$this->db->from('event');
			$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');
			$this->db->where('reservation.status', 0);

			$query = $this->db->get();
			return $query->result_array();
		}
		else {
			if ($searchFilter == "name") {
				$this->db->select('*'); 
				$this->db->from('event');   
				$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');
				$this->db->group_start()
				->like('reservation.firstname', $search)
				->or_like('reservation.lastname', $search)
				->group_end();

			}
			else if ($searchFilter == "type-of-event") {
				$this->db->select('*');    
				$this->db->from('event');   
				$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');
				$this->db->like('reservation.type_of_event', $search);

			}
			else if ($searchFilter == "any") {
				$this->db->select('*');    
				$this->db->from('event');   
				$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');
				$this->db->group_start()
				->like('reservation.firstname', $search)
				->or_like('reservation.lastname', $search)
				->or_like('reservation.type_of_event', $search)
				->group_end();

			}
			if ($statusFilter == "ongoing") {
				$this->db->where('event.event_status', 0);

			}
			else if ($statusFilter == "finished") {
				$this->db->where('event.event_status', 1);

			}
			else if ($statusFilter == "inprogress") {
				$this->db->where('event.event_status', 2);

			}
			else if ($statusFilter == "cancelled") {
				$this->db->where('event.event_status', 3);

			}

			$query = $this->db->get();
			return $query->result_array();

		}
	}

	public function count_unfinished_events() {
		$this->db->select('*');    
		$this->db->from('event');
		$this->db->where('event_status', 0);

		$query = $this->db->get();
		return count($query->result());
	}

	public function count_event() {
			$month = $this->input->post('selectMonth');

			$this->db->select('*');    
			$this->db->from('event');
			$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');

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

		public function report_event() {
			$month = $this->input->post('selectMonth');

			$this->db->select('*');    
			$this->db->from('event');
			$this->db->join('reservation', 'event.reservation_id = reservation.reservation_id');

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

	public function create_event($rid) {
		$data = array(
			'reservation_id' => $rid,
			'package_id' => $this->input->post('package_id'),
			'color_theme' => $this->input->post('color-theme'),
			'comments' => "Input your comment here.",
			'event_status' => 0
		);

		return $this->db->insert('event', $data);
	}

	public function update_events($num) {
		$data = array(
			'event_status' => $this->input->post('event_status' . $num),
			'comments' => $this->input->post('comments')
		);

		$this->db->where('event_id', $this->input->post('id'));
		return $this->db->update('event', $data);
	}
}

?>