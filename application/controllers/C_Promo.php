<?php


class C_Promo extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Promo');
		$this->load->model('M_Dashboard');
		$this->load->helper('download');
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
			$config_u['file_name'] = $_FILES['file_promo']['name'];

			// Load and initialize upload library
			$this->load->library('upload', $config_u);
			$this->upload->initialize($config_u);

			$this->upload->do_upload('file_promo');
			$fileData = $this->upload->data();
			$d['file_promo'] = $fileData['file_name'];

			$this->M_Promo->add_new_promo($d);
			$this->session->set_flashdata('sukses', 'sukses');
			redirect('promo');
		}
	}
	public function deletePromo($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$old_promo = $this->M_Promo->getPromoOld($id);
			$this->M_Promo->setDeletePromo($id);
			unlink(FCPATH . "assets/foto_promo/" . $old_promo);
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
	function updatePromo($id)
	{
		$data = array(
			"title" => "Tambah Promo Baru",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
			"getPromoEdit"	=> $this->M_Promo->getPromoEdit($id),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Edit_Promo', $data);
		} else {
			redirect('login');
		}
	}

	function updatePromoAuth($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Update Promo",
				"getNewInbox" => $this->M_Dashboard->getNewInbox()
			);

			// Upload file to server
			//form validation
			$this->form_validation->set_rules('nama_promo', 'Nama Promo', 'required');
			$this->form_validation->set_rules('mekanisme_promo', 'Mekanisme Promo', 'required');
			$this->form_validation->set_rules('periode_promo', 'Periode Promo', 'required');
			$this->form_validation->set_rules('status_promo', 'Status Promo', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard_page/V_Edit_Promo', $data);
			} else {
				$old_promo = $this->M_Promo->getPromoOld($id);
				//upload protocol
				if(!empty($_FILES['file_promo']['name'])){
					$config['upload_path'] 		= 'assets/foto_promo/';
					$config['allowed_types'] 	= 'jpg|jpeg|png|gif';
					$config['file_name'] 		= $_FILES['file_promo']['name'];
					$config_u['max_size']       = 2000;
					//Load upload library and initialize configuration
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('file_promo')){
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
						unlink(FCPATH . "assets/foto_promo/" . $old_promo);
					}else{
						$picture = '';
					}
				}else{
					$picture = '';
				}

				if($picture==''){
					$d['nama_promo'] = $this->input->post('nama_promo');
					$d['mekanisme'] = $this->input->post('mekanisme_promo');
					$d['periode'] = $this->input->post('periode_promo');
					$d['aktif'] = ($this->input->post('status_promo'));
				}if($picture!=''){
					$d['nama_promo'] = $this->input->post('nama_promo');
					$d['mekanisme'] = $this->input->post('mekanisme_promo');
					$d['periode'] = $this->input->post('periode_promo');
					$d['file_promo'] = $picture;
					$d['aktif'] = ($this->input->post('status_promo'));
				}

				$this->M_Promo->update_promo($id,$d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('promo');
			}
		}else{
			redirect('login');
		}
	}
	function download()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Promo",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getPromo"		=> $this->M_Promo->getPromo(),

			);
			$this->load->view('dashboard_page/V_Promo',$data);
			force_download('assets/downloadable/mockups_promo.psd', NULL);
		}else{
			redirect('login');
		}
	}
}
