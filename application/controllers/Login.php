<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('M_warga', 'm_warga');
	}
	public function index()
    {
        $this->form_validation->set_rules('nik','nik');
        
        if ($this->session->userdata('nik')) {
            redirect('warga');
		}
		
		$this->load->view('login');
	}

	public function aksi_login()
    {
        $nik = $this->input->post('nik');
		$kata_sandi = $this->input->post('kata_sandi');
		
		$warga = $this->m_warga->cek_nik($nik);
		
        if ($warga) {
            //admin ada
            if ($kata_sandi === $warga['kata_sandi']) {
                //kata sandi benar

                $data = [
                    'nik' => $warga['nik'],
                    'id_warga' => $warga['id_warga'],
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
