<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_kriteria extends CI_Model{
    function cek_login($id_user,$password) {
        return $query = $this->db->query("select * from user where id_user="
                . "'". $id_user."' and password='". $password."'");
    }
    function tampil_data(){
        return $query=$this->db->query("SELECT * FROM kriteria_penilaian ORDER BY id_kriteria ASC");
    }
    
    function nomor_otomatis(){
            $q = $this->db->query("SELECT right(id_kriteria,2) as nomor FROM
            kriteria_penilaian ORDER BY id_kriteria DESC");
        if ($q->num_rows()<>0){
            $nomor = intval($q->row()->nomor)+1;
        }else{
            $nomor = 1;
        }
            $ambil_nomor = str_pad($nomor, 2, "0", STR_PAD_LEFT);
            $nomor_fix = "KP".$ambil_nomor;
        return $nomor_fix;
    }
    function insert_data(){
        $data=array('id_kriteria'=>$this->nomor_otomatis(),
        'skorsing'=>$this->input->post('skorsing'),
        'tata_nilai'=>$this->input->post('tata_nilai'),
        'keterangan'=>$this->input->post('keterangan'));
        $this->db->insert('kriteria_penilaian',$data);
        }
    function update_data(){
        $data=array('skorsing'=>$this->input->post('skorsing'),
        'tata_nilai'=>$this->input->post('tata_nilai'),
        'keterangan'=>$this->input->post('keterangan'));
        $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
        $this->db->update('kriteria_penilaian',$data);
        }
    function delete_data($id_kriteria){
        $this->db->where('id_kriteria',$id_kriteria);
        $this->db->delete('kriteria_penilaian');
        }
}