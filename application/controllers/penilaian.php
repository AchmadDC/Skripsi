<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penilaian extends CI_Controller {
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
                
                $this->load->model('m_penilaian');
                $data['data_penilaian']=$this->m_penilaian->tampil_data()->result();
                $data['nomor_otomatis']=$this->m_penilaian->nomor_otomatis();
		$this->load->view('v_penilaian',$data);
            }else{
                redirect('login');
            }
        }
        function simpan(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_penilaian');
            $this->m_penilaian->insert_data();
            redirect('penilaian');
        }else{
            redirect('login');
            }
        }
        function ubah(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_penilaian');
            $this->m_penilaian->update_data();
            redirect('penilaian');
        }else{
            redirect('login');
            }
        }
        function hapus(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_penilaian');
            $id_penilaian = $this->uri->segment(3);
            $this->m_penilaian->delete_data($id_penilaian);
            redirect('penilaian');
        }else{
            redirect('login');
            }

        }
}
