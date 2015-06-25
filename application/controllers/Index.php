<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}
	public function index()
	{
		$query_cmd = 'SELECT * FROM site_article ORDER BY time DESC';

		$data = $this->db->query($query_cmd)->result_array();

		$this->load->view('index', array('data'=>$data));
		// var_dump(array('data'=>$data));
		// echo base_url();
	}
	public function deleteRecorde(	)
	{
		# code...

		if($this->session->userdata('username') != 'admin'){
			show_error('Pemission denied, please login with admin account then try again');
		}
		else{
			$post = $this->input->post();

			$this->db->delete('article', array('id' => $post['id'])); 
			
			redirect('Index/index');
		}

	}
	public function solveIssueArticle()
	{
		if($this->session->userdata('logged_in') == false){
			show_error('Please login first');
		}
		$post = $this->input->post();

		$data = array(
			'content' => $post['content'], 
			'user'    => $this->session->userdata('username'),
			'time'    =>  date('y-m-d h:m:s', time(void)),
			);

		$this->db->insert('article', $data);

		redirect('Index/index');

	}

}
