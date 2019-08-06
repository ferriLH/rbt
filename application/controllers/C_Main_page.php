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
			"title" => "Artist",
			"getPromo"		=> $this->M_Main_page->get_datapromo()
		);
        $this->load->view('main_page/V_Main',$data);
    }
}
