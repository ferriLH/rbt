<?php


class M_Partner extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function getPartnerArtist(){
		$this->db->select("*");
		$this->db->from("t_partner p");
		$this->db->join('t_artist a', 'p.id_partner = a.partner_id','inner');
		$this->db->where("p.aktif",true);
		$query = $this->db->get();
		return $query->result();
	}
	function getPartner(){
		$this->db->select("*");
		$this->db->from("t_partner");
		$this->db->where("aktif",true);
		$query = $this->db->get();
		return $query->result();
	}
	function setDeletePartner($id){
		$data = array(
			'aktif'=>0,
		);
		$this->db->where('id_partner',$id);
		$this->db->update('t_partner',$data);
	}
	function add_new_partner($data)
	{
		$this->db->insert('t_partner',$data);
	}
	function getPartnerEdit($id){
		$this->db->select("*");
		$this->db->from("t_partner");
		$this->db->where("id_partner",$id);
		$this->db->where("aktif",true);
		$query = $this->db->get();
		return $query->result_array();
	}
	function update_partner($id,$data)
	{
		$this->db->where('id_partner',$id);
		$this->db->update('t_partner',$data);
	}
}
