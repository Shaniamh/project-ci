<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function dashboard()
	{
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/dashboard/dashboard');
        $this->load->view('templates/public/footer');
        }
        
        public function mahasiswa()
	{
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/mahasiswa/mahasiswa');
        $this->load->view('templates/public/footer');
        }
        
        public function dosen()
	{
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/dosen/dosen');
        $this->load->view('templates/public/footer');
        }
        
        public function jadwal()
	{
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/jadwal/jadwal');
        $this->load->view('templates/public/footer');
        }
        
        public function jurusan()
	{
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/jurusan/jurusan');
        $this->load->view('templates/public/footer');
        }
        
}
?>