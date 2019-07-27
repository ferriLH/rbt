<?php


class C_Signup extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Signup');
    }

    public function index()
    {
        $data = array(
            "title" => "Signup",
        );
        $this->load->view('dashboard_page/sign/V_Up', $data);
    }

    function confirm()
    {
        $data = array(
            "title" => "Signup"
        );
        //form validation
        $this->form_validation->set_rules('nama', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('re-password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('dashboard_page/sign/V_Up',$data);
        } else {
            $d['username'] = $this->input->post('nama');
            $d['email'] = $this->input->post('email');
            $d['password'] = sha1($this->input->post('password'));
            $this->M_Signup->daftar($d);
            $this->session->set_flashdata('successsignup');
            redirect('login');
        }


    }
}