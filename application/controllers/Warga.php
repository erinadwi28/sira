<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('role_warga'))  {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/dashboard_warga');
		$this->load->view('footer');
	}
	public function profil_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/profil_warga');
		$this->load->view('footer');
	}
	public function ubah_profil_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/ubah_profil_warga');
		$this->load->view('footer');
	}
	public function list_history_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/list_history_warga');
		$this->load->view('footer');
	}
	public function form_suket001_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket001_warga');
		$this->load->view('footer');
	}
	public function detail_suket001_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket001_warga');
		$this->load->view('footer');
	}
	public function form_suket002_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket002_warga');
		$this->load->view('footer');
	}
	public function detail_suket002_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket002_warga');
		$this->load->view('footer');
	}
	public function form_suket003_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket003_warga');
		$this->load->view('footer');
	}
	public function detail_suket003_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket003_warga');
		$this->load->view('footer');
	}
	public function form_suket004_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket004_warga');
		$this->load->view('footer');
	}
	public function detail_suket004_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket004_warga');
		$this->load->view('footer');
	}
	public function form_suket005_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket005_warga');
		$this->load->view('footer');
	}
	public function detail_suket005_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket005_warga');
		$this->load->view('footer');
	}
	public function form_suket006_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket006_warga');
		$this->load->view('footer');
	}
	public function detail_suket006_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket006_warga');
		$this->load->view('footer');
	}
	public function form_suket007_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket007_warga');
		$this->load->view('footer');
	}
	public function detail_suket007_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket007_warga');
		$this->load->view('footer');
	}
	public function form_suket008_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket008_warga');
		$this->load->view('footer');
	}
	public function detail_suket008_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket008_warga');
		$this->load->view('footer');
	}
	public function form_suket009_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket009_warga');
		$this->load->view('footer');
	}
	public function detail_suket009_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket009_warga');
		$this->load->view('footer');
	}
	public function form_suket010_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket010_warga');
		$this->load->view('footer');
	}
	public function detail_suket010_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket010_warga');
		$this->load->view('footer');
	}
	public function form_suket011_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket011_warga');
		$this->load->view('footer');
	}
	public function detail_suket011_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket011_warga');
		$this->load->view('footer');
	}
	public function form_suket012_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket012_warga');
		$this->load->view('footer');
	}
	public function detail_suket012_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket012_warga');
		$this->load->view('footer');
	}
	public function form_suket013_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket013_warga');
		$this->load->view('footer');
	}
	public function detail_suket013_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket013_warga');
		$this->load->view('footer');
	}
	public function form_suket014_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/form_suket014_warga');
		$this->load->view('footer');
	}
	public function detail_suket014_warga()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/detail_suket014_warga');
		$this->load->view('footer');
	}
	

}
