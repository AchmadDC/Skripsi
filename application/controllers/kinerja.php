<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_kinerja'); 
    }

    public function index() {
        // Cek status login dari session
        $cek = $this->session->userdata('status_login');
        if (!empty($cek)) {
            // Ambil data dari session untuk dikirim ke view
            $data['id_user'] = $this->session->userdata('id_user');
            $data['nama'] = $this->session->userdata('nama');
            $data['role_user'] = $this->session->userdata('role_user');
            $data['password'] = $this->session->userdata('password');

            // Load view dengan data yang telah disiapkan
            $data['css_js'] = $this->load->view('v_css_js', NULL, true);
            $data['navbar'] = $this->load->view('v_navbar', $data, true);
            $data['sidebar'] = $this->load->view('v_sidebar', $data, true);

            $data['tahun'] = $this->m_kinerja->gettahun();
            $data['program'] = $this->m_kinerja->getprogram();
            $this->load->view('v_kinerja', $data);
        } else {
            redirect('login'); // Redirect jika belum login
        }
    }

    public function filter() {
    $nilaifilter = $this->input->post('nilaifilter');
    $tanggalawal = $this->input->post('tanggalawal');
    $tanggalakhir = $this->input->post('tanggalakhir');
    $bulanawal = $this->input->post('bulanawal');
    $bulanakhir = $this->input->post('bulanakhir');
    $tahun1 = $this->input->post('tahun1');
    $tahun2 = $this->input->post('tahun2');
    
    // Pastikan program diinisialisasi
    $program = $this->input->post('program'); // Atau dari sumber lain

    if ($nilaifilter == 1) {
    // Mendefinisikan tittle
        $data['tittle'] = "<b>PENILAIAN KINERJA PEGAWAI</b>";

        // Menambahkan baris baru di bawah tittle
        $data['tittle'] .= "<b><br>UPTD PUSKESMAS RAWAT INAP CIMALAKA</b>";
    if ($program != null) {
        $data['subtittle'] = "Program: " . $program . " | Dari Tanggal: " . $tanggalawal . ' Sampai Tanggal: ' . $tanggalakhir;
    } else {
        $data['subtittle'] = "Dari Tanggal: " . $tanggalawal . ' Sampai Tanggal: ' . $tanggalakhir;
    }

    $data['datafilter'] = $this->m_kinerja->filterbytanggal($tanggalawal, $tanggalakhir, $program);
}
 elseif ($nilaifilter == 2) {
        $data['tittle'] = "<b>PENILAIAN KINERJA PEGAWAI</b>";

        // Menambahkan baris baru di bawah tittle
        $data['tittle'] .= "<b><br>UPTD PUSKESMAS RAWAT INAP CIMALAKA</b>";
        if ($program != null) {
            $data['subtittle'] = "Program: " . $program . " | Dari Bulan: " . $bulanawal . ' Sampai Bulan: ' . $bulanakhir . ' Tahun: ' . $tahun1;
        } else {
            $data['subtittle'] = "Dari Bulan: " . $bulanawal . ' Sampai Bulan: ' . $bulanakhir . ' Tahun: ' . $tahun1;
        }

        $data['datafilter'] = $this->m_kinerja->filterbybulan($tahun1, $bulanawal, $bulanakhir);
    } elseif ($nilaifilter == 3) {
        $data['tittle'] = "<b>PENILAIAN KINERJA PEGAWAI</b>";

        // Menambahkan baris baru di bawah tittle
        $data['tittle'] .= "<b><br>UPTD PUSKESMAS RAWAT INAP CIMALAKA</b>";
        if ($program != null) {
            $data['subtittle'] = "Program: " . $program . " | Tahun: " . $tahun2;
        } else {
            $data['subtittle'] = "Tahun: " . $tahun2;
        }

        $data['datafilter'] = $this->m_kinerja->filterbytahun($tahun2);
    }

    // Muat tampilan v_print dengan data hasil filter
    $this->load->view('v_print', $data);
}

}