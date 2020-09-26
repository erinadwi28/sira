<?php
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

	public function form_suket001($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket001($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket002($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket002($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket003($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket003($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket004($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket004($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket005($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_005/form_suket005', $data_detail);
		$this->load->view('footer');
	}

	// aksi tambah permohonan suket006
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

		$this->m_warga->tambah_suket005($data_surat);

		$data_lampiran = array(
			'id_permohonan_surat' => $id_permohonan,
			'syarat' => $this->input->post('foto_ktp'),
		);

		$this->m_warga->tambah_lampiran_suket_005($data_lampiran);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket006($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket006($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket007($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket007($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket008($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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
			'tanggal_lahir_suami' => $this->input->post('tanggal_lahir_istri'),
			'pekerjaan_suami' => $this->input->post('pekerjaan_suami'),
			'alasan' => $this->input->post('alasan'),
		);

		$this->m_warga->tambah_suket008($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket009($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket009($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket010($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket010($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket011($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_011/form_suket011', $data_detail);
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
	public function form_suket012($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_012/form_suket012', $data_detail);
		$this->load->view('footer');
	}
	public function list_pengikut_suket012()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_012/list_pengikut_suket012');
		$this->load->view('footer');
	}
	public function tambah_pengikut_suket012()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_012/tambah_pengikut_suket012');
		$this->load->view('footer');
	}
	public function ubah_pengikut_suket012()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_012/ubah_pengikut_suket012');
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
	public function form_suket013($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
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

		$this->m_warga->tambah_suket013($data_surat);

		$this->session->set_flashdata('success', 'diajukan');
		redirect('warga');
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
	public function form_suket014($id_warga)
	{
		$data['warga'] = $this->db->get_where('warga', ['nik' =>
		$this->session->userdata('nik')])->row_array();


		$data_detail['detail_profil'] = $this->m_warga->get_data_profil($id_warga, 'warga')->result();

		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar', $data);
		$this->load->view('warga/suket_014/form_suket014', $data_detail);
		$this->load->view('footer');
	}
	public function list_pengikut_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/list_pengikut_suket014');
		$this->load->view('footer');
	}
	public function tambah_pengikut_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/tambah_pengikut_suket014');
		$this->load->view('footer');
	}
	public function ubah_pengikut_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/ubah_pengikut_suket014');
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
