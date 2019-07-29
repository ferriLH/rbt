<?php


class M_Login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek ($user,$pass){
        $this->db->select("*");
        $this->db->from("t_pengguna");
//        $this->db->join('t_artist a', 'p.id_pengguna = a.user_id','inner');
        $this->db->where("email",$user);
        $this->db->where("password",$pass);
        return $this->db->get();
    }

}