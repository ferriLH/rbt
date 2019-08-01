<?php


class C_Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Contact');
    }

    function index()
    {
        $data = array(
            "title" => "Contact Us",
        );
        $this->load->view('main_page/V_Contact',$data);
    }

    function kirim()
    {
        $d['nama'] = $this->input->post('nama');
        $d['email'] = $this->input->post('email');
        $d['nohp'] = ($this->input->post('nohp'));
        $d['pesan'] = ($this->input->post('pesan'));
        $this->M_Contact->feedback($d);
        $this->session->set_flashdata('sukses','sukses');
        redirect('contact');
    }

}