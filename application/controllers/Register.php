<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Your own constructor code
	}
	public function index()
	{
		$this->load->view('register');

	}
	public function solveRigisterInfo()
	{
		$post = $this->input->post();

		$query_cmd = 'SELECT * FROM site_user WHERE username = \''.$post['username'].'\'';

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
					'register_time' => date('Y-M-D h:m:s', time()),
				);	
			$this->db->insert('user', $data_to_insert);
			// $this->load->view('login-successful');
			$data = array(
					'username' => $post['username'],
					'logged_in' => true,
				);
			$this->session->set_userdata($data);
			// $this->load->view('index');
			redirect('Index/index');

		}
	}

}
