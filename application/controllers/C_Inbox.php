<?php


class C_Inbox extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Inbox');
		$this->load->model('M_Dashboard');
	}
	public function index()
	{
		$data = array(
			"title" 		=> "Inbox",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Inbox',$data);
		}else{
			redirect('login');
		}
	}
}
