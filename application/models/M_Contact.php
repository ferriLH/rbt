<?php


class M_Contact extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function feedback($data)
    {
        $this->db->insert('t_pesan',$data);
    }
}