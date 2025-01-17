<?php
class m_kinerja extends CI_Model{
    function getprogram(){
        $query = $this->db->query("SELECT DISTINCT nama_program FROM laporan ORDER BY nama_program ASC;");
        return $query->result();
    }
    
    function gettahun(){
        $query = $this->db->query("SELECT YEAR(p1_bulanan) AS tahun FROM laporan GROUP BY YEAR(p1_bulanan) ORDER BY YEAR(p1_bulanan) ASC");
        return $query->result();
    }
    
    function filterbytanggal($tanggalawal, $tanggalakhir, $program = null){
        $sql = "SELECT * FROM laporan WHERE p1_bulanan BETWEEN ? AND ?";

        if ($program != null) {
            $sql .= " AND nama_program = ?";
            $query = $this->db->query($sql, array($tanggalawal, $tanggalakhir, $program));
        } else {
            $query = $this->db->query($sql, array($tanggalawal, $tanggalakhir));
        }

        return $query->result();
    }

    function filterbybulan($tahun1, $bulanawal, $bulanakhir){
        $query = $this->db->query("SELECT * FROM laporan WHERE YEAR(p1_bulanan) = ? AND MONTH(p1_bulanan) BETWEEN ? AND ? ORDER BY p1_bulanan ASC", array($tahun1, $bulanawal, $bulanakhir));
        return $query->result();
    }

    function filterbytahun($tahun2){
        $query = $this->db->query("SELECT * FROM laporan WHERE YEAR(p1_bulanan) = ? ORDER BY p1_bulanan ASC", array($tahun2));
        return $query->result();
    }
}
