<?php


class M_Detail_Album extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_detail_album($id_album)
	{
		$this->db->select('*');
		$this->db->from('t_album');
		$this->db->join('t_lagu','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_genre','t_genre.id=t_lagu.genre_id');
		$this->db->join('t_artist','t_artist.id_artists=t_album.artist_id');
		//$this->db->join('t_partner','t_partner.id_partner=t_artist.partner_id');
		$this->db->where('t_album.id_album=',$id_album);
		return $this->db->get()->result();
	}
	function get_detail_artist($id)
	{
		$this->db->select('*');
		$this->db->from('t_artist');
		$this->db->join('t_album','t_album.artist_id=t_artist.id_artists');
		//$this->db->join('t_partner','t_partner.id_partner=t_artist.partner_id');
		$this->db->join('t_lagu','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_genre','t_genre.id=t_lagu.genre_id');
		$this->db->where('t_album.id_album=',$id);
		$this->db->limit(1);
		return $this->db->get()->result();

	}
	function featured_album()
	{
		$this->db->select('*');
		$this->db->from('t_album');
		$this->db->join('t_artist','t_artist.id_artists=t_album.artist_id');
		$this->db->where('t_album.aktif',TRUE);
		$this->db->order_by('id_album','DESC');
		$this->db->limit('10');
		return $this->db->get()->result();
	}

}
