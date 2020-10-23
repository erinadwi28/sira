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
		$data['rt'] = $this->db->get_where('rt', ['id_rt' =>
		$this->session->userdata('id_rt')])->row_array();

		$this->load->view('header', $data);
		$this->load->view('rt/sidebar_rt', $data);
		$this->load->view('topbar', $data);
		$this->load->view('rt/dashboard_rt', $data);
		$this->load->view('footer');
	}

	//tampil profil saya
	public function profil_saya($id_rt)
	{
		$data['rt'] = $this->db->get_where('rt', ['id_rt' =>
		$this->session->userdata('id_rt')])->row_array();

		$detailhere = array('id_rt' => $id_rt);
		$data_detail['detail_profil_saya'] = $this->m_rt->get_detail_profil_saya($detailhere)->result();

		$data_detail['foto_profil'] = $this->m_rt->get_foto_profil_profil_saya($id_rt)->result();

		$data_detail['foto_ktp'] = $this->m_rt->get_foto_ktp_profil_saya($id_rt)->result();

		$data_detail['foto_kk'] = $this->m_rt->get_foto_kk_profil_saya($id_rt)->result();

		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar', $data);
		$this->load->view('rt/profil_saya', $data_detail);
		$this->load->view('footer');
	}
	

	// upload foto profil rt
	public function upload_foto_profil()
	{
		$where = $this->input->post('id_rt');
		if ($_FILES != null) {
			$this->aksi_upload_foto_profil($_FILES);
		}
		$this->session->set_flashdata('success', 'diubah');
		redirect('rt/profil_saya/' . $where);
	}

	//upload foto profil rt
	private function aksi_upload_foto_profil($id_rt)
	{
		$config['upload_path']          = './../assets/uploads/rt/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		// $config['max_size']             = 2048;
		$config['file_name'] 	        = 'foto_rt-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);
		$id_rt = $this->input->post('id_rt');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++) {
			if (!empty($_FILES['berkas']['name'][$i])) {

				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')) {

					// $ambil = $this->m_admin->get_foto_profil_rt($id_rt);
					// $r = $ambil->row();
					// unlink(".../assets/uploads/rt/".$r->nama_foto);

					$uploadData = $this->upload->data();

					$data['foto_profil_rt'] = $uploadData['file_name'];
					// $data['keterangan'] = $keterangan[$i];
					// $data['id_rt'] = $id_rt;

					// $data_detail = $this->input->post('id_rt');

					$this->db->where('id_rt', $id_rt);
					$this->db->update('rt', $data);
				}
			}
		}
	}

	// upload foto ktp rt ke warga
	public function upload_foto_ktp()
	{
		$where = $this->input->post('id_rt');
		if ($_FILES != null) {
			$this->aksi_upload_foto_ktp($_FILES);
		}
		$this->session->set_flashdata('success', 'diubah');
		redirect('rt/profil_saya/' . $where);
	}


	//upload foto ktp warga
	private function aksi_upload_foto_ktp($id_warga)
	{
		$config['upload_path']          = './../assets/uploads/warga/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		// $config['max_size']             = 2048;
		$config['file_name'] 	        = 'foto_warga-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);
		$id_warga = $this->input->post('id_warga');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++) {
			if (!empty($_FILES['berkas']['name'][$i])) {

				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')) {

					// $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
					// $r = $ambil->row();
					// unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();

					$data['foto_ktp_warga'] = $uploadData['file_name'];
					// $data['keterangan'] = $keterangan[$i];
					// $data['id_warga'] = $id_warga;

					// $data_detail = $this->input->post('id_warga');

					$this->db->where('id_warga', $id_warga);
					$this->db->update('warga', $data);
				}
			}
		}
	}

	// upload foto kk warga
	public function upload_foto_kk()
	{
		$where = $this->input->post('id_rt');
		if ($_FILES != null) {
			$this->aksi_upload_foto_kk($_FILES);
		}
		$this->session->set_flashdata('success', 'diubah');
		redirect('rt/profil_saya/' . $where);
	}

	//upload foto kk warga
	private function aksi_upload_foto_kk($id_warga)
	{
		$config['upload_path']          = './../assets/uploads/warga/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		// $config['max_size']             = 2048;
		$config['file_name'] 	        = 'foto_warga-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);
		$id_warga = $this->input->post('id_warga');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++) {
			if (!empty($_FILES['berkas']['name'][$i])) {

				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')) {

					// $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
					// $r = $ambil->row();
					// unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();

					$data['foto_kk_warga'] = $uploadData['file_name'];
					// $data['keterangan'] = $keterangan[$i];
					// $data['id_warga'] = $id_warga;

					// $data_detail = $this->input->post('id_warga');

					$this->db->where('id_warga', $id_warga);
					$this->db->update('warga', $data);
				}
			}
		}
	}

	// tampil form ubah kata sandi profil saya
	public function form_ubah_kata_sandi_profil_saya($id_rt)
	{
		$data['rt'] = $this->db->get_where('rt', ['id_rt' =>
		$this->session->userdata('id_rt')])->row_array();

		$detailhere = array('id_rt' => $id_rt);
		$data_detail['detail_profil_saya'] = $this->m_rt->get_detail_profil_saya($detailhere, 'rt')->result();

		$this->load->view('header');
		$this->load->view('rt/sidebar_rt');
		$this->load->view('topbar', $data);
		$this->load->view('rt/form_ubah_kata_sandi_profil_saya', $data_detail);
		$this->load->view('footer');
	}

	// aksi ubah kata sandi profil saya
	public function aksi_ubah_kata_sandi_profil_saya()
	{
		$kata_sandi = $this->input->post('kata_sandi');
		$kata_sandi_hash = sha1($kata_sandi);
		$data = array(
			'kata_sandi' => $kata_sandi_hash,
		);

		$where = $this->input->post('id_rt');

		if ($this->m_rt->ubah_kata_sandi_profil_saya($where, $data, 'rt')); {
			$this->session->set_flashdata('success', 'diubah');
			redirect('rt/form_ubah_kata_sandi_profil_saya/' . $where);
		}
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
}
