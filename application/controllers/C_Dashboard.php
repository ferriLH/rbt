<?php


class C_Dashboard extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Dashboard');
    }
    public function index()
    {
        if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" 		=> "Dashboard",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
			);
            $this->load->view('dashboard_page/V_Dashboard',$data);
        }else{
            redirect('login');
        }
    }
    public function bio($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Bio",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getBio" 		=> $this->M_Dashboard->getBio($id),
			);
			$this->load->view('dashboard_page/V_Bio',$data);
		}else{
			redirect('login');
		}
	}
	public function bioAuth($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {

			//form validation
			$this->form_validation->set_rules('nama', 	'Nama ',	'required');
			$this->form_validation->set_rules('email', 	'Email',	'required');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Bio',$data);
			} else {
				$this->form_validation->set_rules('password', 'Password ', 'required');
				$this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required');
				$password = ($this->input->post('password'));
				$cpassword = ($this->input->post('confirm-password'));
				if($this->form_validation->run() == FALSE){
					$d['nama_admin']	= ($this->input->post('nama'));
					$d['email_admin'] 	= ($this->input->post('email'));
					$this->M_Dashboard->update_bio($id,$d);
					$this->session->set_flashdata('sukses', 'sukses');
				}else{
					if($password==$cpassword){
						$d['nama_admin']	= ($this->input->post('nama'));
						$d['email_admin'] 	= ($this->input->post('email'));
						$d['password'] 		= sha1($cpassword);
						$this->M_Dashboard->update_bio($id,$d);
						$this->session->set_flashdata('sukses', 'sukses');
					}else $this->session->set_flashdata('failed', 'password does not march!');
				}
				$data = array(
					"title" => "Bio",
					"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
					"getBio" 		=> $this->M_Dashboard->getBio($id),
				);
				redirect('dashboard/bio/'.$id);
			}
		}else{
			redirect('login');
		}
	}
}
