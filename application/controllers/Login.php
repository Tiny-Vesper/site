<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}
	public function index()
	{
		echo site_url();
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function solveLoginInfo()
	{
		$post = $this->input->post();

		$query_cmd = 'SELECT * FROM site_user WHERE username ='.$post['username'];

		$query = $this->db->query($query_cmd);

		if($query->num_rows() == 0){
			show_error('no such a user');
		}
		else{
			if(md5($post['password']) == $query->row_array()['password']){
				$this->load->view('login-successful');
			}
			else{
				show_error('wrong password');
			}
		}

	}
	public function register()
	{
		$this->load->view('register');

	}
	public function solveRigisterInfo()
	{
		$post = $this->input->post();

		$query_cmd = 'SELECT * FROM site_user WHERE username ='.$post['username'];

		$query = $this->db->query($query_cmd);

		if($query->num_rows() >= 1){
			show_error('username existed');
		}
		else{
			if($post['password'] != $post['con_password']){
				show_error('two password are not matched');
			}
			$data_to_insert = array(
					'username' => $post['username'],
					'password' => md5($post['password']),
					'register_time' => time(),
				);	
			$this->db->insert('user', $data_to_insert);
			$this->load->view('login-successful');
		}
	}

}
