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
			'file_promo'=>'',
			'aktif'=>0,
		);
		$this->db->where('id_promo',$id);
		$this->db->update('t_promo',$data);
	}
	function getPromoEdit($id){
		$this->db->select("*");
		$this->db->from("t_promo");
		$this->db->where("id_promo",$id);
		$this->db->where("aktif",true);
		$query = $this->db->get();
		return $query->result_array();
	}
	function getPromoOld($id)
	{
		$this->db->select('file_promo');
		$this->db->from('t_promo');
		$this->db->where('id_promo',$id);
		$query = $this->db->get();
		return $query->row('file_promo');
	}
	function update_promo($id,$data)
	{
		$this->db->where('id_promo',$id);
		$this->db->update('t_promo',$data);
	}
}
