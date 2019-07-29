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
        $id_user = $this->session->userdata('id_user');
        $data = array(
            "title" => "Dashboard",
            "get_artist" => $this->M_Dashboard->get_artist($id_user),
        );
        if ($this->session->userdata('isLogin') == TRUE) {
//            $this->session->set_flashdata('sukses', 'sukses');
            $this->load->view('dashboard_page/V_Dashboard',$data);
        }else{
            redirect('login');
        }
    }
}