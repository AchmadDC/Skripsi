<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function index(){
            $cek = $this->session->userdata('status_login');
            if(!empty($cek)){
                $data['id_user']=$this->session->userdata('id_user');
                $data['nama']=$this->session->userdata('nama');
                $data['password']=$this->session->userdata('password');
                $data['role_user']=$this->session->userdata('role_user');
            
                $data['css_js']=$this->load->view('v_css_js',$data,true);
                $data['navbar']=$this->load->view('v_navbar',$data,true);
                $data['sidebar']=$this->load->view('v_sidebar',$data,true);
		$this->load->view('v_dashboard',$data);
            }else{
                redirect('login');
            }
        }
 }
