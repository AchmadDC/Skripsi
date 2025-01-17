<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_program extends CI_Model{
    function cek_login($id_user,$password) {
        return $query = $this->db->query("select * from user where id_user="
                . "'". $id_user."' and password='". $password."'");
    }
    function tampil_data(){
        return $query=$this->db->query("SELECT * FROM program ORDER BY id_program ASC");
    }
    
    function nomor_otomatis(){
            $q = $this->db->query("SELECT right(id_program,2) as nomor FROM
            program ORDER BY id_program DESC");
        if ($q->num_rows()<>0){
            $nomor = intval($q->row()->nomor)+1;
        }else{
            $nomor = 1;
        }
            $ambil_nomor = str_pad($nomor, 2, "0", STR_PAD_LEFT);
            $nomor_fix = "PRGM".$ambil_nomor;
        return $nomor_fix;
    }
    function insert_data(){
        $data=array('id_program'=>$this->nomor_otomatis(),
        'nama_program'=>$this->input->post('nama_program'));
        $this->db->insert('program',$data);
        }
    function update_data(){
        $data=array('nama_program'=>$this->input->post('nama_program'));
        $this->db->where('id_program', $this->input->post('id_program'));
        $this->db->update('program',$data);
        }
    function delete_data($id_program){
        $this->db->where('id_program',$id_program);
        $this->db->delete('program');
        }
}