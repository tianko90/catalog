<?php
class Genremodel extends CI_Model {
	public function findAll() {
		$query = 'SELECT * FROM genres ORDER BY id';
		return $this->db->query($query)->result_array();
	}
}