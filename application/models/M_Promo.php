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
}
