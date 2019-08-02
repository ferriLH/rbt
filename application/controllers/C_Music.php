<?php


class C_Music extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Music');
		$this->load->model('M_Dashboard');
	}
	public function index()
	{
		$data = array(
			"title" => "Music",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
			"getMusic"		=> $this->M_Music->getMusic(),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Music',$data);
		}else{
			redirect('login');
		}
	}
}
