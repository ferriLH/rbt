<?php


class M_Music extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getSong(){
		$this->db->select("*");
		$this->db->from("t_lagu l");
		$this->db->join('t_album a', 'l.album_id = a.id_album','inner');
		$this->db->join('t_artist art', 'a.artist_id = art.id_artists','inner');
		$this->db->join('t_genre g', 'l.genre_id = g.id','inner');
		$this->db->where("l.aktif",true);
		$query = $this->db->get();
		return $query->result();
	}
	function getAlbum(){
		$this->db->select("*");
		$this->db->from("t_album a");
		$this->db->join('t_artist art', 'a.artist_id = art.id_artists','inner');
		$this->db->where("a.aktif",true);
		$query = $this->db->get();
		return $query->result();
	}
	function getGenre(){
		$this->db->select("*");
		$this->db->from("t_genre");
		$query = $this->db->get();
		return $query->result();
	}
	function setDeleteSong($id){
		$data = array(
			'aktif'=>0,
		);
		$this->db->where('id_lagu',$id);
		$this->db->update('t_lagu',$data);
	}
	function setDeleteAlbum($id){
		$data = array(
			'picture_album'=>'',
			'aktif'=>0,
		);
		$this->db->where('id_album',$id);
		$this->db->update('t_album',$data);
	}
	function setDeleteGenre($id){
		$this->db->where('id',$id);
		$this->db->delete('t_genre');
	}
	function add_new_genre($data)
	{
		$this->db->insert('t_genre',$data);
	}

	function add_new_song($data)
	{
		$this->db->insert('t_lagu',$data);
	}
	function add_new_album($data)
	{
		$this->db->insert('t_album',$data);
	}
	function getPhotoAlbum($id)
	{
		$this->db->select('picture_album');
		$this->db->from('t_album');
		$this->db->where('id_album',$id);
		$query = $this->db->get();
		return $query->row('picture_album');
	}
}
