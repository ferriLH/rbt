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
		date_default_timezone_set('Asia/Jakarta');
		$t = date('Y/m/d H:i:s');
		$d['nama_pengirim'] 	= $this->input->post('nama');
        $d['email_pengirim'] 	= $this->input->post('email');
        $d['kontak_pengirim'] 	= $this->input->post('notelp');
        $d['isi_pesan'] 		= $this->input->post('pesan');
		$d['baca'] 				= false;
		$d['hapus'] 			= false;
		$d['waktu_kirim'] 		= $t;
		$this->M_Contact->feedback($d);
        $this->session->set_flashdata('sukses','sukses');
        redirect('contact');
    }

}
