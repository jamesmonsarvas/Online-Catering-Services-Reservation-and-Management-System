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

		public function get_package($id) {
			$this->db->order_by('package_id');
			$query = $this->db->get_where('package', array('package_id' => $id));
			return $query->result_array();
		}

		public function get_pc_by_pid($id) {
			$this->db->distinct();
			$this->db->order_by('package_content.package_content_id', 'ASC');
			$this->db->select('package_content.package_content_id, package_content.type_of_menu, package_pc.package_id');    
			$this->db->from('package_content');
			$this->db->join('package_pc', 'package_pc.package_content_id = package_content.package_content_id');
			$this->db->where('package_id', $id);

			$query = $this->db->get();
			return $query->result_array();
		}

		public function create_packages() {

			$data = array(
				'package_no' => $this->input->post('package-no'),
				'price' => $this->input->post('price')
			);

			return $this->db->insert('package', $data);
		}

		public function delete_packages($id)
		{
			$this->db->where('package_id', $id);
			$this->db->delete('package');
			return true;
		}

		public function get_all_packages() {
			$this->db->order_by('package_content_id', 'ASC');
			$this->db->select('*');    
			$this->db->from('package_content');

			$query = $this->db->get();
			return $query->result_array();

			// $query = $this->db->get('reservation');
			// return $query->row_array();
		}

		public function get_packages_content() {
			$this->db->distinct();
			$this->db->order_by('package_content.package_content_id', 'ASC');
			$this->db->select('package_content.package_content_id, package_content.type_of_menu, package_pc.package_id');    
			$this->db->from('package_content');
			$this->db->join('package_pc', 'package_pc.package_content_id = package_content.package_content_id');

			$query = $this->db->get();
			return $query->result_array();

			// working query :
			// SELECT package_pc.package_id, package_content.package_content_id, package_content.type_of_menu FROM package_content JOIN package_pc ON package_pc.package_content_id = package_content.package_content_id ORDER BY package_pc.package_id ASC;
		}

		public function get_all_package_content() {
			$this->db->order_by('package_content_id');     
			$query = $this->db->get('package_content');
			return $query->result_array();
		}

		public function get_list_of_menu() {
			$this->db->order_by('list_of_menu_id');     
			$query = $this->db->get('list_of_menu');
			return $query->result_array();

			// working query :
			// SELECT list_of_menu.menu_details, package_content.type_of_menu FROM package_content JOIN list_of_menu ON package_content.package_content_id = list_of_menu.package_content_id;
		}

		public function insert_new_content() {

			$id = $this->input->post('id');
			$data = array();
			if ($id === null) {
				$this->db->order_by('package_content_id', 'ASC');
				$query = $this->db->get('package_content');
				return $query->result_array();
			}
			$this->db->distinct();
			$this->db->order_by('package_content.package_content_id', 'ASC');
			$this->db->select('package_content.package_content_id, package_content.type_of_menu, package_pc.package_id');    
			$this->db->from('package_content');
			$this->db->join('package_pc', 'package_pc.package_content_id = package_content.package_content_id');

			$query = $this->db->get_where('', array('package_id' => $id));
			$results = $query->result_array();

			/* Kinuha ko muna yung data sa package_pc sabay tinignan kung connected na ba sila.
			Kapag hindi pa connected yung isang record, ipupush ko na sa $data sabay i-insert ko lahat
			ng laman ng $data.
			*/

			$raw_data = array($this->input->post('type_of_menu'));

			$flag = "false";
			foreach ($raw_data[0] as $raw) {
				foreach ($results as $result) {
					if ($result["package_content_id"] == $raw) {
						$flag = "true";
						break;
					}
				}
				if ($flag == "false") {
					array_push($data, array(
						'package_id' => $id,
						'package_content_id' => $raw
					));
				}
				$flag = "false";
			}
			print_r($data);
			if (!empty($data)) {
				return $this->db->insert_batch('package_pc', $data);
			}
			else {
				//return $this->db->insert_batch('package_pc', $data);
				return false;
			}
		}

		public function update_package()
		{
			$data = array(
				'package_no' => $this->input->post('package-no'),
				'price' => $this->input->post('price')
			);

			$this->db->where('package_id', $this->input->post('id'));
			return $this->db->update('package', $data);
		}

		public function delete_package($id)
		{
			$this->db->where('package_id', $id);
			$this->db->delete('package_pc');
			return "true";
		}

		public function delete_content_in_package($pid, $cid)
		{
			$this->db->where('package_id', $pid);
			$this->db->where('package_content_id', $cid);
			$this->db->delete('package_pc');
			return true;
		}

	}
?>