<?php
class User extends MY_Controller {
	public function index() {
		$this->load->helper('url');
		redirect('user/login');
	}

	public function registration() {
		$this->load->model('user/usermodel');

		$post = $this->input->post();

		if(!empty($post) && $this->usermodel->create($post)) {
			$this->load->helper('url');
			redirect('user/login');
		}

		$this->js('user/user_validation');
		$this->render('user/registration');
	}

	public function login() {
		$this->load->model('user/usermodel');

		$post = $this->input->post();

		if(!empty($post)) {
			$user = $this->usermodel->find($post);

			if(!empty($user)) {
				$this->load->library('session');
				$this->load->helper('url');

				$this->session->set_userdata(array(
					'user' => $user
				));

				redirect('movie/add');
			}
		}
		$this->js('user/login');
		$this->render('user/login');
	}

	public function logout() {
		$test = $this->load->library('session');
		$this->load->helper('url');

		$this->session->unset_userdata('user');
		redirect('user/login');
	}
}