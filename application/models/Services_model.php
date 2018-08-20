<?php
	class Services_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_services($slug = false) {

			if ($slug === false) {

				$this->db->order_by('ID', 'DESC');
				$query = $this->db->get('services_cms');
				return $query->result_array();
			}

			$query = $this->db->get_where('services_cms', array('services_slug' => $slug));
			return $query->row_array();
		}

		public function create_services() {

			$slug = url_title($this->input->post('services-title'));

			$data = array(
				'services_title' => $this->input->post('services-title'),
				'services_slug' => strtolower($slug),
				'services_desc' => $this->input->post('services-desc')
			);

			return $this->db->insert('services_cms', $data);
		}
	}
?>