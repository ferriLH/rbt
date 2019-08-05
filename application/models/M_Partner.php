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

}
