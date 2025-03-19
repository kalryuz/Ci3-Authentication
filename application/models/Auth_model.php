<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	public function get_user($email)
	{
		return $this->db->where('email', $email)->get('users')->row();
	}
}