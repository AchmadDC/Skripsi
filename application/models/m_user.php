<?php
class m_user extends CI_Model{
    function cek_login($id_user,$password) {
        return $query = $this->db->query("select * from user where id_user="
                . "'". $id_user."' and password='". $password."'");
    }
    function tampil_data(){
        return $query=$this->db->query("SELECT * FROM user ORDER BY id_user ASC");
    }
    
    function nomor_otomatis(){
            $q = $this->db->query("SELECT right(id_user,2) as nomor FROM
            user ORDER BY id_user DESC");
        if ($q->num_rows()<>0){
            $nomor = intval($q->row()->nomor)+1;
        }else{
            $nomor = 1;
        }
            $ambil_nomor = str_pad($nomor, 2, "0", STR_PAD_LEFT);
            $nomor_fix = "ADM".$ambil_nomor;
        return $nomor_fix;
    }
    function insert_data(){
        $data=array('id_user'=>$this->nomor_otomatis(),
        'nama'=>$this->input->post('nama'),
        'role_user'=>$this->input->post('role_user'),
        'password'=>$this->input->post('password'));
        $this->db->insert('user',$data);
        }
    function update_data(){
        $data=array('nama'=>$this->input->post('nama'),
        'role_user'=>$this->input->post('role_user'),
        'password'=>$this->input->post('password'));
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user',$data);
        }
    function delete_data($id_user){
        $this->db->where('id_user',$id_user);
        $this->db->delete('user');
        }
}