<?php


class M_Song extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all_song()
	{
		$this->db->select('*');
		$this->db->from('t_lagu');
		$this->db->join('t_album','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_artist','t_album.artist_id=t_artist.id_artists');
		$this->db->where('t_lagu.aktif',TRUE);
		return $this->db->get()->result();
	}

	function get_new_song()
	{
		$this->db->select('*');
		$this->db->from('t_lagu');
		$this->db->join('t_album','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_artist','t_album.artist_id=t_artist.id_artists');
		$this->db->order_by('id_lagu','DESC');
		$this->db->where('t_lagu.aktif',TRUE);
		$this->db->limit('10');
		return $this->db->get()->result();
	}
	function get_current_page($limit,$start)
	{
		$this->db->limit($limit,$start);
		$this->db->select('*');
		$this->db->from('t_lagu');
		$this->db->join('t_album','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_artist','t_album.artist_id=t_artist.id_artists');
		$this->db->where('t_lagu.aktif',TRUE);
		return $this->db->get()->result();
	}

}
