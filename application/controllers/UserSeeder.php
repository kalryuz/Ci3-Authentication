<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserSeeder extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	
	public function seed()
	{
		$data = [
			'name' => 'Kalryuz Dev',
			'email' => 'admin@test.com',
			'password' => password_hash('admin', PASSWORD_DEFAULT),
			'role' => 'admin'
		];

		$insert = $this->User_model->insert_user($data);

		if ($insert) {
			echo "Test user created successfully"; 
		} else {
			echo "Error inserting test user";
		}
	}
}
