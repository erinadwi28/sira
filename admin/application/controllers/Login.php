<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_admin', 'm_admin');
	}

	public function index()
    {
        
        if ($this->session->userdata('role_admin')) {
            redirect('admin');
		}
		
		$this->load->view('login');
	}

	public function aksi_login()
    {
        $nik = $this->input->post('nik');
		$kata_sandi = $this->input->post('kata_sandi');
        
		$admin = $this->m_admin->cek_nik($nik);
		
        if ($admin) {
            //admin ada
            if ($kata_sandi === $admin['kata_sandi']) {
                //kata sandi benar

                $data = [
                    'nik' => $admin['nik'],
                    'id_admin' => $admin['id_admin'],
                    'role_admin' => $admin['role_admin'],
                ];

                $this->session->set_userdata($data);

                redirect('admin');
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
        $this->session->unset_userdata('role_admin');

        $this->session->set_flashdata('success', 'Berhasil <b>Logout</b>');
			redirect('login');
    }
	
}