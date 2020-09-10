<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades extends CI_Controller {

	
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

        public function form_tambah_data_admin()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/form_tambah_data_admin');
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
        
        public function list_data_rt()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/list_data_rt');
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

        public function detail_data_admin()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/detail_data_admin');
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

        public function detail_data_warga()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/detail_data_warga');
        $this->load->view('footer');
        
        }
        
        public function lap_permohonan()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/lap_permohonan');
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
}