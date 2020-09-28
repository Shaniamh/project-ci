<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
        $data['dosen'] = $this->m_dosen->tampil_data()->
        result();
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/dosen/dosen', $data);
        $this->load->view('templates/public/footer');
    }

    public function tambah_data()
    {
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $telepon = $this->input->post('telepon');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $email = $this->input->post('email');

            $data = array(
                    'nip' => $nip,
                    'nama' => $nama,
                    'jenis_kelamin' => $jenis_kelamin,
                    'alamat' => $alamat,
                    'telepon' => $telepon,
                    'tgl_lahir' => $tgl_lahir,
                    'email' => $email
            );

            $this->m_dosen->input_data($data, 'dosen');
            redirect('dosen/index');
    }

    public function hapus_data($nip)
    {
            $where = array('nip'=>$nip);
            $this->m_dosen->hapus_data($where, 'dosen');
            redirect('dosen/index');
    }
    
    public function edit($nip)
    {
            $where = array('nip'=>$nip);
            $data['dosen'] = $this->m_dosen->edit_data($where,'dosen')->result();
            $this->load->view('templates/public/head');
            $this->load->view('templates/public/header');
            $this->load->view('templates/public/sidebar');
            $this->load->view('templates/dosen/edit', $data);
            $this->load->view('templates/public/footer');
    }
    
    public function update()
    {
            $nip = $this->input->post('nip');
            $nama = $this->input->post('nama');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $telepon = $this->input->post('telepon');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $email = $this->input->post('email');


            $data = array(
                    'nip' => $nip,
                    'nama' => $nama,
                    'jenis_kelamin' => $jenis_kelamin,
                    'alamat' => $alamat,
                    'telepon' => $telepon,
                    'tgl_lahir' => $tgl_lahir,
                    'email' => $email
            );

            $where = array(
                    'nip'=> $nip
            );

            $this->m_dosen->update_data($where,$data,'dosen');
            redirect('dosen/index');
    }

    public function detail($nip)
    {
            $this->load->model('m_dosen');
            $detail = $this->m_dosen->detail_data($nip);
            $data['detail'] = $detail;
            $this->load->view('templates/public/head');
            $this->load->view('templates/public/header');
            $this->load->view('templates/public/sidebar');
            $this->load->view('templates/dosen/detail', $data);
            $this->load->view('templates/public/footer');
    }
        
}
?>