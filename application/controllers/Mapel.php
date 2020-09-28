<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function index()
	{
        $data['mapel'] = $this->m_mapel->tampil_data()->
        result();
        $this->load->view('templates/public/head');
        $this->load->view('templates/public/header');
        $this->load->view('templates/public/sidebar');
        $this->load->view('templates/mapel/mapel', $data);
        $this->load->view('templates/public/footer');
    }


    public function tambah_data()
    {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $guru= $this->input->post('guru');
            $ruang = $this->input->post('ruang');
            

            $data = array(
                    'id' => $id,
                    'nama' => $nama,
                    'guru' => $guru,
                    'ruang' => $ruang
            );

            $this->m_mapel->input_data($data, 'mapel');
            redirect('mapel/index');
    }

    public function hapus_data($id)
    {
            $where = array('id'=>$id);
            $this->m_mapel->hapus_data($where, 'mapel');
            redirect('mapel/index');
    }
    
    public function edit($id)
    {
            $where = array('id'=>$id);
            $data['mapel'] = $this->m_mapel->edit_data($where,'mapel')->result();
            $this->load->view('templates/public/head');
            $this->load->view('templates/public/header');
            $this->load->view('templates/public/sidebar');
            $this->load->view('templates/mapel/edit', $data);
            $this->load->view('templates/public/footer');
    }
    
    public function update()
    {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $guru = $this->input->post('guru');
            $ruang = $this->input->post('ruang');


            $data = array(
                    'id' => $id,
                    'nama' => $nama,
                    'guru' => $guru,
                    'ruang' => $ruang
            );

            $where = array(
                    'id'=> $id
            );

            $this->m_mapel->update_data($where,$data,'mapel');
            redirect('mapel/index');
    }
        
}
?>