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
	function addPartnerAuth()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Partner",
				"getNewInbox" => $this->M_Dashboard->getNewInbox()
			);

			//form validation
			$this->form_validation->set_rules('nomor_induk', 	'Nomor Induuk',	'required');
			$this->form_validation->set_rules('nama_partner', 	'Nama Partner',	'required');
			$this->form_validation->set_rules('email_partner', 	'Email Partner','required');
			$this->form_validation->set_rules('no_telpon', 		'Nomor Telpon',	'required');
			$this->form_validation->set_rules('jk', 			'Jenis Kelamin','required');
			$this->form_validation->set_rules('alamat', 		'Alamat', 		'required');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Add_Partner',$data);
			} else {

				$this->M_Partner->add_new_partner();
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('data-partner');
			}
		}else{
			redirect('login');
		}
	}
}
