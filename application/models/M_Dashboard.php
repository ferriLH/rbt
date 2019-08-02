<?php


class M_Dashboard extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	function getNewInbox(){
		$this->db->where('baca',0);
		$this->db->where('hapus',0);
		$this->db->order_by('waktu_kirim','desc');
		$query = $this->db->get('t_pesan');
		return $query->result();
	}
}
