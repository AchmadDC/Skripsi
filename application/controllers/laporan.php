<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {
	public function index(){
            $cek = $this->session->userdata('status_login');
            if(!empty($cek)){
                $data['id_user']=$this->session->userdata('id_user');
                $data['nama']=$this->session->userdata('nama');
                $data['role_user']=$this->session->userdata('role_user');
                $data['password']=$this->session->userdata('password');
            
                $data['css_js']=$this->load->view('v_css_js',$data,true);
                $data['navbar']=$this->load->view('v_navbar',$data,true);
                $data['sidebar']=$this->load->view('v_sidebar',$data,true);
                
                $this->load->model('m_laporan');
                $data['data_laporan']=$this->m_laporan->tampil_data()->result();
                $data['nomor_otomatis']=$this->m_laporan->nomor_otomatis();
                $data['data_pegawai']=$this->m_laporan->tampil_data_pegawai();
                $data['data_program']=$this->m_laporan->tampil_data_program();
                $data['data_kriteria']=$this->m_laporan->tampil_data_kriteria();
		$this->load->view('v_laporan',$data);
            }else{
                redirect('login');
            }
        }
        function simpan(){
            $cek = $this->session->userdata('status_login');
            if(!empty($cek)){
                $this->load->model('m_laporan');
                $this->m_laporan->insert_data();
            redirect('laporan');
            }else{
            redirect('login');
            }
        }
        function ubah(){
            $cek = $this->session->userdata('status_login');
            if(!empty($cek)){
            $this->load->model('m_laporan');
            $this->m_laporan->update_data();
            redirect('laporan');
            }else{
            redirect('login');
            }
        }
        function hapus(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_laporan');
            $id_laporan = $this->uri->segment(3);
            $this->m_laporan->delete_data($id_laporan);
            redirect('laporan');
        }else{
            redirect('login');
            }

        }
        
    
        function cetak(){
    $cek = $this->session->userdata('status_login');
    if(!empty($cek)){
        $this->load->library('pdf');
        $this->load->model('m_laporan');

        // Membuat objek PDF dengan ukuran halaman khusus (350mm x 400mm)
        $pdf = new FPDF('L','mm',array(279, 432));
        $pdf->AddPage();
        
        $pdf->SetTitle("CETAK DAFTAR PEGAWAI");
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(0,7,"LAPORAN PENILAIAN KINERJA PEGAWAI",0,1,'C');
        $pdf->Cell(0,7,'UPTD PUSKESMAS RAWAT INAP CIMALAKA',0,1,'C');
        $pdf->Cell(0,7,'',0,1);

        // Mengambil data program/unit dari model
        $program_data = $this->m_laporan->tampil_data_program()->result();
        $nama_program = !empty($program_data) ? $program_data[0]->nama_program : ''; // Asumsikan mengambil nama_program pertama
        
        // Ambil tahun dan bulan saat ini
        $tahun = date('Y');
        $bulan = date('F'); // Nama bulan dalam bahasa Inggris
        
        // Mengatur posisi dan menambahkan cell Program/Unit dengan data nama_program dan cell Tahun/Bulan sejajar
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(0,7,'PROGRAM / UNIT: ' . $nama_program,0,1,'L');
        $pdf->Cell(0,7,'Tahun: ' . $tahun . ' Bulan: ' . $bulan,0,1,'R');
        
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(0);
        $fill=true;
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10, 6, 'NO', 1, 0, 'C', true);
        $pdf->Cell(60, 6, 'NAMA', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'TAHUNAN', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'BULANAN', 1, 0, 'C', true);
        $pdf->Cell(40, 6, 'LAPORAN TAHUNAN', 1, 0, 'C', true);
        $pdf->Cell(40, 6, 'LAPORAN BULANAN', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'KAK', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'SOP', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'SPJ', 1, 0, 'C', true);
        $pdf->Cell(30, 6, 'BUKU VISUM', 1, 0, 'C', true);
        $pdf->Cell(40, 6, 'CAKUPAN PROGRAM', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'SERVISES', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'INOVATIF', 1, 0, 'C', true);
        $pdf->Cell(30, 6, 'PROFESIONAL', 1, 0, 'C', true);
        $pdf->Cell(20, 6, 'SKORING', 1, 1, 'C', true);
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(0);
        $fill=false;
        $data = $this->m_laporan->tampil_data()->result();
        $no=1;
        foreach ($data as $row){
            $pdf->Cell(10,6,$no,1,0,'C',$fill);
            $pdf->Cell(60, 6, $row->nama_pegawai, 1, 0, 'L', $fill);
            $pdf->Cell(20, 6, $row->p1_tahunan, 1, 0, 'C', $fill);
            $pdf->Cell(20, 6, $row->p1_bulanan, 1, 0, 'C', $fill);
            $pdf->Cell(40, 6, $row->p2_lap_tahun, 1, 0, 'C', $fill);
            $pdf->Cell(40, 6, $row->p2_lap_bulan, 1, 0, 'C', $fill);
            $pdf->Cell(20, 6, $row->p2_kak, 1, 0, 'C', $fill);
            $pdf->Cell(20, 6, $row->p2_sop, 1, 0, 'C', $fill);
            $pdf->Cell(20, 6, $row->p2_spj, 1, 0, 'C', $fill);
            $pdf->Cell(30, 6, $row->p2_buku_visum, 1, 0, 'C', $fill);
            $pdf->Cell(40, 6, $row->p2_cakupan, 1, 0, 'C', $fill);
            $pdf->Cell(20, 6, $row->p3_servis, 1, 0, 'C', $fill);
            $pdf->Cell(20, 6, $row->p3_inovatif, 1, 0, 'C', $fill);
            $pdf->Cell(30, 6, $row->p3_profesional, 1, 0, 'C', $fill);
            $pdf->Cell(20, 6, $row->skorsing, 1, 1, 'C', $fill);
            $fill=!$fill;
            $no++;
        }
        $pdf->Output();
    }else{
        redirect('login');
    }
}

}
