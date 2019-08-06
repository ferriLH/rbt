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
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Promo",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),

			);
			$this->load->view('dashboard_page/V_Promo',$data);
		}else{
			redirect('login');
		}
	}
}
