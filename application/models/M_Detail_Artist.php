<?php


class M_Detail_Artist extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_detail_artist($id)
	{
		$this->db->select('*');
		$this->db->from('t_artist');
		$this->db->join('t_album','t_album.artist_id=t_artist.id_artists');
		$this->db->join('t_partner','t_partner.id_partner=t_artist.partner_id');
		$this->db->where('t_artist.id_artists=',$id);
		return $this->db->get()->result();
	}

	function get_featured_artist()
	{
		$this->db->select('*');
		$this->db->from('t_artist');
		$this->db->join('t_partner','t_partner.id_partner=t_artist.partner_id');
		$this->db->order_by('id_artists','DESC');
		$this->db->limit('10');
		return $this->db->get()->result();
	}

	function get_all_song($id)
	{
		$this->db->select('*');
		$this->db->from('t_artist');
		$this->db->join('t_album','t_album.artist_id=t_artist.id_artists');
		$this->db->join('t_lagu','t_lagu.album_id=t_album.id_album');
		$this->db->where('t_artist.id_artists=',$id);
		$this->db->limit(14);
		return $this->db->get()->result();
	}

	function get_album($limit,$start,$id)
	{
		//$this->db->select('*');
		//$this->db->from('t_album');
		$this->db->where('artist_id=',$id);
		//$this->db->count_all_results();
		$query = $this->db->get('t_album',$limit,$start)->result();

		return $query;
	}

}
