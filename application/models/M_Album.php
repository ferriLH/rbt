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
}