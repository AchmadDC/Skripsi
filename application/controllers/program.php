<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class program extends CI_Controller {
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
                
                $this->load->model('m_program');
                $data['data_program']=$this->m_program->tampil_data()->result();
                $data['nomor_otomatis']=$this->m_program->nomor_otomatis();
		$this->load->view('v_program',$data);
            }else{
                redirect('login');
                
            }
        }
                function simpan(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_program');
            $this->m_program->insert_data();
            redirect('program');
        }else{
            redirect('login');
            }
        }
        function ubah(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_program');
            $this->m_program->update_data();
            redirect('program');
        }else{
            redirect('login');
            }
        }
        function hapus(){
            $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $this->load->model('m_program');
            $id_program = $this->uri->segment(3);
            $this->m_program->delete_data($id_program);
            redirect('program');
        }else{
            redirect('login');
            }
        }
        public function search(){
        $cek = $this->session->userdata('status_login');
        if(!empty($cek)){
            $query = $this->input->get('query');
            $this->load->model('m_program');
            $data['data_program'] = $this->m_program->search_data($query);
            
            $data['id_user'] = $this->session->userdata('id_user');
            $data['nama'] = $this->session->userdata('nama');
            $data['role_user'] = $this->session->userdata('role_user');
            $data['password'] = $this->session->userdata('password');
            $data['css_js'] = $this->load->view('v_css_js', $data, true);
            $data['navbar'] = $this->load->view('v_navbar', $data, true);
            $data['sidebar'] = $this->load->view('v_sidebar', $data, true);

            $this->load->view('v_program', $data);
        } else {
            redirect('login');
        }
    }
}
