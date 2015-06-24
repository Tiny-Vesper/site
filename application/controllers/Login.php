<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function logout()
	{
		$this->session->set_userdata('logged_in', false);

		redirect('Index/index');
		// $this->load->view('index');
	}
	public function solveLoginInfo()
	{
		$post = $this->input->post();

		// var_dump($post);

		$query_cmd = 'SELECT * FROM site_user WHERE username = \''.$post['username'].'\'';

		// var_dump($query_cmd);

		$query = $this->db->query($query_cmd);

		if($query->num_rows() == 0){
			show_error('no such a user');
		}
		else{
			if(md5($post['password']) == $query->row_array()['password']){

				$data = array(
						'username' => $post['username'],
						'logged_in' => true,
					);
				$this->session->set_userdata($data);

				// $this->load->view('index');

				redirect('Index/index');

			}
			else{
				show_error('wrong password');
			}
		}

	}
	
}
