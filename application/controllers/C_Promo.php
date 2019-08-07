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
				"getPromo"		=> $this->M_Promo->getPromo(),

			);
			$this->load->view('dashboard_page/V_Promo',$data);
		}else{
			redirect('login');
		}
	}
	function addpromo()
	{
		$data = array(
			"title" => "Tambah Promo Baru",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Add_Promo', $data);
		} else {
			redirect('login');
		}
	}

	function confirm()
	{
		$data = array(
			"title" => "Tambah Promo Baru",
			"getNewInbox" => $this->M_Dashboard->getNewInbox()
		);

			// Upload file to server
		//form validation
		$this->form_validation->set_rules('nama_promo', 'Nama Promo', 'required');
		$this->form_validation->set_rules('mekanisme_promo', 'Mekanisme Promo', 'required');
		$this->form_validation->set_rules('periode_promo', 'Periode Promo', 'required');
		$this->form_validation->set_rules('status_promo', 'Status Promo', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dashboard_page/V_Add_Promo', $data);
		} else {
			$d['nama_promo'] = $this->input->post('nama_promo');
			$d['mekanisme'] = $this->input->post('mekanisme_promo');
			$d['periode'] = $this->input->post('periode_promo');
			$d['aktif'] = ($this->input->post('status_promo'));
			//upload protocol


			$uploadPath = './assets/foto_promo/';
			// File upload configuration
			$config_u['upload_path'] = $uploadPath;
			$config_u['allowed_types'] = 'jpg|jpeg|png';
			// Load and initialize upload library
			$this->load->library('upload', $config_u);
			$this->upload->initialize($config_u);

			$fileData = $this->upload->data();
			$this->upload->do_upload('file_promo');
			$d['file_promo'] = $fileData['file_name'];

			$this->M_Promo->add_new_promo($d);
			$this->session->set_flashdata('sukses', 'sukses');
			redirect('promo/addpromo');
		}
	}
	public function deletePromo($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->M_Promo->setDeletePromo($id);
			$data = array(
				"title" 		=> "Promo",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getPromo"		=> $this->M_Promo->getPromo(),
			);
			redirect('promo');
		}else{
			redirect('login');
		}
	}

}
