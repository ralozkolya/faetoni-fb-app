<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {

	public function get($id) {

		$this->db->where(array(
			'id' => $id,
		));

		return $this->db->get('categories')->row();
	}

	public function get_list() {

		$lang = App::$language;

		$this->db->select(array(
			$lang.'_name as name', 'id'
		));

		$this->db->order_by('priority');

		$r = $this->db->get('categories');

		return $r->result();
	}

	public function get_list_admin() {

		$this->db->order_by('priority');

		return $this->db->get('categories')->result();
	}

	public function get_last_priority() {

		$this->db->select_max('priority');

		return $this->db->get('categories')->row()->priority + 5;
	}

	public function add($data) {

		return $this->db->insert('categories', $data);
	}

	public function edit($data, $id) {

		$this->db->where(array('id' => $id));

		return $this->db->update('categories', $data);
	}

	public function delete($id) {

		$this->db->where(array('id' => $id));

		return $this->db->delete('categories');
	}

}

/* End of file Category.php */
/* Location: ./application/models/Category.php */