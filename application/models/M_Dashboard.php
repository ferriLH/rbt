<?php


class M_Dashboard extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_artist ($user){
        $this->db->select("*");
        $this->db->from("t_artist");
        $this->db->where("user_id",$user);
        return $this->db->get();
    }
}