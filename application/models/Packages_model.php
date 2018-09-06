<?php
	class Packages_model extends CI_Model {
		public function __construct(){
			$this->load->database();
		}

		public function get_packages() {
				$this->db->order_by('package_id');
				//old query = package.package_id as pid, package_content.package_content_id as pcid, package.price, package.package_no, package_content.type_of_menu as menu     
				$query = $this->db->get('Package');
				//$this->db->join('package', 'Package_PC.package_id = package.package_id', 'inner');
				//$this->db->join('package_content', 'Package_PC.package_content_id = package_content.package_content_id', 'inner');
				return $query->result_array();
			
			// $this->db->select('*');    
			// $this->db->from('Package_PC');
			// $this->db->join('Package_PC', 'Package_PC.package_id = package.package_id');
			// $this->db->join('Package_PC', 'Package_PC.package_content_id = package_content.package_content_id');
			// $query1 = $this->db->get();

			// $query = $this->db->get_where($query1, array('packages_slug' => $slug));
			// return $query->row_array();
		}

		public function create_packages() {

			$data = array(
				'package_no' => $this->input->post('package-no'),
				'price' => $this->input->post('price')
			);

			return $this->db->insert('package', $data);
		}

		//

		public function delete_packages($id)
		{
			$this->db->where('package_id', $id);
			$this->db->delete('package');
			return true;
		}

		public function get_packages_content($id) {

			if ($id === null) {
				$this->db->order_by('package_content_id', 'DESC');
				$query = $this->db->get('package_content');
				return $query->result_array();
			}
			$this->db->distinct();
			$this->db->order_by('package_content.package_content_id', 'ASC');
			$this->db->select('package_content.package_content_id, package_content.type_of_menu, package_pc.package_id');    
			$this->db->from('package_content');
			$this->db->join('package_pc', 'package_pc.package_content_id = package_content.package_content_id');

			$query = $this->db->get_where('', array('package_id' => $id));
			return $query->result_array();

			// working query :
			// SELECT package_content.package_content_id, package_content.type_of_menu FROM package_content JOIN package_pc ON package_pc.package_content_id = package_content.package_content_id WHERE package_pc.package_id = 1 ORDER BY package_content.package_content_id ASC;
		}

		public function get_list_of_menu($id) {

			//$this->db->order_by('list_of_menu.list_of_menu_id', 'ASC');
			$this->db->select('list_of_menu.list_of_menu_id, package_content.type_of_menu, list_of_menu.menu_details');    
			$this->db->from('list_of_menu');
			$this->db->join('package_content', 'list_of_menu.package_content_id = package_content.package_content_id');

			$query = $this->db->get_where('', array('list_of_menu.package_content_id' => $id));
			return $query->result_array();

			// working query :
			// SELECT list_of_menu.list_of_menu_id, package_content.type_of_menu, list_of_menu.menu_details FROM list_of_menu JOIN package_content ON list_of_menu.package_content_id = package_content.package_content_id WHERE list_of_menu.package_content_id = 1
		}

		
	}
?>