<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_penilaian extends CI_Model{
    function cek_login($id_user,$password) {
        return $query = $this->db->query("select * from user where id_user="
                . "'". $id_user."' and password='". $password."'");
    }
    function tampil_data(){
        return $query=$this->db->query("SELECT * FROM penilaian ORDER BY id_penilaian ASC");
    }
    
    function nomor_otomatis(){
            $q = $this->db->query("SELECT right(id_penilaian,2) as nomor FROM
            penilaian ORDER BY id_penilaian DESC");
        if ($q->num_rows()<>0){
            $nomor = intval($q->row()->nomor)+1;
        }else{
            $nomor = 1;
        }
            $ambil_nomor = str_pad($nomor, 2, "0", STR_PAD_LEFT);
            $nomor_fix = "P".$ambil_nomor;
        return $nomor_fix;
    }
    function insert_data(){
        $data=array('id_penilaian'=>$this->nomor_otomatis(),
        'acuan'=>$this->input->post('acuan'));
        $this->db->insert('penilaian',$data);
        }
    function update_data(){
        $data=array('acuan'=>$this->input->post('acuan'));
        $this->db->where('id_penilaian', $this->input->post('id_penilaian'));
        $this->db->update('penilaian',$data);
        }
    function delete_data($id_penilaian){
        $this->db->where('id_penilaian',$id_penilaian);
        $this->db->delete('penilaian');
        }
}