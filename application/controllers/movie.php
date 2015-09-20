<?php
class Movie extends MY_Controller{
	public function add() {
		$this->load->model('movie/moviemodel');
		$this->load->model('genremodel');

		if(!empty($_POST)) {
			$result = $this->moviemodel->addMovie($this->input->post());
		}

		$genres = $this->genremodel->findAll();

		$this->js('movie/movie_validation');
		$this->render('movie/adding', array(
			'genres' => $genres
		));
	}
}
