<?php


class C_Artist extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Artist');
    }

    function index()
    {
        $data = array(
            "title" => "Artist",
        );
        $this->load->view('main_page/V_Artist',$data);
    }
}