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
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Partner",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getPartner"	=> $this->M_Partner->getPartner(),
			);
			$this->load->view('dashboard_page/V_Partner',$data);
		}else{
			redirect('login');
		}
	}
	public function deletePartner($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->M_Partner->setDeletePartner($id);
			$data = array(
				"title" 		=> "Partner",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getPartner"	=> $this->M_Partner->getPartner(),
			);
			redirect('partner');
		}else{
			redirect('login');
		}
	}
	public function addPartner()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Partner",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getPartner"	=> $this->M_Partner->getPartner(),
			);
			$this->load->view('dashboard_page/V_Add_Partner',$data);
		}else{
			redirect('login');
		}
	}
}
