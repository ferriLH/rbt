<?php


class C_Detail_Album extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Detail_Album');
	}

	function index()
	{
		$data = array(
			"title" => "Detail Album"
		);

		$id = $this->uri->segment(3);

		$data['detail_album'] = $this->M_Detail_Album->get_detail_album($id);

		$this->load->view('main_page/V_Detail_Album',$data);
	}

}
