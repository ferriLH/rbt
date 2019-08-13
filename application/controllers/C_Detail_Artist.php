<?php


class C_Detail_Artist extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Detail_Artist');
		$this->load->library('pagination');
	}

	function index()
	{
		$data = array(
			"title" => "Detail Artist"
		);
//config pagination
		$config['base_url'] = base_url('artist/detail/(:any)');  //site url
		$config['total_rows'] = $this->db->count_all_results('t_album'); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config['uri_segment'] = 4;
		$choice = $config["total_rows"] / $config["per_page"];
		 $config['num_links'] = floor($choice);
		//style pagination
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$id = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		$data['album'] = $this->M_Detail_Artist->get_album($config['per_page'], $page,$id);
		$data['pagination'] = $this->pagination->create_links();



		$data['detail_artist'] = $this->M_Detail_Artist->get_detail_artist($id);
		$data['song'] = $this->M_Detail_Artist->get_all_song($id);
		$data['featured'] = $this->M_Detail_Artist->get_featured_artist();

		$this->load->view('main_page/V_Detail_Artist',$data);
	}
}
