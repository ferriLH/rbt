<?php


class C_Result_Search extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data = array(
			"title" => "TitTatTut Search",
		);
		$this->load->view('main_page/V_Result_Search',$data);
	}
}
