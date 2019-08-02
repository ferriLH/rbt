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
        $data = array(
            "title" 		=> "Dashboard",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
        );
        if ($this->session->userdata('isLogin') == TRUE) {
            $this->load->view('dashboard_page/V_Dashboard',$data);
        }else{
            redirect('login');
        }
    }
    public function bio()
	{
		$data = array(
			"title" => "Bio",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Bio',$data);
		}else{
			redirect('login');
		}
	}
}
