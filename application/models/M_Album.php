<?php


class M_Album extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_album()
    {
        $this->db->select('*');
        $this->db->from('t_album');
        $this->db->where('t_album.aktif',TRUE);
        return $this->db->get()->result();
    }

    function get_album_pagination($limit,$start)
	{
		$this->db->where('t_album.aktif',TRUE);
		$query = $this->db->get('t_album',$limit,$start)->result();

		return $query;
	}

    function get_album_new()
	{
		$this->db->select('*');
		$this->db->from('t_album');
		$this->db->join('t_artist','t_artist.id_artists=t_album.artist_id');
		$this->db->order_by('id_album','DESC');
		$this->db->limit('10');
		return $this->db->get()->result();

	}
}
