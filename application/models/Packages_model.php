<?php
	class Packages_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_packages($slug = false) {

			if ($slug === false) {
				$this->db->select('package.package_id as pid, package_content.package_content_id as pcid, package.price, package.package_no, package_content.type_of_menu as menu');     
				$this->db->from('Package_PC');
				$this->db->join('package', 'Package_PC.package_id = package.package_id', 'inner');
				$this->db->join('package_content', 'Package_PC.package_content_id = package_content.package_content_id', 'inner');
				$query = $this->db->get();
				return $query->result_array();
			}


			// $this->db->select('*');    
			// $this->db->from('Package_PC');
			// $this->db->join('Package_PC', 'Package_PC.package_id = package.package_id');
			// $this->db->join('Package_PC', 'Package_PC.package_content_id = package_content.package_content_id');
			// $query1 = $this->db->get();

			// $query = $this->db->get_where($query1, array('packages_slug' => $slug));
			// return $query->row_array();
		}

	}
?>