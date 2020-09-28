<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_login");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            if($this->m_login->doLogin()) redirect(site_url('dashboard/index'));
        }

        // tampilkan halaman login
        $this->load->view("templates/administrator/login.php");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login/index'));
    }
}