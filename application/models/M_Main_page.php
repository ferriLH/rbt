<?php
class M_Main_page extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_datapromo()
	{
		$this->db->select('*');
		$this->db->from('t_promo');
		$this->db->where('aktif',TRUE);

		return $this->db->get()->result();
	}

	function discover()
	{
		$this->db->select('*');
		$this->db->from('t_lagu');
		$this->db->join('t_genre','t_lagu.genre_id=t_genre.id');
		$this->db->join('t_album','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_artist','t_album.artist_id=t_artist.id_artists');
		//$this->db->join('t_partner','t_partner.id_partner=t_artist.partner_id');
		$this->db->order_by('t_lagu.id_lagu','RANDOM');
		$this->db->limit(16);
		$this->db->where('t_lagu.aktif',TRUE);
		return $this->db->get()->result();
	}

	function new_release()
	{
		$this->db->select('*');
		$this->db->from('t_lagu');
		$this->db->join('t_genre','t_lagu.genre_id=t_genre.id');
		$this->db->join('t_album','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_artist','t_album.artist_id=t_artist.id_artists');
		$this->db->order_by('id_lagu','DESC');
		$this->db->where('t_lagu.aktif',TRUE);
		$this->db->limit('8');
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
	function get_charts()
	{
		$this->db->select('*');
		$this->db->from('t_lagu');
		$this->db->order_by('t_lagu.id_lagu','RANDOM');
		$this->db->limit(16);
		$this->db->where('t_lagu.aktif',TRUE);
		return $this->db->get()->result();
	}
	function search($key)
	{
		$this->db->select('*');
		$this->db->from('t_lagu');
		$this->db->join('t_genre','t_lagu.genre_id=t_genre.id');
		$this->db->join('t_album','t_lagu.album_id=t_album.id_album');
		$this->db->join('t_artist','t_album.artist_id=t_artist.id_artists');
		if(!empty($key)) {
			$this->db->group_start();
			$this->db->like('judul', $key);
			$this->db->or_like('nama_artist', $key);
			$this->db->or_like('genre', $key);
			$this->db->group_end();
		}
		$query = $this->db->get();
		return $query->result();
	}
}
