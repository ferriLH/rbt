<?php
class M_Main_page extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get_datapromo()
	{
		$this->db->select('*');
		$this->db->from('t_promo');
		$this->db->where('aktif',TRUE);

		return $this->db->get()->result();
	}

}
