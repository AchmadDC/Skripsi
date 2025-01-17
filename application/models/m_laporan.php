<?php
class m_laporan extends CI_Model{
    function tampil_data(){
        return $query=$this->db->query("SELECT * FROM laporan ORDER BY id_laporan ASC");
    }
    function tampil_data_pegawai(){
        return $query=$this->db->query("SELECT * FROM pegawai ORDER BY no_pegawai ASC");
    }
    function tampil_data_program(){
        return $query=$this->db->query("SELECT * FROM program ORDER BY id_program ASC");
    }  
    function tampil_data_kriteria(){
        return $query=$this->db->query("SELECT * FROM kriteria_penilaian ORDER BY id_kriteria ASC");
    }
    
    function nomor_otomatis(){
            $q = $this->db->query("SELECT right(id_laporan,2) as nomor FROM
            laporan ORDER BY id_laporan DESC");
        if ($q->num_rows()<>0){
            $nomor = intval($q->row()->nomor)+1;
        }else{
            $nomor = 1;
        }
            $ambil_nomor = str_pad($nomor, 2, "0", STR_PAD_LEFT);
            $nomor_fix = "LP".$ambil_nomor;
        return $nomor_fix;
    }
    function insert_data(){
        $data=array('id_laporan'=>$this->nomor_otomatis(),
        'nama_pegawai'=>$this->input->post('nama_pegawai'),
        'nama_program'=>$this->input->post('nama_program'),
        'p1_tahunan'=>$this->input->post('p1_tahunan'),
        'p1_bulanan'=>$this->input->post('p1_bulanan'),
        'p2_lap_tahun'=>$this->input->post('p2_lap_tahun'),
        'p2_lap_bulan'=>$this->input->post('p2_lap_bulan'),
        'p2_kak'=>$this->input->post('p2_kak'),
        'p2_sop'=>$this->input->post('p2_sop'),
        'p2_spj'=>$this->input->post('p2_spj'),
        'p2_buku_visum'=>$this->input->post('p2_buku_visum'),
        'p2_cakupan'=>$this->input->post('p2_cakupan'),
        'p3_servis'=>$this->input->post('p3_servis'),
        'p3_inovatif'=>$this->input->post('p3_inovatif'),
        'p3_profesional'=>$this->input->post('p3_profesional'),
        'skorsing'=>$this->input->post('skorsing'));
        $this->db->insert('laporan',$data);
    }
    function update_data(){
        $data=array('nama_pegawai'=>$this->input->post('nama_pegawai'),
        'nama_program'=>$this->input->post('nama_program'),
        'p1_tahunan'=>$this->input->post('p1_tahunan'),
        'p1_bulanan'=>$this->input->post('p1_bulanan'),
        'p2_lap_tahun'=>$this->input->post('p2_lap_tahun'),
        'p2_lap_bulan'=>$this->input->post('p2_lap_bulan'),
        'p2_kak'=>$this->input->post('p2_kak'),
        'p2_sop'=>$this->input->post('p2_sop'),
        'p2_spj'=>$this->input->post('p2_spj'),
        'p2_buku_visum'=>$this->input->post('p2_buku_visum'),
        'p2_cakupan'=>$this->input->post('p2_cakupan'),
        'p3_servis'=>$this->input->post('p3_servis'),
        'p3_inovatif'=>$this->input->post('p3_inovatif'),
        'p3_profesional'=>$this->input->post('p3_profesional'),
        'skorsing'=>$this->input->post('skorsing'));
        $this->db->where('nama_pegawai', $this->input->post('nama_pegawai'));
        $this->db->update('laporan',$data);
    }
    function delete_data($id_laporan){
        $this->db->where('id_laporan',$id_laporan);
        $this->db->delete('laporan');
    }
}