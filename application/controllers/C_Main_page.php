<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main_page extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Main_page');
    }
    public function index()
    {
		$data = array(
			"title" => "TitTatTut Main",
			"getPromo"		=> $this->M_Main_page->get_datapromo(),
			"getDiscover"	=> $this->M_Main_page->discover(),
			"getnewrelease"	=> $this->M_Main_page->new_release(),
			"featured"  	=> $this->M_Main_page->featured_album(),
			"charts"		=> $this->M_Main_page->get_charts()
		);
        $this->load->view('main_page/V_Main',$data);
    }
}
