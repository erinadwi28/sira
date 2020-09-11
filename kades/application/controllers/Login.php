<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_kepala_desa', 'm_kepala_desa');
	}

	public function index()
    {
        
        if ($this->session->userdata('level_user')) {
            redirect('kades');
		}
		
		$this->load->view('login');
	}

	public function aksi_login()
    {
        $nik = $this->input->post('nik');
		$kata_sandi = $this->input->post('kata_sandi');
		$level_user = $this->input->post('level_user');
		
		$kades = $this->m_kepala_desa->cek_nik($nik);
		
        if ($kades) {
            //kades ada
            if ($kata_sandi === $kades['kata_sandi']) {
                //kata sandi benar

                $data = [
                    'nik' => $kades['nik'],
					'id_kades' => $kades['id_kades'],
					'level_user' => $kades['level_user'],
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
            $this->session->set_flashdata('error', '<b>NIK</b> salah');
			redirect('login');
        }
    }

    public function logout()
    {
        //untuk membersihkan session dan mengembalikannya ke halaman login
        $this->session->unset_userdata('nik');

        $this->session->set_flashdata('success', 'Berhasil <b>Logout</b>');
			redirect('login');
    }
	
}
