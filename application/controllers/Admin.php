<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{   

        $this->load->view('header');
        $this->load->view('admin/sidebar_admin');
        $this->load->view('topbar');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('footer');
        
        }

        public function list_data_kades()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_data_kades');
                $this->load->view('footer');
        }

        public function form_tambah_kades()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_kades');
                $this->load->view('footer');
        }

        public function detail_data_kades()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_data_kades');
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

        public function tampil_suket001()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/tampil_suket001');
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

        public function detail_per_suket_001_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_per_suket_001_admin');
                $this->load->view('footer');
        }
        public function detail_per_suket_002_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_per_suket_002_admin');
                $this->load->view('footer');
        }
        public function detail_per_suket_003_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_per_suket_003_admin');
                $this->load->view('footer');
        }

}