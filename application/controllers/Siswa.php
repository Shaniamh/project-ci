<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {


	public function index()
	{
        $data['siswa'] = $this->m_siswa->tampil_data()->
        result();
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/mahasiswa/siswa', $data);
        $this->load->view('templates/public/footer');
        }
        
        public function tambah_data()
        {
                $nisn = $this->input->post('nisn');
                $nama = $this->input->post('nama');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $alamat = $this->input->post('alamat');
                $telepon = $this->input->post('telepon');
                $tgl_lahir = $this->input->post('tgl_lahir');
                $jurusan = $this->input->post('kelas');

                $data = array(
                        'nisn' => $nisn,
                        'nama' => $nama,
                        'jenis_kelamin' => $jenis_kelamin,
                        'alamat' => $alamat,
                        'telepon' => $telepon,
                        'tgl_lahir' => $tgl_lahir,
                        'kelas' => $kelas
                );

                $this->m_siswa->input_data($data, 'siswa');
                redirect('siswa/index');
        }

        public function hapus_data($nisn)
        {
                $where = array('nisn'=>$nisn);
                $this->m_siswa->hapus_data($where, 'siswa');
                redirect('siswa/index');
        }
        
        public function edit($nisn)
        {
                $where = array('nisn'=>$nisn);
                $data['siswa'] = $this->m_siswa->edit_data($where,'siswa')->result();
                $this->load->view('templates/public/head');
                $this->load->view('templates/public/header');
                $this->load->view('templates/public/sidebar');
                $this->load->view('templates/siswa/edit', $data);
                $this->load->view('templates/public/footer');
        }
        
        public function update()
        {
                $nisn = $this->input->post('nisn');
                $nama = $this->input->post('nama');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $alamat = $this->input->post('alamat');
                $telepon = $this->input->post('telepon');
                $tgl_lahir = $this->input->post('tgl_lahir');
                $jurusan = $this->input->post('kelas');
  


                $data = array(
                        'nisn' => $nisn,
                        'nama' => $nama,
                        'jenis_kelamin' => $jenis_kelamin,
                        'alamat' => $alamat,
                        'telepon' => $telepon,
                        'tgl_lahir' => $tgl_lahir,
                        'kelas' => $kelas
                );

                $where = array(
                        'nisn'=> $nisn
                );

                $this->m_siswa->update_data($where,$data,'siswa');
                redirect('siswa/index');
        }

        public function detail($nisn)
        {
                $this->load->model('m_siswa');
                $detail = $this->m_siswa->detail_data($nisn);
                $data['detail'] = $detail;
                $this->load->view('templates/public/head');
                $this->load->view('templates/public/header');
                $this->load->view('templates/public/sidebar');
                $this->load->view('templates/siswa/detail', $data);
                $this->load->view('templates/public/footer');
        }

        
}
?>