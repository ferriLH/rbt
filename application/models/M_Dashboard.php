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
	function getBio($id){
		$this->db->select("*");
		$this->db->from("t_admin");
		$this->db->where("aktif",true);
		$query = $this->db->get();
		return $query->result_array();
	}
	function update_bio($id,$data)
	{
		$this->db->where('id_admin',$id);
		$this->db->update('t_admin',$data);
	}
}
