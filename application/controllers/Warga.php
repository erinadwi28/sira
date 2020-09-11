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
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->view('header', $data);
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/dashboard_warga', $data);
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
	public function form_suket001()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_001/form_suket001');
		$this->load->view('footer');
	}
	public function detail_suket001()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_001/detail_suket001');
		$this->load->view('footer');
	}
	public function tampil_suket001()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_001/tampil_suket001');
		$this->load->view('footer');
	}
	public function form_suket002()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_002/form_suket002');
		$this->load->view('footer');
	}
	public function detail_suket002()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_002/detail_suket002');
		$this->load->view('footer');
	}
	public function tampil_suket002()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_002/tampil_suket002');
		$this->load->view('footer');
	}
	public function form_suket003()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_003/form_suket003');
		$this->load->view('footer');
	}
	public function detail_suket003()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_003/detail_suket003');
		$this->load->view('footer');
	}
	public function tampil_suket003()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_003/tampil_suket003');
		$this->load->view('footer');
	}
	public function form_suket004()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_004/form_suket004');
		$this->load->view('footer');
	}
	public function detail_suket004()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_004/detail_suket004');
		$this->load->view('footer');
	}
	public function tampil_suket004()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_004/tampil_suket004');
		$this->load->view('footer');
	}
	public function form_suket005()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_005/form_suket005');
		$this->load->view('footer');
	}
	public function detail_suket005()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_005/detail_suket005');
		$this->load->view('footer');
	}
	public function tampil_suket005()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_005/tampil_suket005');
		$this->load->view('footer');
	}
	public function form_suket006()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_006/form_suket006');
		$this->load->view('footer');
	}
	public function detail_suket006()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_006/detail_suket006');
		$this->load->view('footer');
	}
	public function tampil_suket006()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_006/tampil_suket006');
		$this->load->view('footer');
	}
	public function form_suket007()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_007/form_suket007');
		$this->load->view('footer');
	}
	public function detail_suket007()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_007/detail_suket007');
		$this->load->view('footer');
	}
	public function tampil_suket007()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_007/tampil_suket007');
		$this->load->view('footer');
	}
	public function form_suket008()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_008/form_suket008');
		$this->load->view('footer');
	}
	public function detail_suket008()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_008/detail_suket008');
		$this->load->view('footer');
	}
	public function tampil_suket008()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_008/tampil_suket008');
		$this->load->view('footer');
	}
	public function form_suket009()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_009/form_suket009');
		$this->load->view('footer');
	}
	public function detail_suket009()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_009/detail_suket009');
		$this->load->view('footer');
	}
	public function tampil_suket009()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_009/tampil_suket009');
		$this->load->view('footer');
	}
	public function form_suket010()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_010/form_suket010');
		$this->load->view('footer');
	}
	public function detail_suket010()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_010/detail_suket010');
		$this->load->view('footer');
	}
	public function tampil_suket010()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_010/tampil_suket010');
		$this->load->view('footer');
	}
	public function form_suket011()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_011/form_suket011');
		$this->load->view('footer');
	}
	public function detail_suket011()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_011/detail_suket011');
		$this->load->view('footer');
	}
	public function tampil_suket011()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_011/tampil_suket011');
		$this->load->view('footer');
	}
	public function form_suket012()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_012/form_suket012');
		$this->load->view('footer');
	}
	public function detail_suket012()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_012/detail_suket012');
		$this->load->view('footer');
	}
	public function tampil_suket012()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_012/tampil_suket012');
		$this->load->view('footer');
	}
	public function form_suket013()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_013/form_suket013');
		$this->load->view('footer');
	}
	public function detail_suket013()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_013/detail_suket013');
		$this->load->view('footer');
	}
	public function tampil_suket013()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_013/tampil_suket013');
		$this->load->view('footer');
	}
	public function form_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/form_suket014');
		$this->load->view('footer');
	}
	public function detail_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/detail_suket014');
		$this->load->view('footer');
	}
	public function tampil_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/tampil_suket014');
		$this->load->view('footer');
	}
}
