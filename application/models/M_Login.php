<?php


class M_Login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek ($user,$pass){
        $tbl = "t_user";
        $this->db->select("*");
        $this->db->from($tbl);
        $this->db->where("email = '$user'");
        $this->db->where("password",$pass);
        return $this->db->get();
    }
}