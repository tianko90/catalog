<?php

class Moviemodel extends CI_Model{
	public function addMovie($data){
		if (!isset($data['title']) && $data['poster'] && $data['restrictions'])  {
			return false;
		}

		$title = $this->db->escape_str($data['title']);
		$poster = $this->db->escape_str($data['poster']);
		$restriction = $this->db->escape_str($data['restrictions']);

		if ($title === '' || $poster === '' || $restriction === '') {
			return false;
		}

		$this->db->query("INSERT INTO movies (title, poster, restrictions)
			VALUES ('$title', '$poster', '$restriction')");

		$id = $this->db->insert_id();

		foreach($data['genre'] as $genre) {
			$genre = (int)$genre;

			$this->db->query("INSERT INTO movies_genres (movie_id, genre_id)
			VALUES ('$id', '$genre')");
		}
	}
}