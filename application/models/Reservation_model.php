<?php
	class Reservation_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_reservations() {
			$this->db->order_by('reservation_id', 'DESC');
			$this->db->select('*');    
			$this->db->from('reservation');
			$this->db->join('client', 'reservation.client_id = client.client_id');

			$query = $this->db->get();
			return $query->result_array();

			// $query = $this->db->get('reservation');
			// return $query->row_array();
		}

		public function create_services() {

			$slug = url_title($this->input->post('services-title'));

			$data = array(
				'services_slug' => strtolower($slug),
				'services_title' => $this->input->post('services-title'),
				'services_desc' => $this->input->post('services-desc')
			);

			return $this->db->insert('services_cms', $data);
		}

		public function update_services()
		{
			$slug = url_title($this->input->post('services-title'));

			$data = array(
				'services_slug' => strtolower($slug),
				'services_title' => $this->input->post('services-title'),
				'services_desc' => $this->input->post('services-desc')
			);

			$this->db->where('ID', $this->input->post('id'));
			return $this->db->update('services_cms', $data);
		}

		public function delete_services($id)
		{
			$this->db->where('ID', $id);
			$this->db->delete('services_cms');
			return true;
		}
	}
?>