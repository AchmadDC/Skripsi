<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {
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
                
                $this->load->model('m_pegawai');
                $data['data_pegawai']=$this->m_pegawai->tampil_data()->result();
                $data['data_program']=$this->m_pegawai->tampil_data_program();
		$this->load->view('v_pegawai',$data);
            }else{
                redirect('login');
            }
        }
        function simpan(){
            $cek = $this->session->userdata('status_login');
            if(!empty($cek)){
                $this->load->model('m_pegawai');
                $this->m_pegawai->insert_data();
            redirect('pegawai');
            }else{
            redirect('login');
            }
        }
        function ubah(){
            $cek = $this->session->userdata('status_login');
            if(!empty($cek)){
            $this->load->model('m_pegawai');
            $this->m_pegawai->update_data();
            redirect('pegawai');
            }else{
            redirect('login');
            }
        }
        function hapus(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_pegawai');
            $no_pegawai = $this->uri->segment(3);
            $this->m_pegawai->delete_data($no_pegawai);
            redirect('pegawai');
        }else{
            redirect('login');
            }

        }
        
        function cetak(){
    $cek = $this->session->userdata('status_login');
    if(!empty($cek)){
        $this->load->library('pdf');
        $this->load->model('m_pegawai');
        $pdf = new FPDF('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetTitle("CETAK DAFTAR PEGAWAI");
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(260,7,"DAFTAR PEGAWAI PUSKESMAS CIMALAKA",0,1,'C');
        $pdf->Cell(2,7,'',0,1);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(0);
        $fill=true;
        $pdf->SetFont('Arial','B',10);
        
        // Lebar kolom
        $pdf->Cell(10,10,'NO',1,0,'C',$fill); // No column
        $pdf->Cell(30,10,'NIP',1,0,'C',$fill); // Added no_pegawai column
        $pdf->Cell(60,10,'NAMA PEGAWAI',1,0,'C',$fill);
        $pdf->Cell(90,10,'NAMA PROGRAM',1,0,'C',$fill);
        $pdf->Cell(60,10,'ALAMAT',1,0,'C',$fill); // Added alamat column
        $pdf->Cell(30,10,'JENIS KELAMIN',1,1,'C',$fill); // Added jenis_kelamin column
        
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetTextColor(0);
        $fill2=false;
        $data = $this->m_pegawai->tampil_data()->result();
        $no=1;
        foreach ($data as $row){
            $pdf->Cell(10,10,$no,1,0,'C',$fill2); // No data
            $pdf->Cell(30,10,$row->no_pegawai,1,0,'C',$fill2); // Added no_pegawai data
            $pdf->Cell(60,10,$row->nama_pegawai,1,0,'L',$fill2);
            $pdf->Cell(90,10,$row->nama_program,1,0,'L',$fill2);
            $pdf->Cell(60,10,$row->alamat,1,0,'L',$fill2); // Added alamat data
            $pdf->Cell(30,10,$row->jenis_kelamin,1,1,'C',$fill2); // Added jenis_kelamin data
            $fill2=!$fill2;
            $no++;
        }
        $pdf->Output();
    }else{
        redirect('login');
    }
}


}
