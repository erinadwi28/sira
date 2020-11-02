<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_warga', 'm_warga');
	}
	public function index()
    {
        
        if ($this->session->userdata('role_warga')) {
            redirect('warga');
		}

		$this->load->view('login');
	}

	public function aksi_login()
    {
        $nik = $this->input->post('nik');
        $kata_sandi = $this->input->post('kata_sandi');
        $kata_sandi_hash = sha1($kata_sandi); 
        $status_delete = $this->input->post('status_delete');
		
		$warga = $this->m_warga->cek_nik($nik, $status_delete);
		
        if ($warga) {
            //admin ada
            if ($kata_sandi_hash === $warga['kata_sandi']) {
                //kata sandi benar

                $data = [
                    'nik' => $warga['nik'],
                    'nama' => $warga['nama'],
                    'id_warga' => $warga['id_warga'],
                    'rt' => $warga['rt'],
                    'role_warga' => $warga['role_warga'],
                ];

                $this->session->set_userdata($data);

                redirect('warga');
            } else {
                //kata sandi salah
                $this->session->set_flashdata('error', '<b>Kata Sandi</b> salah');
				redirect('login');
            }
        } else {
            //gagal login
            $this->session->set_flashdata('error', '<b>NIK</b> tidak terdaftar sebagai Warga');
			redirect('login');
        }
    }

    public function logout()
    {
        //untuk membersihkan session dan mengembalikannya ke halaman login
        $this->session->unset_userdata('role_warga');

        $this->session->set_flashdata('success', 'Berhasil <b>Logout</b>');
			redirect('login');
    }
}
