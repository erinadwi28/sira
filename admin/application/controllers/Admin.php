<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
        public function __construct()
        {
                parent::__construct();
                $this->load->model('M_admin', 'm_admin');
                
                if (!$this->session->userdata('role_admin')) {
			redirect('login');
		}
        }

	public function index()
	{   
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();
                
                $this->load->view('header', $data);
                $this->load->view('admin/sidebar_admin', $data);
                $this->load->view('topbar', $data);
                $this->load->view('admin/dashboard_admin', $data);
                $this->load->view('footer');
        }

        //list data kepala desa
        public function list_data_kades()
	{
                $data_kades = $this->m_admin->get_data_kades();
                $result = array(
                'list_data' => $data_kades,
                'page' => 'admin/list_data_kades',
                );

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        //detail data kepala desa
        public function detail_data_kades($id_kades)
	{
		$data_profil = $this->m_admin->get_detail_kades($id_kades);

		$result = array(
			'data_detail'=>$data_profil,
			'page'=>'admin/detail_data_kades',
                );
                
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        //tampil form tambah data kepala desa
        public function form_tambah_kades()
	{
                $result = array(
                'page'=>'admin/form_tambah_kades',
                );
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        // aksi tambah data kepala desa
        public function aksi_tambah_kades() 
        {
                $data = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
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
                        'foto_profil_kades' => $this->input->post('foto_kades'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'foto_ktp' => $this->input->post('foto_ktp'),
                        'foto_kk' => $this->input->post('foto_kk'),
                        'foto_ttd' => $this->input->post('foto_ttd'),
                        'status_kepegawaian' => $this->input->post('status_kepegawaian'),
                );

                $this->m_admin->tambah_kades($data);

		if($this->m_admin->tambah_kades($data)){
			$this->session->set_flashdata('success', 'Data Kepala Desa berhasil ditambahkan');
                        redirect('admin/list_data_admin');
		} else {
			$this->session->set_flashdata('error', 'Data Kepala Desa gagal ditambahkan');
                        redirect('admin/form_tambah_admin');
		}
                
        }

        // tampil form ubah kades beserta datanya
        public function form_ubah_kades($id_kades)
        {
                $where = array('id_kades' => $id_kades);
		$data['kades'] = $this->m_admin->ubah_kades($where,'kades')->result();
		$this->load->view('header','admin/sidebar_admin','topbar','admin/form_ubah_kades',$data,'footer');
        }

        // aksi ubah kades
        public function aksi_ubah_kades()
        {
                $data = array(
                        'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
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
                        'foto_profil_kades' => $this->input->post('foto_kades'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'foto_ktp' => $this->input->post('foto_ktp'),
                        'foto_kk' => $this->input->post('foto_kk'),
                        'foto_ttd' => $this->input->post('foto_ttd'),
                        'status_kepegawaian' => $this->input->post('status_kepegawaian'),
                );

                $where = array(
                        'id_kades' => $this->input->post('id_kades'),
                );

                if($this->m_admin->aksi_ubah_data_kades($where,$data,'kepala_desa')){
                        $this->session->set_flashdata('success', 'Data Kepala Desa berhasil diubah');
                        redirect('admin/list_data_kades');
                } else {
                        $this->session->set_flashdata('error', 'Data Kepala Desa gagal diubah');
                        redirect('admin/list_data_kades');
                }
        }

        // aksi hapus data kepala desa
        public function aksi_hapus_kades($id_kades){
                $this->m_admin->hapus_kades($id_kades);

                if($this->m_admin->hapus_kades($id_kades)){
			$this->session->set_flashdata('success', 'Data Kepala Desa berhasil dihapus');
                        redirect('admin/list_data_kades');
		} else {
			$this->session->set_flashdata('error', 'Data Kepala Desa gagal dihapus');
                        redirect('admin/list_data_kades');
		}
        }

        public function list_data_rt()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_data_rt');
                $this->load->view('footer');
        }

        public function form_tambah_rt()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_rt');
                $this->load->view('footer');
        }

        //list data warga
        public function list_data_warga()
	{
                $data_warga = $this->m_admin->get_data_warga();
                $result = array(
                'list_data' => $data_warga,
                'page' => 'admin/list_data_warga',
                );

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        //detail data warga
        public function detail_data_warga($id_warga)
	{       
                $data_profile = $this->m_admin->get_detail_warga($id_warga);

		$result = array(
			'data_detail'=>$data_profile,
			'page'=>'admin/detail_data_warga',
                );
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        //tampil form tambah data warga
        public function form_tambah_warga()
	{
                $result = array(
                'page'=>'admin/form_tambah_warga',
                );

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        // aksi tambah data warga
        public function aksi_tambah_warga() 
        {
                $data = array(
			'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'alamat' => $this->input->post('alamat'),
                        'rt' => $this->input->post('rt'),
                        'kelurahan' => $this->input->post('kelurahan'),
                        'kecamatan' => $this->input->post('kecamatan'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'status_perkawinan' => $this->input->post('status_perkawinan'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                        'golongan_darah' => $this->input->post('golongan_darah'),
                        'kata_sandi' => $this->input->post('kata_sandi'),
                        'foto_profil_warga' => $this->input->post('foto_kades'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'foto_ktp' => $this->input->post('foto_ktp'),
                        'foto_kk' => $this->input->post('foto_kk'),
                );

                $this->m_admin->tambah_warga($data);

		if($this->m_admin->tambah_warga($data)){
			$this->session->set_flashdata('success', 'Data Warga berhasil ditambahkan');
                        redirect('admin/list_data_warga');
		} else {
                        $this->session->set_flashdata('error', 'Data Warga gagal ditambahkan');
                        redirect('admin/form_tambah_warga');
		}
        }

        // tampil form ubah warga beserta datanya
        public function form_ubah_warga($id_warga)
        {
                $where = array('id_warga' => $id_warga);
		$data['warga'] = $this->m_admin->ubah_warga($where,'warga')->result();
		$this->load->view('header','admin/sidebar_admin','topbar','admin/form_ubah_warga',$data,'footer');
        }

        // aksi ubah warga
        public function aksi_ubah_warga()
        {
                $data = array(
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'alamat' => $this->input->post('alamat'),
                        'rt' => $this->input->post('rt'),
                        'kelurahan' => $this->input->post('kelurahan'),
                        'kecamatan' => $this->input->post('kecamatan'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'agama' => $this->input->post('agama'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                        'status_perkawinan' => $this->input->post('status_perkawinan'),
                        'pekerjaan' => $this->input->post('pekerjaan'),
                        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                        'golongan_darah' => $this->input->post('golongan_darah'),
                        'kata_sandi' => $this->input->post('kata_sandi'),
                        'foto_profil_warga' => $this->input->post('foto_kades'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'foto_ktp' => $this->input->post('foto_ktp'),
                        'foto_kk' => $this->input->post('foto_kk'),
                );

                $where = array(
                        'id_warga' => $this->input->post('id_warga'),
                );

                if($this->m_admin->aksi_ubah_data_warga($where,$data,'warga')){
                        $this->session->set_flashdata('success', 'Data Warga berhasil diubah');
                        redirect('admin/list_data_warga');
                } else {
                        $this->session->set_flashdata('error', 'Data Warga gagal diubah');
                        redirect('admin/list_data_warga');
                }
        }

        // aksi hapus data warga
        public function aksi_hapus_warga($id_warga){
                $this->m_admin->hapus_warga($id_warga);

                if($this->m_admin->hapus_warga($id_warga)){
			$this->session->set_flashdata('success', 'Data Warga berhasil dihapus');
                        redirect('admin/list_data_warga');
		} else {
			$this->session->set_flashdata('error', 'Data Warga gagal dihapus');
                        redirect('admin/list_data_warga');
		}
        }

        public function list_data_permohonan()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_data_permohonan');
                $this->load->view('footer');
        }


        public function list_surat_masuk()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_surat_masuk');
                $this->load->view('footer');
        }

        public function detail_surat_masuk()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_surat_masuk');
                $this->load->view('footer');
        }

        public function form_tambah_surat_masuk()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_surat_masuk');
                $this->load->view('footer');
        }

        public function ubah_surat_masuk()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/ubah_surat_masuk');
                $this->load->view('footer');
        }

        public function list_surat_keluar()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_surat_keluar');
                $this->load->view('footer');
        }

        public function detail_surat_keluar()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/detail_surat_keluar');
                $this->load->view('footer');
        }

        public function form_tambah_surat_keluar()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/form_tambah_surat_keluar');
                $this->load->view('footer');
        }

        public function ubah_surat_keluar()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/ubah_surat_keluar');
                $this->load->view('footer');
        }

        public function list_permohonan_selesai()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/list_permohonan_selesai');
                $this->load->view('footer');
        }

        public function detail_suket001()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_001/detail_suket001');
                $this->load->view('footer');
        }


        public function tampil_suket001()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_001/tampil_suket001');
                $this->load->view('footer');
        }

        public function detail_suket002()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_002/detail_suket002');
                $this->load->view('footer');
        }


        public function tampil_suket002()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_002/tampil_suket002');
                $this->load->view('footer');
        }

        public function detail_suket003()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_003/detail_suket003');
                $this->load->view('footer');
        }


        public function tampil_suket003()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_003/tampil_suket003');
                $this->load->view('footer');
        }

        public function detail_suket004()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_004/detail_suket004');
                $this->load->view('footer');
        }


        public function tampil_suket004()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_004/tampil_suket004');
                $this->load->view('footer');
        }

        public function detail_suket005()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_005/detail_suket005');
                $this->load->view('footer');
        }


        public function tampil_suket005()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_005/tampil_suket005');
                $this->load->view('footer');
        }

        public function detail_suket006()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_006/detail_suket006');
                $this->load->view('footer');
        }


        public function tampil_suket006()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_006/tampil_suket006');
                $this->load->view('footer');
        }

        public function detail_suket007()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_007/detail_suket007');
                $this->load->view('footer');
        }


        public function tampil_suket007()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_007/tampil_suket007');
                $this->load->view('footer');
        }

        public function detail_suket008()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_008/detail_suket008');
                $this->load->view('footer');
        }


        public function tampil_suket008()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_008/tampil_suket008');
                $this->load->view('footer');
        }

        public function detail_suket009()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_009/detail_suket009');
                $this->load->view('footer');
        }


        public function tampil_suket009()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_009/tampil_suket009');
                $this->load->view('footer');
        }

        public function detail_suket010()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_010/detail_suket010');
                $this->load->view('footer');
        }


        public function tampil_suket010()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_010/tampil_suket010');
                $this->load->view('footer');
        }

        public function detail_suket011()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_011/detail_suket011');
                $this->load->view('footer');
        }


        public function tampil_suket011()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_011/tampil_suket011');
                $this->load->view('footer');
        }

        public function detail_suket012()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_012/detail_suket001');
                $this->load->view('footer');
        }


        public function tampil_suket012()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_012/tampil_suket001');
                $this->load->view('footer');
        }

        public function detail_suket013()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_013/detail_suket013');
                $this->load->view('footer');
        }


        public function tampil_suket013()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_013/tampil_suket013');
                $this->load->view('footer');
        }

        public function detail_suket014()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_014/detail_suket014');
                $this->load->view('footer');
        }


        public function tampil_suket014()
	{
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar');
                $this->load->view('admin/suket_014/tampil_suket014');
                $this->load->view('footer');
        }

}
