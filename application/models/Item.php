<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Model {

	public function get($id) {

		$this->db->where(array(
			'id' => $id,
		));

		return $this->db->get('items')->row();
	}

	public function get_by_category($category) {

		$this->db->select(array(
			App::$language.'_name as name',
			'price_1', 'price_2',
			App::$language.'_label_1 as label_1',
			App::$language.'_label_2 as label_2',
		));

		$this->db->where(array(
			'category' => $category,
		));

		$this->db->order_by('priority');

		$r = $this->db->get('items');

		return $r->result();
	}

	public function get_by_category_admin($category) {

		$this->db->where(array(
			'category' => $category,
		));

		$this->db->order_by('priority');

		return $this->db->get('items')->result();
	}

	public function add($data) {

		return $this->db->insert('items', $data);
	}

	public function edit($data, $id) {

		$this->db->where(array('id' => $id));

		return $this->db->update('items', $data);
	}

	public function delete($id) {

		$this->db->where(array(
			'id' => $id,
		));

		return $this->db->delete('items');
	}

}

/* End of file Item.php */
/* Location: ./application/models/Item.php */