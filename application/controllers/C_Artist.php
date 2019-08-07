<?php


class C_Artist extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Artist');
        $this->load->library('pagination');
		$this->load->model('M_Dashboard');
		$this->load->model('M_Partner');
    }

    function index()
    {
        $data = array(
            "title" => "Artist",
        );
        //config pagination
        $config['base_url'] = base_url('artist/page');  //site url
        $config['total_rows'] = $this->db->count_all('t_artist'); //total row
        $config['per_page'] = 12;  //show record per halaman
        $config['uri_segment'] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        // $config['num_links'] = floor($choice);
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

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['data'] = $this->M_Artist->get_artist($config['per_page'], $page);
        $data['pagination'] = $this->pagination->create_links();
		$data['new_a'] = $this->M_Artist->get_new_artist();
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
	public function deleteArtist($id,$idp)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$photo_name = $this->M_Artist->getPhotoArtist($id);
			$this->M_Artist->setDeleteArtist($id);
			echo $photo_name;
			unlink( FCPATH . "assets/foto_artis/" .$photo_name  );
			$data = array(
				"title" 		=> "Artist",
				"getNewInbox"		=> $this->M_Dashboard->getNewInbox(),
				"getArtistPartner"	=> $this->M_Artist->getArtistPartner($id),
			);
			redirect('data-artist/'.$idp);
		}else{
			redirect('login');
		}
	}
	public function addArtist()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Artist",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getPartner"	=> $this->M_Partner->getPartner(),
			);
			$this->load->view('dashboard_page/V_Add_Artist',$data);
		}else{
			redirect('login');
		}
	}
	function addArtistAuth()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Artist",
				"getNewInbox" => $this->M_Dashboard->getNewInbox()
			);

			//form validation
			$this->form_validation->set_rules('nama_artist', 	'Nama Artist', 	'required');
			$this->form_validation->set_rules('bio', 			'Bio', 			'required');
			//$this->form_validation->set_rules('photo_artist', 	'Photo Artist', 'required');
			$this->form_validation->set_rules('partner', 		'Partner', 		'required');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Add_Artist',$data);
			} else {
				$d['partner_id'] 		= ($this->input->post('partner'));
				$d['nama_artist'] 		= ($this->input->post('nama_artist'));
				$d['bio'] 				= ($this->input->post('bio'));
				//upload protocol
				if(!empty($_FILES['photo_artist']['name'])){
					$config['upload_path'] 		= 'assets/foto_artis/';
					$config['allowed_types'] 	= 'jpg|jpeg|png|gif';
					$config['file_name'] 		= $_FILES['photo_artist']['name'];
					$config_u['max_size']       = 2000;
					//Load upload library and initialize configuration
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('photo_artist')){
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					}else{
						$picture = '';
					}
				}else{
					$picture = '';
				}
				$d['picture_artist'] 	= $picture;
				$d['aktif'] 			= true;

				$this->M_Artist->add_new_artist($d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('data-artist/'.$this->input->post('partner'));
			}
		}else{
			redirect('login');
		}
	}
}
