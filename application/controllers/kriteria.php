<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kriteria extends CI_Controller {
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
                
                $this->load->model('m_kriteria');
                $data['data_kriteria']=$this->m_kriteria->tampil_data()->result();
                $data['nomor_otomatis']=$this->m_kriteria->nomor_otomatis();
		$this->load->view('v_kriteria',$data);
            }else{
                redirect('login');
            }
        }
        function simpan(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_kriteria');
            $this->m_kriteria->insert_data();
            redirect('kriteria');
        }else{
            redirect('login');
            }
        }
        function ubah(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_kriteria');
            $this->m_kriteria->update_data();
            redirect('kriteria');
        }else{
            redirect('login');
            }
        }
        function hapus(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_kriteria');
            $id_kriteria = $this->uri->segment(3);
            $this->m_kriteria->delete_data($id_kriteria);
            redirect('kriteria');
        }else{
            redirect('login');
            }

        }
}
