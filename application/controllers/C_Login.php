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
                    $sess_data['id_user'] = $dat->id_user;
                    $sess_data['nama_user'] = $dat->username;
                    $sess_data['email_user'] = $dat->email;
                    $sess_data['password'] = $dat->password;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard/');
            } else {
                $this->session->set_flashdata('failed', '<br>Username atau Password yang anda masukkan salah!');
                $this->load->view('dashboard_page/sign/V_In',$data);
            }
        }
    }

    function signout(){
        $this->session->sess_destroy();
        redirect('');
    }
}