<?php


class C_Login extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
    }
    public function index()
    {
        $data = array(
            "title" => "Login",
        );
        $this->load->view('dashboard_page/sign/V_In',$data);
    }

    function auth()
    {
        $data = array(
            "title" => "Login",
        );
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('dashboard_page/sign/V_In',$data);
        } else {
            $usr = $this->input->post('email');
            $psw = sha1($this->input->post('password'));
            $cek = $this->M_Login->cek($usr,$psw);
            if ($cek->num_rows() != 0) {
                foreach ($cek->result() as $dat) {
                    $sess_data['isLogin'] = TRUE;
                    $sess_data['id_user'] = $dat->id_pengguna;
                    $sess_data['nama_user'] = $dat->nama_pengguna;
                    $sess_data['email_user'] = $dat->email;
                    $sess_data['no_telpon'] = $dat->no_telpon;
                    $sess_data['jk'] = $dat->jk;
                    $sess_data['alamat'] = $dat->alamat;
                    $sess_data['hak'] = $dat->hak_akses;
//                    $sess_data['id_artist'] = $dat->id_artist;
//                    $sess_data['nama_artist'] = $dat->nama_artist;
//                    $sess_data['bio'] = $dat->bio;
//                    $sess_data['picture_artist'] = $dat->picture_artist;
                    $this->session->set_userdata($sess_data);
                }
                $this->session->set_flashdata('sukses', 'sukses');
                redirect('dashboard/');
            } else {
                $this->session->set_flashdata('failed', '<br>Username atau Password yang anda masukkan salah!');
                $this->load->view('dashboard_page/sign/V_In',$data);
            }
        }
    }

    function signout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
