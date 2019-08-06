<?php


class C_Music extends CI_Controller

{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Music');
		$this->load->model('M_Dashboard');
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
			$this->M_Music->setDeleteAlbum($id);
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
}
