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
            "artist" => $this->M_Artist->get_artist(),
            "genre" => $this->M_Artist->get_genre()
        );
        $this->load->view('main_page/V_Artist',$data);
    }
}