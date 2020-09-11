<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();

		if ($this->session->login) {
			if($this->session->login['level_user']==='Admin'){
				redirect('Admin');
			} 
			elseif ($this->session->login['level_user']==='warga'){
				redirect('Warga');
			} 
			elseif ($this->session->login['level_user']==='rt'){
				redirect('Rt');
			} 
			elseif ($this->session->login['level_user']==='kepala_desa'){
				redirect('Kades');
			} 	
		}else {
			$this->load->view('login');
		}

		//if($this->session->login) redirect('Admin');
		$this->load->model('M_admin', 'm_admin');
		$this->load->model('M_warga', 'm_warga');
		$this->load->model('M_rt', 'm_rt');
		$this->load->model('M_kepala_desa', 'm_kepala_desa');
	}

	public function index() {
		//$this->load->view('login');
		
	}

	public function proses_login() {
		if($this->input->post('role')==='admin') $this->_proses_login_admin($this->input->post('nik'));
		elseif($this->input->post('role')==='warga') $this->_proses_login_warga($this->input->post('nik'));
		elseif($this->input->post('role')==='rt') $this->_proses_login_rt($this->input->post('nik'));
		elseif($this->input->post('role')==='kepala_desa') $this->_proses_login_kepala_desa($this->input->post('nik'));
		else {
			$this->session->set_flashdata('error', 'Pilih <b>login sebagai</b> terlebih dahulu');
			echo "gagal";
		}
	}

	protected function _proses_login_admin($nik) {
		$get_admin=$this->m_admin->cek_nik($nik);

		if($get_admin) {
			if($get_admin->kata_sandi==$this->input->post('kata_sandi')) {
				$session=[ 
				'id_admin'=> $get_admin->id_admin,
				'nik'=> $get_admin->nik,
				'level_user' => $get_admin->level_user
				];
			
				redirect('Admin');
			$this->session->set_userdata('login', $session);
			$this->session->set_flashdata('success', 'Login berhasil');
			echo "sukses";
			} else {
				$this->session->set_flashdata('error', 'Kata sandi salah');
				echo "gagal";
			}
		} else {
			$this->session->set_flashdata('error', 'NIK salah');
			echo "gagal";
		}
	}

	protected function _proses_login_warga($nik) {
		$get_warga=$this->m_warga->cek_nik($nik);

		if($get_warga) {
			if($get_warga->kata_sandi==$this->input->post('kata_sandi')) {
				$session=[ 
				'id_warga'=> $get_warga->id_warga,
				'nik'=> $get_warga->nik,
				'level_user' => $get_admin->level_user
				];
redirect('Warga');
			$this->session->set_userdata('login', $session);
			$this->session->set_flashdata('success', 'Login berhasil');
			echo "sukses";
			} else {
				$this->session->set_flashdata('error', 'Kata sandi Salah');
				echo "gagal";
			}
		} else {
			$this->session->set_flashdata('error', 'NIK salah');
			echo "gagal";
		}
	}

	protected function _proses_login_rt($nik) {
		$get_rt=$this->m_rt->cek_nik($nik);

		if($get_rt) {
			if($get_rt->kata_sandi==$this->input->post('kata_sandi')) {
				$session=[ 
				'id_rt'=> $get_rt->id_rt,
				'nik'=> $get_rt->nik,
				'level_user' => $get_admin->level_user
				];
redirect('rt');
			$this->session->set_userdata('login', $session);
			$this->session->set_flashdata('success', 'Login berhasil');
			echo "sukses";
			} else {
				$this->session->set_flashdata('error', 'Kata sandi salah');
				echo "gagal";
			}
		} else {
			$this->session->set_flashdata('error', 'NIK salah');
			echo "gagal";
		}
	}

	protected function _proses_login_kepala_desa($nik) {
		$get_kepala_desa=$this->m_kepala_desa->cek_nik($nik);

		if($get_kepala_desa) {
			if($get_kepala_desa->kata_sandi==$this->input->post('kata_sandi')) {
				$session=[ 
				'id_kades'=> $get_kepala_desa->id_kades,
				'nik'=> $get_kepala_desa->nik,
				'level_user' => $get_admin->level_user
				];
redirect('kades');
			$this->session->set_userdata('login', $session);
			$this->session->set_flashdata('success', 'Login berhasil');
			echo "sukses";
			} else {
				$this->session->set_flashdata('error', 'Kata sandi salah');
				echo "gagal";
			}
		} else {
			$this->session->set_flashdata('error', 'NIK salah');
			echo "gagal";
		}
	}
}
