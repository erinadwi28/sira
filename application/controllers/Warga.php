<?php

require 'vendor/autoload.php';

use Dompdf\Dompdf;


defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_warga', 'm_warga');
		if (!$this->session->userdata('role_warga')) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$this->load->view('header', $data);
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/dashboard_warga', $data);
		$this->load->view('footer');
	}

	//tampil profil saya
	public function profil_saya($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$detailhere = array('id_warga' => $id_warga);
		$data_detail['detail_profil_saya'] = $this->m_warga->get_detail_profil_saya($detailhere, 'warga')->result();

		$data_detail['foto_profil'] = $this->m_warga->get_foto_profil_profil_saya($id_warga)->result();

		$data_detail['foto_ktp'] = $this->m_warga->get_foto_ktp_profil_saya($id_warga)->result();

		$data_detail['foto_kk'] = $this->m_warga->get_foto_kk_profil_saya($id_warga)->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/profil_saya', $data_detail);
		$this->load->view('footer');
	}

	// upload foto profil warga
	public function upload_foto_profil()
	{
		$where = $this->input->post('id_warga');
		if ($_FILES != null) {
			$this->aksi_upload_foto_profil($_FILES);
		}
		$this->session->set_flashdata('success', 'diubah');
		redirect('warga/profil_saya/' . $where);
	}

	//upload foto profil warga
	private function aksi_upload_foto_profil($id_warga)
	{
		$config['upload_path']          = './assets/uploads/warga/';
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

					$data['foto_profil_warga'] = $uploadData['file_name'];
					// $data['keterangan'] = $keterangan[$i];
					// $data['id_warga'] = $id_warga;

					// $data_detail = $this->input->post('id_warga');

					$this->db->where('id_warga', $id_warga);
					$this->db->update('warga', $data);
				}
			}
		}
	}

	// upload foto ktp warga
	public function upload_foto_ktp()
	{
		$where = $this->input->post('id_warga');
		if ($_FILES != null) {
			$this->aksi_upload_foto_ktp($_FILES);
		}
		$this->session->set_flashdata('success', 'diubah');
		redirect('warga/profil_saya/' . $where);
	}

	//upload foto ktp warga
	private function aksi_upload_foto_ktp($id_warga)
	{
		$config['upload_path']          = './assets/uploads/warga/';
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
		$where = $this->input->post('id_warga');
		if ($_FILES != null) {
			$this->aksi_upload_foto_kk($_FILES);
		}
		$this->session->set_flashdata('success', 'diubah');
		redirect('warga/profil_saya/' . $where);
	}

	//upload foto kk warga
	private function aksi_upload_foto_kk($id_warga)
	{
		$config['upload_path']          = './assets/uploads/warga/';
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
	public function form_ubah_kata_sandi_profil_saya($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$detailhere = array('id_warga' => $id_warga);
		$data_detail['detail_profil_saya'] = $this->m_warga->get_detail_profil_saya($detailhere, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/form_ubah_kata_sandi_profil_saya', $data_detail);
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

		$where = $this->input->post('id_warga');

		if ($this->m_warga->ubah_kata_sandi_profil_saya($where, $data, 'warga')); {
			$this->session->set_flashdata('success', 'diubah');
			redirect('warga/form_ubah_kata_sandi_profil_saya/' . $where);
		}
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

	//tampil form suket001
	public function form_suket001($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_001/form_suket001', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket001
	public function aksi_tambah_permohonan_suket001()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
			'nama_usaha' => $this->input->post('nama_usaha'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_usaha');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket001/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket001
	public function detail_suket001($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_usaha')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_001/detail_suket001', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket001
	public function form_ubah_suket001($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_usaha')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_001/ubah_suket001', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket001
	public function aksi_ubah_suket001()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
			'nama_usaha' => $this->input->post('nama_usaha'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_usaha', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket001/' . $id_surat . '/' . $id_permohonan);
	}

	public function tampil_suket001()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_001/tampil_suket001');
		$this->load->view('footer');
	}

	//tampil form suket002
	public function form_suket002($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_002/form_suket002', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket002
	public function aksi_tambah_permohonan_suket002()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'alamat_kk' => $this->input->post('alamat_kk'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_domisili');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket002/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket002
	public function detail_suket002($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_domisili')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_002/detail_suket002', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket002
	public function form_ubah_suket002($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_domisili')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_002/ubah_suket002', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket002
	public function aksi_ubah_suket002()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'alamat_kk' => $this->input->post('alamat_kk'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_domisili', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket002/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket002()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_002/tampil_suket002');
		$this->load->view('footer');
	}

	//tampil form suket_003
	public function form_suket003($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_003/form_suket003', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket003
	public function aksi_tambah_permohonan_suket003()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'keperluan' => $this->input->post('keperluan'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_belum_memiliki_rumah');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket003/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket003
	public function detail_suket003($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_belum_memiliki_rumah')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_003/detail_suket003', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket003
	public function form_ubah_suket003($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_belum_memiliki_rumah')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_003/ubah_suket003', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket003
	public function aksi_ubah_suket003()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'keperluan' => $this->input->post('keperluan'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_belum_memiliki_rumah', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket003/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket003()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_003/tampil_suket003');
		$this->load->view('footer');
	}

	//tampil form suket004
	public function form_suket004($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_004/form_suket004', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket004
	public function aksi_tambah_permohonan_suket004()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama_benar' => $this->input->post('nama_benar'),
			'nama_salah' => $this->input->post('nama_salah'),
			'nama_dokumen_benar' => $this->input->post('nama_dokumen_benar'),
			'nama_dokumen_salah' => $this->input->post('nama_dokumen_salah'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_beda_nama');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket004/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket004
	public function detail_suket004($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_beda_nama')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_004/detail_suket004', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket004
	public function form_ubah_suket004($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_beda_nama')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_004/ubah_suket004', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket004
	public function aksi_ubah_suket004()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama_benar' => $this->input->post('nama_benar'),
			'nama_salah' => $this->input->post('nama_salah'),
			'nama_dokumen_benar' => $this->input->post('nama_dokumen_benar'),
			'nama_dokumen_salah' => $this->input->post('nama_dokumen_salah'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_beda_nama', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket004/' . $id_surat . '/' . $id_permohonan);
	}

	public function tampil_suket004()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_004/tampil_suket004');
		$this->load->view('footer');
	}

	//tampil form suket005
	public function form_suket005($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_005/form_suket005', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket005
	public function aksi_tambah_permohonan_suket005()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'hari_kegiatan' => $this->input->post('hari_kegiatan'),
			'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
			'jam' => $this->input->post('jam'),
			'tempat' => $this->input->post('tempat'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_izin_keramaian');
		if ($_FILES != null) {
			$this->aksi_upload_lampiran_suket005($id_surat);
		}


		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket005/' . $id_surat . '/' . $id_permohonan);
	}

	//aksi upload lampiran suket005
	private function aksi_upload_lampiran_suket005($id_surat)
	{
		$config['upload_path']          = './assets/uploads/warga/suket_005/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		$config['file_name']                 = 'foto_ktp-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++) {
			if (!empty($_FILES['berkas']['name'][$i])) {

				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')) {
					$uploadData = $this->upload->data();

					$data['foto_ktp'] = $uploadData['file_name'];

					$this->db->where('id_surat ', $id_surat);
					$this->db->update('srt_izin_keramaian', $data);
				}
			}
		}
	}

	// upload ulang foto ktp
	public function update_foto_ktp()
	{
		$id_surat = $this->input->post('id_surat');
		if ($_FILES != null) {
			$this->aksi_upload_lampiran_suket005($id_surat);
		}
		$permohonan = $this->input->post('id_permohonan_surat');
		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket005/' . $id_surat . '/' . $permohonan);
	}

	//tampil detail suket005
	public function detail_suket005($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_izin_keramaian')->result();

		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$data_detail['foto_ktp'] = $this->m_warga->get_pas_foto_suket005($id_surat, 'srt_izin_keramaian')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_005/detail_suket005', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket005
	public function form_ubah_suket005($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_izin_keramaian')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_005/ubah_suket005', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket005
	public function aksi_ubah_suket005()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'hari_kegiatan' => $this->input->post('hari_kegiatan'),
			'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
			'jam' => $this->input->post('jam'),
			'tempat' => $this->input->post('tempat'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_izin_keramaian', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket005/' . $id_surat . '/' . $id_permohonan);
	}

	public function tampil_suket005()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_005/tampil_suket005');
		$this->load->view('footer');
	}

	//tampil form suket006
	public function form_suket006($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_006/form_suket006', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket006
	public function aksi_tambah_permohonan_suket006()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_belum_pernah_menikah');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket006/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket006
	public function detail_suket006($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_belum_pernah_menikah')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_006/detail_suket006', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket006
	public function form_ubah_suket006($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_belum_pernah_menikah')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_006/ubah_suket006', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket006
	public function aksi_ubah_suket006()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_belum_pernah_menikah', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket006/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket006()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_006/tampil_suket006');
		$this->load->view('footer');
	}

	//tampil form suket007
	public function form_suket007($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_007/form_suket007', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket007
	public function aksi_tambah_permohonan_suket007()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'keperluan' => $this->input->post('keperluan'),
		);


		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_tidak_mampu');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket007/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket007
	public function detail_suket007($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_tidak_mampu')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_007/detail_suket007', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket007
	public function form_ubah_suket007($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_tidak_mampu')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_007/ubah_suket007', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket007
	public function aksi_ubah_suket007()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'keperluan' => $this->input->post('keperluan'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_tidak_mampu', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket007/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket007()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_007/tampil_suket007');
		$this->load->view('footer');
	}

	//tampil form suket008
	public function form_suket008($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_008/form_suket008', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket008
	public function aksi_tambah_permohonan_suket008()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama_istri' => $this->input->post('nama_istri'),
			'tempat_lahir_istri' => $this->input->post('tempat_lahir_istri'),
			'tanggal_lahir_istri' => $this->input->post('tanggal_lahir_istri'),
			'pekerjaan_istri' => $this->input->post('pekerjaan_istri'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'nama_suami' => $this->input->post('nama_suami'),
			'tempat_lahir_suami' => $this->input->post('tempat_lahir_suami'),
			'tanggal_lahir_suami' => $this->input->post('tanggal_lahir_suami'),
			'pekerjaan_suami' => $this->input->post('pekerjaan_suami'),
			'alasan' => $this->input->post('alasan'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_janda');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket008/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket008
	public function detail_suket008($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_janda')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_008/detail_suket008', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket008
	public function form_ubah_suket008($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_janda')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_008/ubah_suket008', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket008
	public function aksi_ubah_suket008()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama_istri' => $this->input->post('nama_istri'),
			'tempat_lahir_istri' => $this->input->post('tempat_lahir_istri'),
			'tanggal_lahir_istri' => $this->input->post('tanggal_lahir_istri'),
			'pekerjaan_istri' => $this->input->post('pekerjaan_istri'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'nama_suami' => $this->input->post('nama_suami'),
			'tempat_lahir_suami' => $this->input->post('tempat_lahir_suami'),
			'tanggal_lahir_suami' => $this->input->post('tanggal_lahir_suami'),
			'pekerjaan_suami' => $this->input->post('pekerjaan_suami'),
			'alasan' => $this->input->post('alasan'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_janda', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket008/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket008()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_008/tampil_suket008');
		$this->load->view('footer');
	}

	//tampil form suket009
	public function form_suket009($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_009/form_suket009', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket009
	public function aksi_tambah_permohonan_suket009()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama_alm' => $this->input->post('nama_alm'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'umur' => $this->input->post('umur'),
			'tempat_kediaman' => $this->input->post('tempat_kediaman'),
			'hari_meninggal' => $this->input->post('hari_meninggal'),
			'tanggal_meninggal' => $this->input->post('tanggal_meninggal'),
			'tempat_meninggal' => $this->input->post('tempat_meninggal'),
			'alasan_meninggal' => $this->input->post('alasan_meninggal'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_kematian');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket009/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket009
	public function detail_suket009($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_kematian')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_009/detail_suket009', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket009
	public function form_ubah_suket009($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_kematian')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_009/ubah_suket009', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket009
	public function aksi_ubah_suket009()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama_alm' => $this->input->post('nama_alm'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'umur' => $this->input->post('umur'),
			'tempat_kediaman' => $this->input->post('tempat_kediaman'),
			'hari_meninggal' => $this->input->post('hari_meninggal'),
			'tanggal_meninggal' => $this->input->post('tanggal_meninggal'),
			'tempat_meninggal' => $this->input->post('tempat_meninggal'),
			'alasan_meninggal' => $this->input->post('alasan_meninggal'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_kematian', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket009/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket009()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_009/tampil_suket009');
		$this->load->view('footer');
	}

	//tampil form suket010
	public function form_suket010($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_010/form_suket010', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket010
	public function aksi_tambah_permohonan_suket010()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama_anak' => $this->input->post('nama_anak'),
			'hari_lahir' => $this->input->post('hari_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'jam_lahir' => $this->input->post('jam_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'alamat' => $this->input->post('alamat'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_pemohon' => $this->input->post('nama_pemohon'),
			'hubungan_dengan_bayi' => $this->input->post('hubungan_dengan_bayi'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_kelahiran');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket010/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket010
	public function detail_suket010($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_kelahiran')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_010/detail_suket010', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket010
	public function form_ubah_suket010($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_kelahiran')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_010/ubah_suket010', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket010
	public function aksi_ubah_suket010()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama_anak' => $this->input->post('nama_anak'),
			'hari_lahir' => $this->input->post('hari_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'jam_lahir' => $this->input->post('jam_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'alamat' => $this->input->post('alamat'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_pemohon' => $this->input->post('nama_pemohon'),
			'hubungan_dengan_bayi' => $this->input->post('hubungan_dengan_bayi'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_kelahiran', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket010/' . $id_surat . '/' . $id_permohonan);
	}

	public function tampil_suket010()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_010/tampil_suket010');
		$this->load->view('footer');
	}
	public function form_suket011($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_011/form_suket011', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket011
	public function aksi_tambah_permohonan_suket011()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'golongan_darah' => $this->input->post('golongan_darah'),
			'agama' => $this->input->post('agama'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'no_kk' => $this->input->post('no_kk'),
			'alamat' => $this->input->post('alamat'),
			'rt' => $this->input->post('rt'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'tanggal_tinggal' => $this->input->post('tanggal_tinggal'),
			'no_surat_pindah' => $this->input->post('no_surat_pindah'),
			'tanggal_surat_pindah' => $this->input->post('tgl_surat_pindah'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_pengantar_ktp');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket011/' . $id_surat . '/' . $id_permohonan);
	}

	//tampil detail suket011
	public function detail_suket011($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_detail_suket011($id_surat, 'srt_pengantar_ktp')->result();

		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$data_detail['pas_foto'] = $this->m_warga->get_pas_foto_suket011($id_surat, 'srt_pengantar_ktp')->result();

		$data_detail['foto_kk'] = $this->m_warga->get_foto_kk_suket011($id_surat)->result();

		$data_detail['foto_surat_pindah'] = $this->m_warga->get_foto_surat_pindah_suket011($id_surat)->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_011/detail_suket011', $data_detail);
		$this->load->view('footer');
	}

	// upload pas foto suket011
	public function upload_pasfoto_suket011()
	{
		$where = $this->input->post('id_surat');
		if ($_FILES != null) {
			$this->aksi_upload_pasfoto_suket011($_FILES);
		}

		$permohonan = $this->input->post('id_permohonan_surat');
		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket011/' . $where . '/' . $permohonan);
	}

	//aksi upload pas foto suket011
	private function aksi_upload_pasfoto_suket011($id_surat)
	{
		$config['upload_path']          = './assets/uploads/warga/suket_011/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';

		$config['file_name']                 = 'pas_foto-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);
		$id_surat = $this->input->post('id_surat');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++) {
			if (!empty($_FILES['berkas']['name'][$i])) {

				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')) {

					$uploadData = $this->upload->data();

					$data['pas_foto'] = $uploadData['file_name'];

					$this->db->where('id_surat', $id_surat);
					$this->db->update('srt_pengantar_ktp', $data);
				}
			}
		}
	}

	// upload_foto_kk_suket011
	public function upload_foto_kk_suket011()
	{
		$where = $this->input->post('id_surat');
		if ($_FILES != null) {
			$this->aksi_upload_foto_kk_suket011($_FILES);
		}
		$permohonan = $this->input->post('id_permohonan_surat');
		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket011/' . $where . '/' . $permohonan);
	}

	//aksi upload foto kk suket011
	private function aksi_upload_foto_kk_suket011($id_surat)
	{
		$config['upload_path']          = './assets/uploads/warga/suket_011/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';

		$config['file_name']                 = 'foto_kk-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);
		$id_surat = $this->input->post('id_surat');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++) {
			if (!empty($_FILES['berkas']['name'][$i])) {

				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')) {

					$uploadData = $this->upload->data();

					$data['foto_kk'] = $uploadData['file_name'];

					$this->db->where('id_surat', $id_surat);
					$this->db->update('srt_pengantar_ktp', $data);
				}
			}
		}
	}

	// upload_foto_surat_pindah_suket011
	public function upload_foto_surat_pindah_suket011()
	{
		$where = $this->input->post('id_surat');
		if ($_FILES != null) {
			$this->aksi_upload_foto_surat_pindah_suket011($_FILES);
		}
		$permohonan = $this->input->post('id_permohonan_surat');
		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket011/' . $where . '/' . $permohonan);
	}

	//upload foto surat_pindah_suket011
	private function aksi_upload_foto_surat_pindah_suket011($id_surat)
	{
		$config['upload_path']          = './assets/uploads/warga/suket_011/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';

		$config['file_name']                 = 'foto_surat_pindah-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

		$this->load->library('upload', $config);
		$id_surat = $this->input->post('id_surat');
		$jumlah_berkas = count($_FILES['berkas']['name']);
		for ($i = 0; $i < $jumlah_berkas; $i++) {
			if (!empty($_FILES['berkas']['name'][$i])) {

				$_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
				$_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
				$_FILES['file']['size'] = $_FILES['berkas']['size'][$i];

				if ($this->upload->do_upload('file')) {

					$uploadData = $this->upload->data();

					$data['foto_surat_pindah'] = $uploadData['file_name'];

					$this->db->where('id_surat', $id_surat);
					$this->db->update('srt_pengantar_ktp', $data);
				}
			}
		}
	}

	//tampil form ubah suket011
	public function form_ubah_suket011($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_pengantar_ktp')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_011/ubah_suket011', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket011
	public function aksi_ubah_suket011()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'golongan_darah' => $this->input->post('golongan_darah'),
			'agama' => $this->input->post('agama'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'no_kk' => $this->input->post('no_kk'),
			'alamat' => $this->input->post('alamat'),
			'rt' => $this->input->post('rt'),
			'kelurahan' => $this->input->post('kelurahan'),
			'kecamatan' => $this->input->post('kecamatan'),
			'tanggal_tinggal' => $this->input->post('tanggal_tinggal'),
			'no_surat_pindah' => $this->input->post('no_surat_pindah'),
			'tanggal_surat_pindah' => $this->input->post('tgl_surat_pindah'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_pengantar_ktp', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket011/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket011()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_011/tampil_suket011');
		$this->load->view('footer');
	}

	//tampil form suket012
	public function form_suket012($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_012/form_suket012', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket012
	public function aksi_tambah_permohonan_suket012()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'agama' => $this->input->post('agama'),
			'kewarganegaraan' => $this->input->post('kewarganegaraan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
			'tanggal_tinggal' => $this->input->post('tanggal_tinggal'),
			'kepindahan_dari' => $this->input->post('kepindahan_dari'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'jml_pengikut' => $this->input->post('jml_pengikut'),
		);

		$this->m_warga->tambah_suket($data_surat, 'srt_pengantar_kk');

		redirect('warga/list_pengikut_suket012/' . $id_permohonan);
		$this->session->set_flashdata('success', 'disimpan');
	}

	//list pengikut suket012
	public function list_pengikut_suket012($id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_pengikut['id_permohonan'] = $this->db->get_where('srt_pengantar_kk', ['id_permohonan_surat' => $id_permohonan])->row_array();
		$data_pengikut['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan)->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_012/list_pengikut_suket012', $data_pengikut);
		$this->load->view('footer');
	}

	//tampil form tambah pengikut suket012
	public function form_tambah_pengikut_suket012($id_permohonan)
	{

		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_permohonan['id_permohonan'] = $this->db->get_where('srt_pengantar_kk', ['id_permohonan_surat' => $id_permohonan])->row_array();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_012/tambah_pengikut_suket012', $data_permohonan);
		$this->load->view('footer');
	}

	// aksi tambah pengikut suket012
	public function aksi_tambah_pengikut_suket012()
	{
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_pengikut = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'umur' => $this->input->post('umur'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'nama_ortu' => $this->input->post('nama_ortu'),
			'status_hub_kk' => $this->input->post('status_hub_kk'),
		);

		$this->m_warga->aksi_tambah_pengikut($data_pengikut);

		$this->session->set_flashdata('success', 'ditambahkan');
		redirect('warga/list_pengikut_suket012/' . $id_permohonan);
	}

	//tampil form ubah data pengikut suket012
	public function form_ubah_pengikut_suket012($id_pengikut)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_pengikut'] = $this->m_warga->get_detail_pengikut($id_pengikut, 'pengikut')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_012/form_ubah_pengikut_suket012', $data_detail);
		$this->load->view('footer');
	}

	//aksi ubah pengikut suket 012
	public function aksi_ubah_pengikut()
	{
		$id_permohonan_surat = $this->input->post('id_permohonan_surat');
		$id_pengikut = $this->input->post('id_pengikut');
		$data = array(
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'umur' => $this->input->post('umur'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'nama_ortu' => $this->input->post('nama_ortu'),
			'status_hub_kk' => $this->input->post('status_hub_kk'),
		);

		if ($this->m_warga->aksi_ubah_pengikut($id_pengikut, $data, 'pengikut')); {
			$this->session->set_flashdata('success', 'disimpan');
			redirect('warga/list_pengikut_suket012/' . $id_permohonan_surat);
		}
	}

	// aksi hapus data pengikut suket012
	public function aksi_hapus_pengikut($id_pengikut, $id_permohonan_surat)
	{
		$this->m_warga->aksi_hapus_pengikut($id_pengikut, 'pengikut');

		$this->session->set_flashdata('success', 'dihapus');
		redirect('warga/list_pengikut_suket012/' . $id_permohonan_surat);
	}

	//tampil form ubah suket012
	public function form_ubah_suket012($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_pengantar_kk')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_012/ubah_suket012', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket012
	public function aksi_ubah_suket012()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'agama' => $this->input->post('agama'),
			'kewarganegaraan' => $this->input->post('kewarganegaraan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
			'tanggal_tinggal' => $this->input->post('tanggal_tinggal'),
			'kepindahan_dari' => $this->input->post('kepindahan_dari'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'jml_pengikut' => $this->input->post('jml_pengikut'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_pengantar_kk', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket012/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket012
	public function detail_suket012($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_pengantar_kk')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();
		$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan)->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_012/detail_suket012', $data_detail);
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

	//tampil form suket013
	public function form_suket013($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_013/form_suket013', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket013
	public function aksi_tambah_permohonan_suket013()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'penghasilan' => $this->input->post('penghasilan'),
		);

		$id_surat = $this->m_warga->tambah_suket($data_surat, 'srt_ket_penghasilan');

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket013/' . $id_surat . '/' . $id_permohonan);
	}

	//detail suket013
	public function detail_suket013($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_penghasilan')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_013/detail_suket013', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket013
	public function form_ubah_suket013($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_penghasilan')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_013/ubah_suket013', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket013
	public function aksi_ubah_suket013()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat_tinggal' => $this->input->post('alamat_tinggal'),
			'penghasilan' => $this->input->post('penghasilan'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_penghasilan', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket013/' . $id_surat . '/' . $id_permohonan);
	}


	public function tampil_suket013()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_013/tampil_suket013');
		$this->load->view('footer');
	}

	//tampil form suket14
	public function form_suket014($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_014/form_suket014', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket014
	public function aksi_tambah_permohonan_suket014()
	{
		$data_permohonan = array(
			'id_nama_surat' => $this->input->post('id_nama_surat'),
			'id_warga' => $this->input->post('id_warga'),
			'status' => $this->input->post('status'),
		);

		$id_permohonan = $this->m_warga->tambah_permohonan($data_permohonan);

		$data_surat = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'kewarganegaraan' => $this->input->post('kewarganegaraan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'alamat_asal' => $this->input->post('alamat_asal'),
			'no_kk' => $this->input->post('no_kk'),
			'tanggal_kk' => $this->input->post('tanggal_kk'),
			'alamat_pindah' => $this->input->post('alamat_pindah'),
			'kelurahan_pindah' => $this->input->post('kelurahan_pindah'),
			'kecamatan_pindah' => $this->input->post('kecamatan_pindah'),
			'kabupaten_pindah' => $this->input->post('kabupaten_pindah'),
			'provinsi_pindah' => $this->input->post('provinsi_pindah'),
			'tanggal_pindah' => $this->input->post('tanggal_pindah'),
			'alasan_pindah' => $this->input->post('alasan_pindah'),
			'jumlah_pengikut' => $this->input->post('jumlah_pengikut'),
		);

		$this->m_warga->tambah_suket($data_surat, 'srt_ket_pindah');

		redirect('warga/list_pengikut_suket014/' . $id_permohonan);
		$this->session->set_flashdata('success', 'disimpan');
	}

	//list pengikut suket014
	public function list_pengikut_suket014($id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_pengikut['id_permohonan'] = $this->db->get_where('srt_ket_pindah', ['id_permohonan_surat' => $id_permohonan])->row_array();
		$data_pengikut['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan)->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_014/list_pengikut_suket014', $data_pengikut);
		$this->load->view('footer');
	}

	//tampil form tambah pengikut suket014
	public function form_tambah_pengikut_suket014($id_permohonan)
	{

		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_permohonan['id_permohonan'] = $this->db->get_where('srt_ket_pindah', ['id_permohonan_surat' => $id_permohonan])->row_array();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_014/tambah_pengikut_suket014', $data_permohonan);
		$this->load->view('footer');
	}

	// aksi tambah pengikut suket014
	public function aksi_tambah_pengikut_suket014()
	{
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_pengikut = array(
			'id_permohonan_surat' => $id_permohonan,
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'umur' => $this->input->post('umur'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'nama_ortu' => $this->input->post('nama_ortu'),
			'status_hub_kk' => $this->input->post('status_hub_kk'),
		);

		$this->m_warga->aksi_tambah_pengikut($data_pengikut);

		$this->session->set_flashdata('success', 'ditambahkan');
		redirect('warga/list_pengikut_suket014/' . $id_permohonan);
	}

	//tampil form ubah data pengikut suket014
	public function form_ubah_pengikut_suket014($id_pengikut)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_pengikut'] = $this->m_warga->get_detail_pengikut($id_pengikut, 'pengikut')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_014/form_ubah_pengikut_suket014', $data_detail);
		$this->load->view('footer');
	}

	//aksi ubah pengikut suket 014
	public function aksi_ubah_pengikut_suket014()
	{
		$id_permohonan_surat = $this->input->post('id_permohonan_surat');
		$id_pengikut = $this->input->post('id_pengikut');
		$data = array(
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'umur' => $this->input->post('umur'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'nama_ortu' => $this->input->post('nama_ortu'),
			'status_hub_kk' => $this->input->post('status_hub_kk'),
		);

		if ($this->m_warga->aksi_ubah_pengikut($id_pengikut, $data, 'pengikut')); {
			$this->session->set_flashdata('success', 'diubah');
			redirect('warga/list_pengikut_suket014/' . $id_permohonan_surat);
		}
	}

	// aksi hapus data pengikut suket014
	public function aksi_hapus_pengikut_suket014($id_pengikut, $id_permohonan_surat)
	{
		$this->m_warga->aksi_hapus_pengikut($id_pengikut, 'pengikut');

		$this->session->set_flashdata('success', 'dihapus');
		redirect('warga/list_pengikut_suket014/' . $id_permohonan_surat);
	}

	//detail suket014
	public function detail_suket014($id_surat, $id_permohonan)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_pindah')->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan, 'permohonan_surat')->result();
		$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan)->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_014/detail_suket014', $data_detail);
		$this->load->view('footer');
	}

	//tampil form ubah suket014
	public function form_ubah_suket014($id_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();


		$data_detail['detail_suket'] = $this->m_warga->get_data_suket($id_surat, 'srt_ket_pindah')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_014/ubah_suket014', $data_detail);
		$this->load->view('footer');
	}

	//ubah suket014
	public function aksi_ubah_suket014()
	{
		$id_surat = $this->input->post('id_surat');
		$id_permohonan = $this->input->post('id_permohonan_surat');

		$data_surat = array(
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'kewarganegaraan' => $this->input->post('kewarganegaraan'),
			'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status_perkawinan' => $this->input->post('status_perkawinan'),
			'alamat_asal' => $this->input->post('alamat_asal'),
			'no_kk' => $this->input->post('no_kk'),
			'tanggal_kk' => $this->input->post('tanggal_kk'),
			'alamat_pindah' => $this->input->post('alamat_pindah'),
			'kelurahan_pindah' => $this->input->post('kelurahan_pindah'),
			'kecamatan_pindah' => $this->input->post('kecamatan_pindah'),
			'kabupaten_pindah' => $this->input->post('kabupaten_pindah'),
			'provinsi_pindah' => $this->input->post('provinsi_pindah'),
			'tanggal_pindah' => $this->input->post('tanggal_pindah'),
			'alasan_pindah' => $this->input->post('alasan_pindah'),
			'jumlah_pengikut' => $this->input->post('jumlah_pengikut'),
		);

		$this->m_warga->ubah_suket($data_surat, 'srt_ket_pindah', $id_surat);

		$this->session->set_flashdata('success', 'disimpan');
		redirect('warga/detail_suket014/' . $id_surat . '/' . $id_permohonan);
	}

	public function tampil_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/tampil_suket014');
		$this->load->view('footer');
	}

	//update status permohonan
	public function update_status_permohonan($id_permohonan_surat, $id_warga)
	{
		$data = array(
			'status' => 'Menunggu Persetujuan Ketua RT',
		);

		$this->m_warga->update_status_permohonan($id_permohonan_surat, $data, 'permohonan_surat');

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga/list_history_permohonan/' . $id_warga);
	}

	//list histori permohonan
	public function list_history_permohonan($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_permohonan['permohonan'] = $this->m_warga->get_history_permohonan($id_warga)->result();


		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/list_history_warga', $data_permohonan);
		$this->load->view('footer');
	}

	//list histori permohonan selesai
	public function list_permohonan_selesai($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_permohonan['permohonan'] = $this->m_warga->get_history_permohonan_selesai($id_warga)->result();


		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/list_permohonan_selesai', $data_permohonan);
		$this->load->view('footer');
	}

	// filter tanggal history permohonan
	public function filter_tanggal_list_history_permohonan()
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$tgl_awal = $this->input->post('tanggal_mulai');
		$tgl_akhir = $this->input->post('tanggal_akhir');
		$id_warga = $this->input->post('id_warga');

		$data_permohonan['permohonan'] = $this->m_warga->filter_tanggal_list_history_permohonan($id_warga, $tgl_awal, $tgl_akhir)->result();


		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/list_history_warga', $data_permohonan);
		$this->load->view('footer');
	}

	// filter tanggal history permohonan selesai
	public function filter_tanggal_list_history_permohonan_selesai()
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$tgl_awal = $this->input->post('tanggal_mulai');
		$tgl_akhir = $this->input->post('tanggal_akhir');
		$id_warga = $this->input->post('id_warga');

		$data_permohonan['permohonan'] = $this->m_warga->filter_tanggal_list_history_permohonan_selesai($id_warga, $tgl_awal, $tgl_akhir)->result();


		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		$this->load->view('warga/list_permohonan_selesai', $data_permohonan);
		$this->load->view('footer');
	}

	//detail data permohonan
	public function detail_data_permohonan($id_permohonan_surat, $id_nama_surat)
	{
		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();

		if ($id_nama_surat == 1) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_001($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 2) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_002($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 3) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_003($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 4) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_004($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 5) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_005($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 6) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_006($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 7) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_007($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 8) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_008($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 9) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_009($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 10) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_010($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 11) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_011($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 12) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_012($id_permohonan_surat)->result();
			$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 13) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_013($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 14) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_014($id_permohonan_surat)->result();
			$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan_surat)->result();
		}

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		if ($id_nama_surat == 1) {
			$this->load->view('warga/suket_001/detail_suket001', $data_detail);
		} elseif ($id_nama_surat == 2) {
			$this->load->view('warga/suket_002/detail_suket002', $data_detail);
		} elseif ($id_nama_surat == 3) {
			$this->load->view('warga/suket_003/detail_suket003', $data_detail);
		} elseif ($id_nama_surat == 4) {
			$this->load->view('warga/suket_004/detail_suket004', $data_detail);
		} elseif ($id_nama_surat == 5) {
			$this->load->view('warga/suket_005/detail_suket005', $data_detail);
		} elseif ($id_nama_surat == 6) {
			$this->load->view('warga/suket_006/detail_suket006', $data_detail);
		} elseif ($id_nama_surat == 7) {
			$this->load->view('warga/suket_007/detail_suket007', $data_detail);
		} elseif ($id_nama_surat == 8) {
			$this->load->view('warga/suket_008/detail_suket008', $data_detail);
		} elseif ($id_nama_surat == 9) {
			$this->load->view('warga/suket_009/detail_suket009', $data_detail);
		} elseif ($id_nama_surat == 10) {
			$this->load->view('warga/suket_010/detail_suket010', $data_detail);
		} elseif ($id_nama_surat == 11) {
			$this->load->view('warga/suket_011/detail_suket011', $data_detail);
		} elseif ($id_nama_surat == 12) {
			$this->load->view('warga/suket_012/detail_suket012', $data_detail);
		} elseif ($id_nama_surat == 13) {
			$this->load->view('warga/suket_013/detail_suket013', $data_detail);
		} elseif ($id_nama_surat == 14) {
			$this->load->view('warga/suket_014/detail_suket014', $data_detail);
		}
		$this->load->view('footer');
	}

	public function lihat_surat($id_permohonan_surat, $id_nama_surat)
	{

		$data['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();

		if ($id_nama_surat == 1) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_001($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 2) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_002($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 3) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_003($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 4) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_004($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 5) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_005($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 6) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_006($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 7) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_007($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 8) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_008($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 9) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_009($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 10) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_010($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 11) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_011($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 12) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_012($id_permohonan_surat)->result();
			$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 13) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_013($id_permohonan_surat)->result();
		} elseif ($id_nama_surat == 14) {
			$data_detail['detail_suket'] = $this->m_warga->get_detail_014($id_permohonan_surat)->result();
			$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan_surat)->result();
		}

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga', $data);
		$this->load->view('topbar', $data);
		if ($id_nama_surat == 1) {
			$this->load->view('warga/suket_001/tampil_suket001', $data_detail);
		} elseif ($id_nama_surat == 2) {
			$this->load->view('warga/suket_002/tampil_suket002', $data_detail);
		} elseif ($id_nama_surat == 3) {
			$this->load->view('warga/suket_003/tampil_suket003', $data_detail);
		} elseif ($id_nama_surat == 4) {
			$this->load->view('warga/suket_004/tampil_suket004', $data_detail);
		} elseif ($id_nama_surat == 5) {
			$this->load->view('warga/suket_005/tampil_suket005', $data_detail);
		} elseif ($id_nama_surat == 6) {
			$this->load->view('warga/suket_006/tampil_suket006', $data_detail);
		} elseif ($id_nama_surat == 7) {
			$this->load->view('warga/suket_007/tampil_suket007', $data_detail);
		} elseif ($id_nama_surat == 8) {
			$this->load->view('warga/suket_008/tampil_suket008', $data_detail);
		} elseif ($id_nama_surat == 9) {
			$this->load->view('warga/suket_009/tampil_suket009', $data_detail);
		} elseif ($id_nama_surat == 10) {
			$this->load->view('warga/suket_010/tampil_suket010', $data_detail);
		} elseif ($id_nama_surat == 11) {
			$this->load->view('warga/suket_011/tampil_suket011', $data_detail);
		} elseif ($id_nama_surat == 12) {
			$this->load->view('warga/suket_012/tampil_suket012', $data_detail);
		} elseif ($id_nama_surat == 13) {
			$this->load->view('warga/suket_013/tampil_suket013', $data_detail);
		} elseif ($id_nama_surat == 14) {
			$this->load->view('warga/suket_014/tampil_suket014', $data_detail);
		}
		$this->load->view('footer');
	}

	public function cetak_surat($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_001($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_001/cetak_suket001', $data_detail, true);
		$dompdf->set_base_path("../../assets/dashboard/css");
		// $html .= '<link href="../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet" />';
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Usaha');
	}

	public function cetak_surat002($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_002($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_002/cetak_suket002', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Domisili');
	}

	public function cetak_surat003($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_003($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_003/cetak_suket003', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Belum Memiliki Rumah');
	}

	public function cetak_surat004($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_004($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_004/cetak_suket004', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Beda Nama');
	}

	public function cetak_surat005($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_005($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_005/cetak_suket005', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Izin Keramaian');
	}

	public function cetak_surat006($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_006($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_006/cetak_suket006', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Belum Pernah Menikah');
	}

	public function cetak_surat007($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_007($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_007/cetak_suket007', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Tidak Mampu');
	}

	public function cetak_surat008($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_008($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_008/cetak_suket008', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Janda');
	}

	public function cetak_surat009($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_009($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_009/cetak_suket009', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Kematian');
	}

	public function cetak_surat010($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_010($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_010/cetak_suket010', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Kelahiran');
	}

	public function cetak_surat011($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_011($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_011/cetak_suket011', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Pengantar KTP');
	}

	public function cetak_surat012($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_012($id_permohonan_surat)->result();
		$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_012/cetak_suket012', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Pengantar KK');
	}

	public function cetak_surat013($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_013($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_013/cetak_suket013', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Penghasilan');
	}

	public function cetak_surat014($id_permohonan_surat)
	{

		$data_detail['warga'] = $this->db->get_where('warga', ['id_warga' =>
		$this->session->userdata('id_warga')])->row_array();

		$data_detail['data_kades'] = $this->m_warga->get_data_kades()->result();
		$data_detail['detail_permohonan'] = $this->m_warga->get_data_permohonan($id_permohonan_surat, 'permohonan_surat')->result();
		$data_detail['detail_suket'] = $this->m_warga->get_detail_014($id_permohonan_surat)->result();
		$data_detail['pengikut'] = $this->m_warga->get_data_pengikut($id_permohonan_surat)->result();

		$dompdf = new Dompdf();

		$html = $this->load->view('warga/suket_014/cetak_suket014', $data_detail, true);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$dompdf->stream('Surat Keterangan Pindah');
	}
}
