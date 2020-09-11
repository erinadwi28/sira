<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt extends CI_Controller
{


        public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('role_rt'))  {
			redirect('login');
		}
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/dashboard_rt');
		$this->load->view('footer');
	}
	public function profil_rt()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/profil_rt');
		$this->load->view('footer');
	}
	public function ubah_profil_rt()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/ubah_profil_rt');
		$this->load->view('footer');
	}
	public function list_data_permohonan_rt()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/list_data_permohonan_rt');
		$this->load->view('footer');
	}
	public function list_data_disetujui_rt()
	{

		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/list_data_disetujui_rt');
		$this->load->view('footer');
	}
	public function history_permohonan_surat_rt()
	{

		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/history_permohonan_surat_rt');
		$this->load->view('footer');
	}
	public function list_data_warga_rt()
	{

		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/list_data_warga_rt');
		$this->load->view('footer');
	}
	public function detail_data_warga()
	{

		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/detail_data_warga');
		$this->load->view('footer');
	}
	public function form_suket001()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_001/form_suket001');
		$this->load->view('footer');
	}
	public function detail_suket001()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_001/detail_suket001');
		$this->load->view('footer');
	}
	public function form_suket002()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_002/form_suket002');
		$this->load->view('footer');
	}
	public function detail_suket002()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_002/detail_suket002');
		$this->load->view('footer');
	}
	public function form_suket003()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_003/form_suket003');
		$this->load->view('footer');
	}
	public function detail_suket003()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_003/detail_suket003');
		$this->load->view('footer');
	}
	public function form_suket004()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_004/form_suket004');
		$this->load->view('footer');
	}
	public function detail_suket004()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_004/detail_suket004');
		$this->load->view('footer');
	}
	public function form_suket005()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_005/form_suket005');
		$this->load->view('footer');
	}
	public function detail_suket005()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_005/detail_suket005');
		$this->load->view('footer');
	}
	public function form_suket006()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_006/form_suket006');
		$this->load->view('footer');
	}
	public function detail_suket006()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_006/detail_suket006');
		$this->load->view('footer');
	}
	public function form_suket007()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_007/form_suket007');
		$this->load->view('footer');
	}
	public function detail_suket007()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_007/detail_suket007');
		$this->load->view('footer');
	}
	public function form_suket008()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_008/form_suket008');
		$this->load->view('footer');
	}
	public function detail_suket008()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_008/detail_suket008');
		$this->load->view('footer');
	}
	public function form_suket009()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_009/form_suket009');
		$this->load->view('footer');
	}
	public function detail_suket009()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_009/detail_suket009');
		$this->load->view('footer');
	}
	public function form_suket010()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_010/form_suket010');
		$this->load->view('footer');
	}
	public function detail_suket010()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_001/detail_suket010');
		$this->load->view('footer');
	}
	public function form_suket011()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_011/form_suket011');
		$this->load->view('footer');
	}
	public function detail_suket011()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_011/detail_suket011');
		$this->load->view('footer');
	}
	public function form_suket012()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_012/form_suket012');
		$this->load->view('footer');
	}
	public function detail_suket012()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_012/detail_suket012');
		$this->load->view('footer');
	}
	public function form_suket013()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_013/form_suket013');
		$this->load->view('footer');
	}
	public function detail_suket013()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_013/detail_suket013');
		$this->load->view('footer');
	}
	public function form_suket014()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_014/form_suket014');
		$this->load->view('footer');
	}
	public function detail_suket014()
	{
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view('rt/suket_014/detail_suket014');
		$this->load->view('footer');
	}
}
