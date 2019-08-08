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
}
