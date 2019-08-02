<?php


class C_Partner extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Partner');
		$this->load->model('M_Dashboard');
	}
	public function index()
	{
		$data = array(
			"title" => "Partner",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Partner',$data);
		}else{
			redirect('login');
		}
	}
}
