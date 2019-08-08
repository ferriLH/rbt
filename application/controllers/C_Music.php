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
			"getNewInbox" => $this->M_Dashboard->getNewInbox(),
			"getSong" => $this->M_Music->getSong(),
			"getAlbum" => $this->M_Music->getAlbum(),
			"getGenre" => $this->M_Music->getGenre(),
			"flag" => $flag,
		);
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('dashboard_page/V_Music', $data);
		} else {
			redirect('login');
		}
	}


	public function deleteSong($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$song_old = $this->M_Music->getSongOld($id);
			$this->M_Music->setDeleteSong($id);
			unlink( FCPATH . "assets/file_lagu/" .$song_old);
			$data = array(
				"title" => "Music",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);
			redirect('music/song');
		} else {
			redirect('login');
		}
	}

	public function deleteAlbum($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$photo_name = $this->M_Music->getPhotoAlbum($id);
			$this->M_Music->setDeleteAlbum($id);
			unlink(FCPATH . "assets/foto_album/" . $photo_name);
			$data = array(
				"title" => "Music",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);
			redirect('music/album');
		} else {
			redirect('login');
		}
	}

	public function deleteGenre($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->M_Music->setDeleteGenre($id);
			$data = array(
				"title" => "Music",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);
			redirect('music/genre');
		} else {
			redirect('login');
		}
	}

	public function addGenre()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
