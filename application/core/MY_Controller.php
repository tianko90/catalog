<?php
class MY_Controller extends CI_Controller {
	protected $js = array();

	protected function js($path) {
		$this->js[] = $path;
	}

	protected function render($path, $data = array()) {
		$this->load->library('session');

		$user = $this->session->userdata('user');
		if($user === false) {
			$user = array();
		}

		$content = $this->load->view($path, $data, true);

		$this->load->view('layout', array(
			'user' => $user,
			'content' => $content,
			'js' => $this->js
		));
	}
}