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