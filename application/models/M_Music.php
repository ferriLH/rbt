<?php


class M_Music extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getMusic(){
		$this->db->select("*");
		$this->db->from("t_lagu l");
		$this->db->join('t_album a', 'l.album_id = a.id_album','inner');
		$this->db->join('t_artist art', 'a.artist_id = art.id_artists','inner');
		$this->db->join('t_genre g', 'l.genre_id = g.id','inner');
		$this->db->where("l.aktif",true);
		$query = $this->db->get();
		return $query->result();
	}
}
