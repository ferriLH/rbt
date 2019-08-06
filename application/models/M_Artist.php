<?php


class M_Artist extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_data_artist()
    {
        $this->db->select('*');
        $this->db->from('t_artist');
        return $this->db->get();
    }


    function get_artist($limit,$start)
    {
       // $this->db->select('*');
       // $this->db->from('t_genre');
        ////$this->db->join('t_lagu','t_lagu.genre_id=t_genre.id');
        //$this->db->join('t_album','t_album.id_album=t_lagu.album_id');
        //$this->db->join('t_artist','t_album.artist_id=t_artist.id_artists');
        //$this->db->join('t_partner','t_partner.id_partner=t_artist.partner_id');
        $this->db->where('t_artist.aktif',TRUE);
        $query = $this->db->get('t_artist',$limit,$start)->result();

        return $query;
    }
	function getArtistPartner($id)
	{
		$this->db->select('*');
		$this->db->from('t_artist');
		$this->db->join('t_partner','t_artist.partner_id=t_partner.id_partner');
		$this->db->where('t_artist.aktif',TRUE);
		$this->db->where('t_artist.partner_id',$id);
		return $this->db->get()->result();
	}
    function get_genre()
    {
        $this->db->select('*');
        $this->db->from('t_genre');
        return $this->db->get()->result();
    }

    function jumlah_data()
    {
        return $this->db->get('t_artist')->num_rows();
    }
	function setDeleteArtist($id){
		$data = array(
			'aktif'=>0,
		);
		$this->db->where('id_artists',$id);
		$this->db->update('t_artist',$data);
	}
}
