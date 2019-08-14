<?php


class C_Result_Search extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Main_page');

	}

	function index()
	{
		$key= $this->input->get('search');
		$data = array(
			"title" 	=> "TitTatTut Search",
			"key"		=> $key,
			"result"	=>  $this->M_Main_page->search($key),
		);
		$this->load->view('main_page/V_Result_Search',$data);
	}
}
