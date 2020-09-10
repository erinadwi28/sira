<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('M_admin');
        }

	public function index()
	{   
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/dashboard_admin');
                $this->load->view('footer');
        }

<<<<<<< HEAD
        // tampil list kepala desa
        public function data_kepaladesa()
	{
                $data_kepaladesa = $this->m_admin->get_data_kepaladesa();
                $result = array(
                'list_data' => $data_kepaladesa,
                'page' => 'admin/list_kepaladesa',
                );
                $this->load->view('header','admin/sidebar_admin','topbar',$result,'footer');
        }
        
        // tampil form tambah data kepala desa
        public function form_tambah_kades() 
        {
                $this->load->view('admin/tambah_kepala_desa');
        }

        // aksi tambah data kepala desa
        public function aksi_tambah_kades() 
        {
                $data = [
			'id_kades' => $this->input->post('id_kades'),
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
                        
		];

		if($this->m_admin->tambah_kades($data)){
			$this->session->set_flashdata('success', 'Data Kepala Desa berhasil ditambahkan');
			echo "sukses";
		} else {
			$this->session->set_flashdata('error', 'Data Kepala Desa gagal ditambahkan');
			echo "gagal";
		}
                
        }
}
=======
        public function list_kades_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_kades_admin');
                $this->load->view('footer');
        }

        public function form_tambah_kades_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_kades_admin');
                $this->load->view('footer');
        }

        public function detail_kades_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_kades_admin');
                $this->load->view('footer');
        }
        public function list_rt_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_rt_admin');
                $this->load->view('footer');
        }

        public function form_tambah_rt_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_rt_admin');
                $this->load->view('footer');
        }

        public function detail_rt_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_rt_admin');
                $this->load->view('footer');
        }
        
        public function list_warga_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_warga_admin');
                $this->load->view('footer');
        }

        public function form_tambah_warga_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_warga_admin');
                $this->load->view('footer');
        }

        public function detail_warga_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_warga_admin');
                $this->load->view('footer');
        }

        public function data_permohonan_surat()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/data_permohonan_surat');
                $this->load->view('footer');
        }

        public function preview_per_surat_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/preview_per_surat_admin');
                $this->load->view('footer');
        }

        public function list_surat_masuk_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_surat_masuk_admin');
                $this->load->view('footer');
        }

        public function detail_surat_masuk_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_surat_masuk_admin');
                $this->load->view('footer');
        }

        public function ubah_surat_masuk_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/ubah_surat_masuk_admin');
                $this->load->view('footer');
        }

        public function list_surat_keluar_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_surat_keluar_admin');
                $this->load->view('footer');
        }

        public function detail_surat_keluar_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_surat_keluar_admin');
                $this->load->view('footer');
        }

        public function ubah_surat_keluar_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/ubah_surat_keluar_admin');
                $this->load->view('footer');
        }

        public function lap_per_selesai_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/lap_per_selesai_admin');
                $this->load->view('footer');
        }

        public function arsip_surat_masuk_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/arsip_surat_masuk_admin');
                $this->load->view('footer');
        }

        public function arsip_surat_keluar_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/arsip_surat_keluar_admin');
                $this->load->view('footer');
        }

        public function form_tambah_surat_masuk_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_surat_masuk_admin');
                $this->load->view('footer');
        }

        public function form_tambah_surat_keluar_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_surat_keluar_admin');
                $this->load->view('footer');
        }



}
>>>>>>> 5b452f0d264bc1b29ba66de0f43be982010515dc
