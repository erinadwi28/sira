<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_rt', 'm_rt');
	}

	public function index()
    {
        
        if ($this->session->userdata('role_rt')) {
            redirect('rt');
		}
		
		$this->load->view('login');
	}

	public function aksi_login()
    {
        $nik = $this->input->post('nik');
        $kata_sandi = $this->input->post('kata_sandi');
        $kata_sandi_hash = sha1($kata_sandi);
        $status_delete = $this->input->post('status_delete');
		$rt = $this->m_rt->cek_nik($nik, $status_delete);
		
        if ($rt) {
            //rt ada
            if ($kata_sandi_hash === $rt['kata_sandi']) {
                //kata sandi benar

                $data = [
                    'nik' => $rt['nik'],
					'id_rt' => $rt['id_rt'],
					'role_rt' => $rt['role_rt'],
                ];

                $this->session->set_userdata($data);

                redirect('rt');
            } else {
                //kata sandi salah
                $this->session->set_flashdata('error', '<b>Kata Sandi</b> salah');
				redirect('login');
            }
        } else {
            //gagal login
            $this->session->set_flashdata('error', '<b>NIK</b> salah');
			redirect('login');
        }
    }

    public function logout()
    {
        //untuk membersihkan session dan mengembalikannya ke halaman login
        $this->session->unset_userdata('role_rt');

        $this->session->set_flashdata('success', 'Berhasil <b>Logout</b>');
			redirect('login');
    }
	
}
