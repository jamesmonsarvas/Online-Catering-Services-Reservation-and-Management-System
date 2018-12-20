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

	public function create_services($file_name) {

		$slug = url_title($this->input->post('services-title'));
		$upload_file_name = "assets/images/" . $file_name;

		$data = array(
			'services_slug' => strtolower($slug),
			'services_title' => $this->input->post('services-title'),
			'service_summary' => $this->input->post('service-summary'),
			'services_desc' => $this->input->post('services-desc'),
			'img_src' => $upload_file_name
		);

		return $this->db->insert('services_cms', $data);
	}

	public function update_services()
	{
		$slug = url_title($this->input->post('services-title'));

		$data = array(
			'services_slug' => strtolower($slug),
			'services_title' => $this->input->post('services-title'),
			'service_summary' => $this->input->post('service-summary'),
			'services_desc' => $this->input->post('services-desc')
		);

		$this->db->where('ID', $this->input->post('id'));
		return $this->db->update('services_cms', $data);
	}

	public function update_image($file_name) {
		$upload_file_name = "assets/images/" . $file_name;

		$data = array(
			'img_src' => $upload_file_name
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
