<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');

	}

	public function index()
	{
		$this->load->view('login');
	}

	public function check_login()
	{
		$this->form_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->Auth_model->get_user($email);

			if ($user && password_verify($password, $user->password)) {
				$session_data = [
					'user_id' => $user->user_id,
					'name' => $user->name,
					'role' => $user->role,
					'logged_in' => TRUE
				];

				$this->session->set_userdata($session_data);

				$this->session->set_flashdata('message', [
					'icon' => 'success',
					'title' => 'Welcome, ' . $user->name,
					'text' => 'Login Successfully'
				]);

				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', [
					'icon' => 'error',
					'title' => 'Login Failed!',
					'text' => 'Invalid email or password'
				]);

				redirect('login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function form_rules()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'required', array('required' => '%s cant empty!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s cant empty!'));
	}
}
