<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('role_kades')) {
			redirect('login');
		}
		
	}
	
	public function index()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/dashboard_kades');
        $this->load->view('footer');
        
        }

        public function profil_kades()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/profil_kades');
        $this->load->view('footer');
        
        }

        public function ubah_profil()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/ubah_profil');
        $this->load->view('footer');
        
        }

        public function list_data_admin()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/list_data_admin');
        $this->load->view('footer');
        
        }

        public function detail_data_admin()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/detail_data_admin');
        $this->load->view('footer');
        
        }

        public function form_tambah_admin()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/form_tambah_admin');
        $this->load->view('footer');
        
        }
        
        
        public function list_data_rt()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/list_data_rt');
        $this->load->view('footer');
        
        }

        public function detail_data_rt()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/detail_data_rt');
        $this->load->view('footer');
        
        }
        
        public function list_data_warga()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/list_data_warga');
        $this->load->view('footer');
        
        }

        public function detail_data_warga()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/detail_data_warga');
        $this->load->view('footer');
        
        }
        
        public function list_lap_permohonan()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/list_lap_permohonan');
        $this->load->view('footer');
        
        }
        
        public function arsip_surat_masuk()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/arsip_surat_masuk');
        $this->load->view('footer');
        
        }
        
        public function arsip_surat_keluar()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/arsip_surat_keluar');
        $this->load->view('footer');
        
	}

	 // tampil form ubah profile
	public function form_ubah_profile(){
		$this->load->model('m_kepala_desa','m_kepala_desa');
		$data_profile =$this->m_kepala_desa->get_profile($id_kades);

		$result = array(
			'data_detail'=>$data_profile,
			'page'=>'kades/profil_kades',
		);
		$this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view($result);
        $this->load->view('footer');
	}

	// aksi ubah profile
	public function aksi_ubah_profile(){
		$id_kades = $this->input->post('id_kades');

		$data = array(
						'nik' => $this->input->post('nik'),
						'nama' => $this->input->post('nama'),
                        'rt' => $this->input->post('rt'),
                        'kelurahan' => $this->input->post('kelurahan'),
                        'kecamatan' => $this->input->post('kecamatan'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'status_perkawinan' => $this->input->post('status_perkawinan'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'golongan_darah' => $this->input->post('golongan_darah'),
                        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                        'kata_sandi' => $this->input->post('kata_sandi'),
                        'foto_kades' => $this->input->post('foto_kades'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'foto_ktp' => $this->input->post('foto_ktp'),
                        'foto_kk' => $this->input->post('foto_kk'),
                        'foto_ttd' => $this->input->post('foto_ttd'),
                        'status_kepegawaian' => $this->input->post('status_kepegawaian'),
				);
		$this->load-model('M_kepala_desa','m_kepala_desa');
		$this->m_kepala_desa->aksi_ubah_profile($id_kades,$data);

		if($this->m_kepala_desa->aksi_ubah_profile($data)){
			$this->session->set_flashdata('success', 'Data Kepala Desa berhasil ditambahkan');
			echo "sukses";
		} else {
			$this->session->set_flashdata('error', 'Data Kepala Desa gagal ditambahkan');
			echo "gagal";
		}
	}
}