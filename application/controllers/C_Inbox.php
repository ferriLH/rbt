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
			"getReadInbox"	=>  $this->M_Inbox->getReadInbox(),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Inbox',$data);
		}else{
			redirect('login');
		}
	}
	public function baca($id)
	{
		$this->M_Inbox->setReadInbox($id);
		$data = array(
			"title" 		=> "Inbox",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
			"getReadInbox"	=>  $this->M_Inbox->getReadInbox(),
			"getInbox"		=>  $this->M_Inbox->getInbox($id),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_InboxBaca',$data);
		}else{
			redirect('login');
		}
	}
	public function delete($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->M_Inbox->setDeleteInbox($id);
			$data = array(
				"title" 		=> "Inbox",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getReadInbox"	=>  $this->M_Inbox->getReadInbox(),
			);
			redirect('inbox');
		}else{
			redirect('login');
		}
	}
}