//			$this->M_Music->addGenre();
			$data = array(
				"title" => "Genre",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);
			$this->load->view('dashboard_page/V_Add_Genre', $data);
		} else {
			redirect('login');
		}
	}

	public function addAlbum()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Album",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
				"getArtist" => $this->M_Artist->get_data_artist()->result(),
			);
			$this->load->view('dashboard_page/V_Add_Album', $data);
		} else {
			redirect('login');
		}
	}

	public function addSong()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Song",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);
			$this->load->view('dashboard_page/V_Add_Song', $data);
		} else {
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
				$this->load->view('dashboard_page/V_Add_Genre', $data);
			} else {
				$d['genre'] = ($this->input->post('nama_genre'));
				$this->M_Music->add_new_genre($d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('music/genre');
			}
		} else {
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
			$this->form_validation->set_rules('nama_album', 'Nama Album', 'required');
			$this->form_validation->set_rules('artist', 'Artist', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Add_Album', $data);
			} else {
				$d['artist_id'] = ($this->input->post('artist'));
				$d['nama_album'] = ($this->input->post('nama_album'));
				//upload protocol
				if (!empty($_FILES['photo_album']['name'])) {
					$config['upload_path'] = 'assets/foto_album/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = $_FILES['photo_album']['name'];
					$config['max_size'] = 2000;
					//Load upload library and initialize configuration
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('photo_album')) {
						$uploadData = $this->upload->data();
						$picture = $uploadData['file_name'];
					} else {
						$picture = '';
					}
				} else {
					$picture = '';
				}
				$d['picture_album'] = $picture;
				$d['aktif'] = true;

				$this->M_Music->add_new_album($d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('music/album');
			}
		} else {
			redirect('login');
		}
	}

	function addSongAuth()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Song",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);
		}
		//form validation
		$this->form_validation->set_rules('judul_lagu', 	'Judul Lagu', 		'required');
		$this->form_validation->set_rules('harga', 			'Harga', 			'required');
		$this->form_validation->set_rules('xl',				'Kode Registrasi XL',	'required');
		$this->form_validation->set_rules('tsel',			'Kode Registrasi TSEL',	'required');
		$this->form_validation->set_rules('indosat',		'Kode Registrasi INDOSAT',	'required');
		$this->form_validation->set_rules('album', 			'album', 			'required');
		$this->form_validation->set_rules('genre', 			'genre', 			'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('failed', 'gagal');
			$this->load->view('dashboard_page/V_Add_Song', $data);
		} else {
			$d['judul'] 		= ($this->input->post('judul_lagu'));
			$d['harga'] 		= ($this->input->post('harga'));
			$d['kode_xl'] 		= ($this->input->post('xl'));
			$d['kode_tsel'] 	= ($this->input->post('tsel'));
			$d['kode_indosat'] 	= ($this->input->post('indosat'));
			$d['album_id'] 		= ($this->input->post('album'));
			$d['genre_id'] 		= ($this->input->post('genre'));

			//upload protocol
			if (!empty($_FILES['file_lagu']['name'])) {
				$config['upload_path'] = 'assets/file_lagu/';
				$config['allowed_types'] = 'mp3';
				$config['file_name'] = $_FILES['file_lagu']['name'];
				$config['max_size'] = 10000;
				//load library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('file_lagu')) {
					$uploadData = $this->upload->data();
					$namalagu = $uploadData['file_name'];
				} else {
					$namalagu = '';
				}
			} else {
				$namalagu = '';
			}
			$d['file'] = $namalagu;
			$d['aktif'] = true;
			$this->M_Music->add_new_song($d);
			$this->session->set_flashdata('sukses', 'sukses');
			redirect('music/song');
		}
	}
	public function updateGenre($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Genre",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getGenreEdit"	=> $this->M_Music->getGenreEdit($id),
			);
			$this->load->view('dashboard_page/V_Edit_Genre',$data);
		}else{
			redirect('login');
		}
	}
	function updateGenreAuth($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Genre",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);

			//form validation
			$this->form_validation->set_rules('nama_genre', 	'Nama Genre',	'required');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Edit_Genre',$data);
			} else {
				$d['genre'] = ($this->input->post('nama_genre'));

				$this->M_Music->update_genre($id,$d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('music/genre');
			}
		}else{
			redirect('login');
		}
	}
	public function updateAlbum($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Album",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getAlbumEdit"	=> $this->M_Music->getAlbumEdit($id),
				"getArtist" 	=> $this->M_Artist->get_data_artist()->result(),
			);
			$this->load->view('dashboard_page/V_Edit_Album',$data);
		}else{
			redirect('login');
		}
	}
	function updateAlbumAuth($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Album",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);

			//form validation
			$this->form_validation->set_rules('nama_album',	'Nama Aalbum',	'required');
			$this->form_validation->set_rules('artist',		'Nama Artist',	'required');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Edit_Album',$data);
			} else {
				$photo_old = $this->M_Music->getPhotoAlbum($id);
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
						unlink( FCPATH . "assets/foto_album/" .$photo_old);
					}else{
						$picture = '';
					}
				}else{
					$picture = '';
				}

				if($picture==''){
					$d['nama_album'] 		= ($this->input->post('nama_album'));
					$d['artist_id'] 		= ($this->input->post('artist'));
				}if($picture!=''){
					$d['nama_album'] 		= ($this->input->post('nama_album'));
					$d['artist_id'] 		= ($this->input->post('artist'));
					$d['picture_album'] 	= $picture;
				}
				$this->M_Music->update_album($id,$d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('music/album');
			}
		}else{
			redirect('login');
		}
	}
	public function updateSong($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Song",
				"getNewInbox"	=> $this->M_Dashboard->getNewInbox(),
				"getSongEdit"	=> $this->M_Music->getSongEdit($id),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);
			$this->load->view('dashboard_page/V_Edit_Song',$data);
		}else{
			redirect('login');
		}
	}
	function updateSongAuth($id)
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$data = array(
				"title" => "Album",
				"getNewInbox" => $this->M_Dashboard->getNewInbox(),
				"getSong" => $this->M_Music->getSong(),
				"getAlbum" => $this->M_Music->getAlbum(),
				"getGenre" => $this->M_Music->getGenre(),
			);

			//form validation
			$this->form_validation->set_rules('judul_lagu', 	'Judul Lagu', 		'required');
			$this->form_validation->set_rules('harga', 			'Harga', 			'required');
			$this->form_validation->set_rules('xl',				'Kode Registrasi XL',	'required');
			$this->form_validation->set_rules('tsel',			'Kode Registrasi TSEL',	'required');
			$this->form_validation->set_rules('indosat',		'Kode Registrasi INDOSAT',	'required');
			$this->form_validation->set_rules('album', 			'album', 			'required');
			$this->form_validation->set_rules('genre', 			'genre', 			'required');
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('failed', 'gagal');
				$this->load->view('dashboard_page/V_Edit_Song',$data);
			} else {
				$song_old = $this->M_Music->getSongOld($id);
				//upload protocol
				if (!empty($_FILES['file_lagu']['name'])) {
					$config['upload_path'] = 'assets/file_lagu/';
					$config['allowed_types'] = 'mp3';
					$config['file_name'] = $_FILES['file_lagu']['name'];
					$config['max_size'] = 10000;
					//load library
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('file_lagu')) {
						$uploadData = $this->upload->data();
						$namalagu = $uploadData['file_name'];
						unlink( FCPATH . "assets/file_lagu/" .$song_old);
					} else {
						$namalagu = '';
					}
				} else {
					$namalagu = '';
				}

				if($namalagu==''){
					$d['album_id'] 		= ($this->input->post('album'));
					$d['genre_id'] 		= ($this->input->post('genre'));
					$d['judul'] 		= ($this->input->post('judul_lagu'));
					$d['harga'] 		= ($this->input->post('harga'));
					$d['kode_xl'] 		= ($this->input->post('xl'));
					$d['kode_tsel']		= ($this->input->post('tsel'));
					$d['kode_indosat']	= ($this->input->post('indosat'));
				}if($namalagu!=''){
					$d['album_id'] 		= ($this->input->post('album'));
					$d['genre_id'] 		= ($this->input->post('genre'));
					$d['judul'] 		= ($this->input->post('judul_lagu'));
					$d['harga'] 		= ($this->input->post('harga'));
					$d['file'] 			= $namalagu;
					$d['kode_xl'] 		= ($this->input->post('xl'));
					$d['kode_tsel']		= ($this->input->post('tsel'));
					$d['kode_indosat']	= ($this->input->post('indosat'));
				}
				$this->M_Music->update_song($id,$d);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('music/song');
			}
		}else{
			redirect('login');
		}
	}
}
