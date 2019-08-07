<?php


class C_Music extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Music');
		$this->load->model('M_Dashboard');
		$this->load->model('M_Artist');
	}
	public function index($flag)
	{
		$data = array(
			"title" => "Music",
			"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
			"getSong"		=> $this->M_Music->getSong(),
			"getAlbum"		=> $this->M_Music->getAlbum(),
			"getGenre"		=> $this->M_Music->getGenre(),
			"flag"			=> $flag,
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Music',$data);
		}else{
			redirect('login');
		}
	}
	public function deleteSong($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->M_Music->setDeleteSong($id);
			$data = array(
				"title" => "Music",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getSong"		=> $this->M_Music->getSong(),
				"getAlbum"		=> $this->M_Music->getAlbum(),
				"getGenre"		=> $this->M_Music->getGenre(),
			);
			redirect('music/song');
		}else{
			redirect('login');
		}
	}
	public function deleteAlbum($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$photo_name = $this->M_Music->getPhotoAlbum($id);
			$this->M_Music->setDeleteAlbum($id);
			unlink( FCPATH . "assets/foto_album/" .$photo_name);
			$data = array(
				"title" => "Music",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getSong"		=> $this->M_Music->getSong(),
				"getAlbum"		=> $this->M_Music->getAlbum(),
				"getGenre"		=> $this->M_Music->getGenre(),
			);
			redirect('music/album');
		}else{
			redirect('login');
		}
	}
	public function deleteGenre($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->M_Music->setDeleteGenre($id);
			$data = array(
				"title" => "Music",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getSong"		=> $this->M_Music->getSong(),
				"getAlbum"		=> $this->M_Music->getAlbum(),
				"getGenre"		=> $this->M_Music->getGenre(),
			);
			redirect('music/genre');
		}else{
			redirect('login');
		}
	}
	public function addGenre()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
//			$this->M_Music->addGenre();
			$data = array(
				"title" => "Genre",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getSong"		=> $this->M_Music->getSong(),
				"getAlbum"		=> $this->M_Music->getAlbum(),
				"getGenre"		=> $this->M_Music->getGenre(),
			);
			$this->load->view('dashboard_page/V_Add_Genre',$data);
		}else{
			redirect('login');
		}
	}
	public function addAlbum()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Album",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getSong"		=> $this->M_Music->getSong(),
				"getAlbum"		=> $this->M_Music->getAlbum(),
				"getGenre"		=> $this->M_Music->getGenre(),
				"getArtist"		=> $this->M_Artist->get_data_artist()->result(),
			);
			$this->load->view('dashboard_page/V_Add_Album',$data);
		}else{
			redirect('login');
		}
	}
	public function addSong()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Song",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getSong"		=> $this->M_Music->getSong(),
				"getAlbum"		=> $this->M_Music->getAlbum(),
				"getGenre"		=> $this->M_Music->getGenre(),
			);
			$this->load->view('dashboard_page/V_Add_Song',$data);
		}else{
			redirect('login');
		}
	}
	function addGenreAuth()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Genre",
				"getNewInbox" => $this->M_Dashboard->getNewInbox()
			);

			//form validation
			$this->form_validation->set_rules('nama_genre', 'Nama Genre', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Add_Genre',$data);
			} else {
				$d['genre'] = ($this->input->post('nama_genre'));
				$this->M_Music->add_new_genre($d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('music/genre');
			}
		}else{
			redirect('login');
		}
	}
	function addAlbumAuth()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Album",
				"getNewInbox" => $this->M_Dashboard->getNewInbox()
			);

			//form validation
			$this->form_validation->set_rules('nama_album', 'Nama Album', 	'required');
			$this->form_validation->set_rules('artist', 	'Artist', 		'required');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Add_Album',$data);
			} else {
				$d['artist_id'] 	= ($this->input->post('artist'));
				$d['nama_album'] 	= ($this->input->post('nama_album'));
				//upload protocol
				if(!empty($_FILES['photo_album']['name'])){
					$config['upload_path'] 		= 'assets/foto_album/';
					$config['allowed_types'] 	= 'jpg|jpeg|png|gif';
					$config['file_name'] 		= $_FILES['photo_album']['name'];
					$config_u['max_size']       = 2000;
					//Load upload library and initialize configuration
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('photo_album')){
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					}else{
						$picture = '';
					}
				}else{
					$picture = '';
				}
				$d['picture_album'] 	= $picture;
				$d['aktif'] 			= true;

				$this->M_Music->add_new_album($d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('music/album');
			}
		}else{
			redirect('login');
		}
	}
}
