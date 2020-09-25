<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_rt', 'm_rt');

		if (!$this->session->userdata('role_rt')) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['rt'] = $this->db->get_where('rt', ['nik' =>
		$this->session->userdata('nik')])->row_array();

		$this->load->view('header', $data);
		$this->load->view('rt/sidebar_rt', $data);
		$this->load->view('topbar', $data);
		$this->load->view('rt/dashboard_rt', $data);
		$this->load->view('footer');
	}

	//profil rt
	public function profil_rt($id_rt)
	{
		$data_profil = $this->m_rt->get_profil($id_rt);
		$result = array(
			'data_detail' => $data_profil,
			'page' => 'rt/profil_rt',
		);
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view($result);
		$this->load->view('footer');
	}

	// tampil form ubah profil
	public function form_ubah_profil($id_rt)
	{

		$data_profil = $this->m_rt->get_profil($id_rt);

		$result = array(
			'data_detail' => $data_profil,
			'page' => 'rt/ubah_profil',
		);
		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar');
		$this->load->view($result);
		$this->load->view('footer');
	}

	// aksi ubah profil
	public function aksi_ubah_profil()
	{
		$id_rt = $this->input->post('id_rt');

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

		$this->m_rt->aksi_ubah_profil($id_rt, $data);

		if ($this->m_kepala_desa->aksi_ubah_profil($id_rt, $data)) {
			$this->session->set_flashdata('success', 'Data Kepala Desa berhasil ditambahkan');
			echo "sukses";
		} else {
			$this->session->set_flashdata('error', 'Data Kepala Desa gagal ditambahkan');
			echo "gagal";
		}
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
