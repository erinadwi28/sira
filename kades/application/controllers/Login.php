<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_kades', 'm_kades');
	}

	public function index()
    {
        
        if ($this->session->userdata('role_kades')) {
            redirect('kades');
		}
		
		$this->load->view('login');
	}

	public function aksi_login()
    {
        $nik = $this->input->post('nik');
		$kata_sandi = $this->input->post('kata_sandi');
        $kata_sandi_hash = sha1($kata_sandi);
        $status_delete = $this->input->post('status_delete');


		$kades = $this->m_kades->cek_nik($nik, $status_delete);
		
        if ($kades) {
            //kades ada
            if ($kata_sandi_hash === $kades['kata_sandi']) {
                //kata sandi benar

                $data = [
                    'nik' => $kades['nik'],
					'id_kades' => $kades['id_kades'],
					'role_kades' => $kades['role_kades'],
                ];

                $this->session->set_userdata($data);

                redirect('kades');
            } else {
                //kata sandi salah
                $this->session->set_flashdata('error', '<b>Kata Sandi</b> salah');
				redirect('login');
            }
        } else {
            //gagal login
            $this->session->set_flashdata('error', '<b>NIK</b> tidak terdaftar sebagai Kepala Desa');
			redirect('login');
        }
    }

    public function logout()
    {
        //untuk membersihkan session dan mengembalikannya ke halaman login
        $this->session->unset_userdata('role_kades');

        $this->session->set_flashdata('success', 'Berhasil <b>Logout</b>');
			redirect('login');
    }
	
}
