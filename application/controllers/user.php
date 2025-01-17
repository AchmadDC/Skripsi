<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
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
                
                $this->load->model('m_user');
                $data['data_user']=$this->m_user->tampil_data()->result();
                $data['nomor_otomatis']=$this->m_user->nomor_otomatis();
		$this->load->view('v_user',$data);
            }else{
                redirect('login');
            }
        }
        function simpan(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_user');
            $this->m_user->insert_data();
            redirect('user');
        }else{
            redirect('login');
            }
        }
        function ubah(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_user');
            $this->m_user->update_data();
            redirect('user');
        }else{
            redirect('login');
            }
        }
        function hapus(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_user');
            $id_user = $this->uri->segment(3);
            $this->m_user->delete_data($id_user);
            redirect('user');
        }else{
            redirect('login');
            }

        }
}
