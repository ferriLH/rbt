<?php


class C_Promo extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Promo');
		$this->load->model('M_Dashboard');
	}
	public function index()
	{
		$data = array(
			"title" => "Promo",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),

		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Promo',$data);
		}else{
			redirect('login');
		}
	}
}
