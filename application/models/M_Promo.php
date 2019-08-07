<?php


class M_Promo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function add_new_promo($data)
	{
		$this->db->insert('t_promo',$data);
	}
	function getPromo()
	{
		$this->db->select('*');
		$this->db->where('aktif',true);
		$this->db->from('t_promo');
		return $this->db->get()->result();
	}
	function setDeletePromo($id){
		$data = array(
			'aktif'=>0,
		);
		$this->db->where('id_promo',$id);
		$this->db->update('t_promo',$data);
	}
}
