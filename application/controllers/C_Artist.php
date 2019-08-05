<?php


class C_Artist extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Artist');
		$this->load->model('M_Dashboard');

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
	function dataArtist($id)
	{
		$data = array(
			"title" => "Artist",
			"getNewInbox"		=> $this->M_Dashboard->getNewInbox(),
			"getArtistPartner"	=> $this->M_Artist->getArtistPartner($id),
		);
		$this->load->view('dashboard_page/V_Artist',$data);
	}
}
