<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

        public function __construct(){
		parent::__construct();
	
		$this->load->model("m_login");
                if($this->m_login->isNotLogin()) redirect(site_url('login'));
	}
 

	public function index()
	{
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/dashboard/dashboard');
        $this->load->view('templates/public/footer');
        }
        
        
}
?>