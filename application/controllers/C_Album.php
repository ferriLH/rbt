<?php


class C_Album extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Album');
    }

    function index()
    {
        $data = array(
            "title" => "Album List",
            "album" => $this->M_Album->get_album()
        );

        $this->load->view('main_page/V_Album',$data);
    }

}