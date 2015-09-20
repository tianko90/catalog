<?php
class Usermodel extends CI_Model {
	public function create($data) {
		if(!isset($data['username']) || !isset($data['email']) || !isset($data['password'])) {
			return false;
		}

		$username = trim($this->db->escape_str($data['username']));
		$email = trim($this->db->escape_str($data['email']));
		$pass = trim($this->db->escape_str($data['password']));

		if($username === '' || $email === '' || $pass === '') {
			return false;
		}

		$pass = md5($pass);
		return $this->db->query("INSERT INTO users(email, username, pass) VALUES ('$email', '$username', '$pass')");
	}

	public function find($data) {
		if(!isset($data['username']) || !isset($data['password'])) {
			return array();
		}

		$username = trim($this->db->escape_str($data['username']));
		$pass = trim($this->db->escape_str($data['password']));

		if($username === '' || $pass === '') {
			return array();
		}

		$pass = md5($pass);
		$query = "SELECT * FROM users WHERE username = '$username' AND pass = '$pass' LIMIT 1";
		$result = $this->db->query($query)->result_array();

		if(empty($result)) {
			return $result;
		}

		$result = $result[0];
		unset($result['pass']);
		return $result;
	}
}