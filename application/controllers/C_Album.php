<?php


class C_Album extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data = array(
            "title" => "Album List",
        );
        $this->load->view('main_page/V_Album',$data);
    }

}