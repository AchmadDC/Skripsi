<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pegawai extends CI_Model{
    function tampil_data(){
        return $query=$this->db->query("SELECT * FROM pegawai ORDER BY no_pegawai ASC");
    }
    function tampil_data_program(){
        return $query=$this->db->query("SELECT * FROM program ORDER BY id_program ASC");
    }
    
    function insert_data(){
        $data=array('no_pegawai'=>$this->input->post('no_pegawai'),
        'nama_pegawai'=>$this->input->post('nama_pegawai'),
        'nama_program'=>$this->input->post('nama_program'),
        'alamat'=>$this->input->post('alamat'),
        'jenis_kelamin'=>$this->input->post('jenis_kelamin'));
        $this->db->insert('pegawai',$data);
    }
    function update_data(){
        $data=array('no_pegawai'=>$this->input->post('no_pegawai'),
        'nama_pegawai'=>$this->input->post('nama_pegawai'),
        'alamat'=>$this->input->post('alamat'),
        'nama_program'=>$this->input->post('nama_program'),
        'jenis_kelamin'=>$this->input->post('jenis_kelamin'));
        $this->db->where('no_pegawai', $this->input->post('no_pegawai'));
        $this->db->update('pegawai',$data);
    }
    function delete_data($no_pegawai){
        $this->db->where('no_pegawai',$no_pegawai);
        $this->db->delete('pegawai');
    }
}