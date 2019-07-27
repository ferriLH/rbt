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
            "title" => "Dashboard",
        );
        $this->load->view('dashboard_page/V_Dashboard',$data);
    }
}