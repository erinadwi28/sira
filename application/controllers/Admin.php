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

        public function list_kades_admin()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_kades_admin');
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

}