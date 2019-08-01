<?php


class C_Promo extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Promo');
	}
	public function index()
	{
		$data = array(
			"title" => "Promo",
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Promo',$data);
		}else{
			redirect('login');
		}
	}
}
