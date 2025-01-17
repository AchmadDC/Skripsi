<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function index()
            {
                $data['css_js']=$this->load->view('v_css_js','',true);
		$this->load->view('v_login',$data);
            }
            
           
    function proses() {
    if (isset($_POST['btn_login'])) {
        $id_user = $this->input->post('id_user', TRUE); // TRUE untuk mengaktifkan xss_clean
        $password = $this->input->post('password', TRUE); // TRUE untuk mengaktifkan xss_clean

        // Validasi dasar
        if (empty(trim($id_user)) || empty(trim($password))) {
            $this->session->set_flashdata('info', '<div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="icon-remove"></i>
                </button>
                <strong>
                    <i class="icon-remove"></i>
                    Mohon Maaf
                </strong>
                Username dan/atau Password tidak boleh kosong!.
                <br>
            </div>');
            redirect('login');
            return;
        }

        $this->load->model('m_user');
        $proses = $this->m_user->cek_login($id_user, $password);

        if ($proses->num_rows() > 0) {
            $user_data = $proses->row();
            if ($user_data->id_user == $id_user && $user_data->password == $password) {
                $data['status_login'] = "True";
                $data['id_user'] = $user_data->id_user;
                $data['nama'] = $user_data->nama;
                $data['role_user'] = $user_data->role_user;
                $data['password'] = $user_data->password;

                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('info', '<div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="icon-remove"></i>
                    </button>
                    <strong>
                        <i class="icon-remove"></i>
                        Mohon Maaf
                    </strong>
                    Username dan/atau Password tidak tepat!!.
                    <br>
                </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="icon-remove"></i>
                </button>
                <strong>
                    <i class="icon-remove"></i>
                    Mohon Maaf
                </strong>
                Username dan/atau Password tidak tepat!!.
                <br>
            </div>');
            redirect('login');
        }
    }
}


            
            function logout(){
                $this->session->sess_destroy();
                redirect('login');
            }
}

        