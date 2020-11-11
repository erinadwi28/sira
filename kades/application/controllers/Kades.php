<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kades extends CI_Controller
{
        public function __construct()
        {
                parent::__construct(); 
                $this->load->model('M_kades', 'm_kades');

                if (!$this->session->userdata('role_kades')) {
                        redirect('login');
                }
        }

        public function index()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array(); 

                $data_jumlah['data_kades'] = $this->m_kades->ambil_nama_kades()->result();
                $data_jumlah['jumlah_rt'] = $this->m_kades->jumlah_rt()->result();
                $data_jumlah['jumlah_warga'] = $this->m_kades->jumlah_warga()->result();
                $data_jumlah['jumlah_admin'] = $this->m_kades->jumlah_admin()->result();
                $data_jumlah['jumlah_permohonan_masuk'] = $this->m_kades->jumlah_permohonan_masuk()->result();
                $data_jumlah['jumlah_permohonan_ditolak'] = $this->m_kades->jumlah_permohonan_ditolak()->result();
                $data_jumlah['jumlah_permohonan_selesai'] = $this->m_kades->jumlah_permohonan_selesai()->result();
                $data_jumlah['jumlah_riwayat_permohonan'] = $this->m_kades->jumlah_riwayat_permohonan()->result();
                $data_jumlah['jumlah_surat_masuk'] = $this->m_kades->jumlah_surat_masuk()->result();
                $data_jumlah['jumlah_surat_keluar'] = $this->m_kades->jumlah_surat_keluar()->result();
                
                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/dashboard_kades', $data_jumlah);
                $this->load->view('footer');
        }

       //tampil profil saya
    public function profil_saya($id_kades)
    {
        $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
        $this->session->userdata('id_kades')])->row_array();

        $detailhere = array('id_kades' => $id_kades);
        $data_detail['detail_profil_saya'] = $this->m_kades->get_detail_profil_saya($detailhere, 'kepala_desa')->result();

        $data_detail['foto_profil'] = $this->m_kades->get_foto_profil_profil_saya($id_kades)->result();

        $data_detail['foto_ktp'] = $this->m_kades->get_foto_ktp_profil_saya($id_kades)->result();

        $data_detail['foto_kk'] = $this->m_kades->get_foto_kk_profil_saya($id_kades)->result();

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar', $data);
        $this->load->view('kades/profil_saya', $data_detail);
        $this->load->view('footer');
	}

        // // tampil form ubah profil saya beserta datanya
        // public function form_ubah_profil_saya($id_kades)
        // {
        //         $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
        //         $this->session->userdata('id_kades')])->row_array();

        //         $detailhere = array('id_kades' => $id_kades);
        //         $data_detail['detail_profil_saya'] = $this->m_kades->get_detail_profil_saya($detailhere,'kepala_desa')->result();

        //         $this->load->view('header');
        //         $this->load->view('kades/sidebar_kades');
        //         $this->load->view('topbar', $data);
        //         $this->load->view('kades/form_ubah_profil_saya', $data_detail);
        //         $this->load->view('footer');
        // }
	
	// // aksi ubah profil saya
        // public function aksi_ubah_profil_saya()
        // {
        // $data = array(
        //         'nik' => $this->input->post('nik'),
        //         'nip' => $this->input->post('nip'),
        //         'nama' => $this->input->post('nama'),
        //         'alamat' => $this->input->post('alamat'),
        //         'rt' => $this->input->post('rt'),
        //         'kelurahan' => $this->input->post('kelurahan'),
        //         'kecamatan' => $this->input->post('kecamatan'),
        //         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        //         'agama' => $this->input->post('agama'),
        //         'tempat_lahir' => $this->input->post('tempat_lahir'),
        //         'tanggal_lahir' => $this->input->post('tanggal_lahir'),
        //         'status_perkawinan' => $this->input->post('status_perkawinan'),
        //         'pekerjaan' => $this->input->post('pekerjaan'),
        //         'golongan_darah' => $this->input->post('golongan_darah'),
        //         'kewarganegaraan' => $this->input->post('kewarganegaraan'),
        //         'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
        //         'no_kk' => $this->input->post('no_kk'),
        //         'status_hub_kel' => $this->input->post('status_hub_kel'),
        //         'no_hp' => $this->input->post('no_hp'),
        // );

        // $detailhere = $this->input->post('id_kades');

        // $this->m_kades->aksi_ubah_data_profil_saya($detailhere, $data, 'kepala_desa');

        // $this->session->set_flashdata('success', 'diubah');
        // redirect('kades/profil_saya/' . $detailhere);
	// }
	
        // upload foto profil kades

        public function upload_foto_profil()
        {
                $where = $this->input->post('id_kades');
                if ($_FILES != null) {
                $this->aksi_upload_foto_profil($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('kades/profil_saya/'.$where);
        }

        //upload foto profil kades
        private function aksi_upload_foto_profil($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name'] 	        = 'foto_kades-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_kades = $this->input->post('id_kades');
                $jumlah_berkas = count($_FILES['berkas']['name']);
                for($i = 0; $i < $jumlah_berkas;$i++)
                {
                if(!empty($_FILES['berkas']['name'][$i])){
        
                                $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
                                $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
                                $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
                                $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
                                $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
                                        
                                if($this->upload->do_upload('file')){

                                // $ambil = $this->m_admin->get_foto_profil_kades($id_kades);
                                // $r = $ambil->row();
                                // unlink(".../assets/uploads/kades/".$r->nama_foto);

                                        $uploadData = $this->upload->data();
                                
                                $data['foto_profil_kades'] = $uploadData['file_name'];
                                // $data['keterangan'] = $keterangan[$i];
                                // $data['id_kades'] = $id_kades;

                                // $data_detail = $this->input->post('id_kades');

                                $this->db->where('id_kades', $id_kades);
                                $this->db->update('kepala_desa',$data);
                        }
                }
                        }
        }

        // upload foto ktp kades
        public function upload_foto_ktp()
        {
                $where = $this->input->post('id_kades');
                if ($_FILES != null) {
                $this->aksi_upload_foto_ktp($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('kades/profil_saya/'.$where);
        }

        //upload foto ktp kades
        private function aksi_upload_foto_ktp($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name'] 	        = 'foto_kades-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_kades = $this->input->post('id_kades');
                $jumlah_berkas = count($_FILES['berkas']['name']);
                for($i = 0; $i < $jumlah_berkas;$i++)
                {
                        if(!empty($_FILES['berkas']['name'][$i])){
        
                                $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
                                $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
                                $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
                                $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
                                $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
                                        
                                if($this->upload->do_upload('file')){

                                        // $ambil = $this->m_admin->get_foto_profil_kades($id_kades);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/kades/".$r->nama_foto);

                                        $uploadData = $this->upload->data();
                                
                                        $data['foto_ktp_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_kades'] = $id_kades;

                                        // $data_detail = $this->input->post('id_kades');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa',$data);
                                }
                        }
                }
        }

        // upload foto kk kades
        public function upload_foto_kk()
        {
                $where = $this->input->post('id_kades');
                if ($_FILES != null) {
                $this->aksi_upload_foto_kk($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('kades/profil_saya/'.$where);
        }

        //upload foto kk kades
        private function aksi_upload_foto_kk($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                        // $config['max_size']             = 2048;
                        $config['file_name'] 	        = 'foto_kades-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_kades = $this->input->post('id_kades');
                        $jumlah_berkas = count($_FILES['berkas']['name']);
                        for($i = 0; $i < $jumlah_berkas;$i++)
                        {
                if(!empty($_FILES['berkas']['name'][$i])){
        
                                        $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
                                        $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
                                        $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
                                        $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
                        $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
                                        
                                        if($this->upload->do_upload('file')){

                        // $ambil = $this->m_admin->get_foto_profil_kades($id_kades);
                        // $r = $ambil->row();
                        // unlink(".../assets/uploads/kades/".$r->nama_foto);

                                                $uploadData = $this->upload->data();
                                
                        $data['foto_kk_kades'] = $uploadData['file_name'];
                        // $data['keterangan'] = $keterangan[$i];
                        // $data['id_kades'] = $id_kades;

                        // $data_detail = $this->input->post('id_kades');

                        $this->db->where('id_kades', $id_kades);
                        $this->db->update('kepala_desa',$data);
                                        }
                                }
                        }
                }
                
                // tampil form ubah kata sandi profil saya
        public function form_ubah_kata_sandi_profil_saya($id_kades)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $detailhere = array('id_kades' => $id_kades);
                $data_detail['detail_profil_saya'] = $this->m_kades->get_detail_profil_saya($detailhere,'kepala_desa')->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/form_ubah_kata_sandi_profil_saya', $data_detail);
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

                $where = $this->input->post('id_kades');

                if ($this->m_kades->ubah_kata_sandi_profil_saya($where, $data, 'kepala_desa')); {
                $this->session->set_flashdata('success', 'diubah');
                redirect('kades/form_ubah_kata_sandi_profil_saya/'.$where);
                }
        }

        public function list_data_admin()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_list['data_admin'] = $this->m_kades->get_data_admin()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_admin', $data_list);
                $this->load->view('footer');        
        }

        public function detail_data_admin($id_admin)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $detailhere = array('id_admin' => $id_admin);
                $data_detail['detail_admin'] = $this->m_kades->get_detail_admin($detailhere, 'admin')->result();

                $data_detail['foto_profil'] = $this->m_kades->get_foto_profil_admin($id_admin)->result();

                $data_detail['foto_ktp'] = $this->m_kades->get_foto_ktp_admin($id_admin)->result();

                $data_detail['foto_kk'] = $this->m_kades->get_foto_kk_admin($id_admin)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/detail_data_admin', $data_detail);
                $this->load->view('footer');
        }

        public function form_tambah_admin()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/form_tambah_admin');
                $this->load->view('footer');
        }

        // aksi tambah data warga
        public function aksi_tambah_admin() 
        {       
                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);
                $data = array(
			'nik' => $this->input->post('nik'),
			'nip' => $this->input->post('nip'),
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
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'jabatan' => $this->input->post('jabatan'),
                        'kata_sandi' => $kata_sandi_hash,
                );

		$this->m_kades->tambah_admin($data);
		$this->session->set_flashdata('success', 'ditambahkan');
                redirect('kades/list_data_admin');
        }

        // aksi hapus data admin
        public function aksi_hapus_admin($id_admin)
        {
                $this->m_kades->hapus_admin($id_admin);

                $this->session->set_flashdata('success', 'dinonaktifkan');
                redirect('kades/list_data_admin');
        }

        
        //list data rt
        public function list_data_rt()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_rt['data_rt'] = $this->m_kades->get_data_rt()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_rt', $data_rt);
                $this->load->view('footer');
        }

        //detail data rt
        public function detail_data_rt($id_rt)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_detail['detail_rt'] = $this->m_kades->get_detail_rt($id_rt)->result();

                $data_detail['foto_profil'] = $this->m_kades->get_foto_profil_rt($id_rt)->result();

                $data_detail['foto_ktp'] = $this->m_kades->get_foto_ktp_rt($id_rt)->result();

                $data_detail['foto_kk'] = $this->m_kades->get_foto_kk_rt($id_rt)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/detail_data_rt', $data_detail);
                $this->load->view('footer');
        }

        //list data warga
        public function list_data_warga() 
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_warga['data_warga'] = $this->m_kades->get_data_warga()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_warga', $data_warga);
                $this->load->view('footer');
        }

        //detail data warga
        public function detail_data_warga($id_warga)
	{       
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $where = array('id_warga' => $id_warga);
                $data_detail['detail_warga'] = $this->m_kades->get_detail_warga($where,'warga')->result();

                $data_detail['foto_profil'] = $this->m_kades->get_foto_profil_warga($id_warga)->result();

                $data_detail['foto_ktp'] = $this->m_kades->get_foto_ktp_warga($id_warga)->result();

                $data_detail['foto_kk'] = $this->m_kades->get_foto_kk_warga($id_warga)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/detail_data_warga', $data_detail);
                $this->load->view('footer');
        }

        public function list_riwayat_permohonan()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_permohonan['data_riwayat_permohonan'] = $this->m_kades->get_list_riwayat_permohonan()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_riwayat_permohonan', $data_permohonan);
                $this->load->view('footer');        
        }

        // filter tanggal riwayat permohonan
        public function filter_riwayat_permohonan()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');
                
                $data_permohonan['data_riwayat_permohonan'] = $this->m_kades->filter_riwayat($tgl_awal, $tgl_akhir)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_riwayat_permohonan', $data_permohonan);
                $this->load->view('footer');
        }

        //detail data permohonan
        public function detail_data_permohonan($id_permohonan_surat, $id_nama_surat)
	{       
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                if($id_nama_surat == 1){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_001($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 2){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_002($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 3){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_003($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 4){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_004($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 5){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_005($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 6){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_006($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 7){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_007($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 8){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_008($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 9){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_009($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 10){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_010($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 11){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_011($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 12){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_012($id_permohonan_surat)->result();
                        $data_detail['detail_pengikut'] = $this->m_kades->get_detail_pengikut($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 13){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_013($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 14){
                        $data_detail['detail_permohonan_masuk'] = $this->m_kades->get_detail_014($id_permohonan_surat)->result();
                        $data_detail['detail_pengikut'] = $this->m_kades->get_detail_pengikut($id_permohonan_surat)->result();
                } 

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                if($id_nama_surat == 1){
                $this->load->view('kades/detail_permohonan_001', $data_detail);
                } elseif($id_nama_surat == 2) {
                $this->load->view('kades/detail_permohonan_002', $data_detail);
                } elseif($id_nama_surat == 3) {
                $this->load->view('kades/detail_permohonan_003', $data_detail);
                } elseif($id_nama_surat == 4) {
                $this->load->view('kades/detail_permohonan_004', $data_detail);
                } elseif($id_nama_surat == 5) {
                $this->load->view('kades/detail_permohonan_005', $data_detail);
                } elseif($id_nama_surat == 6) {
                $this->load->view('kades/detail_permohonan_006', $data_detail);
                } elseif($id_nama_surat == 7) {
                $this->load->view('kades/detail_permohonan_007', $data_detail);
                } elseif($id_nama_surat == 8) {
                $this->load->view('kades/detail_permohonan_008', $data_detail);
                } elseif($id_nama_surat == 9) {
                $this->load->view('kades/detail_permohonan_009', $data_detail);
                } elseif($id_nama_surat == 10) {
                $this->load->view('kades/detail_permohonan_010', $data_detail);
                } elseif($id_nama_surat == 11) {
                $this->load->view('kades/detail_permohonan_011', $data_detail);
                } elseif($id_nama_surat == 12) {
                $this->load->view('kades/detail_permohonan_012', $data_detail);
                } elseif($id_nama_surat == 13) {
                $this->load->view('kades/detail_permohonan_013', $data_detail);
                } elseif($id_nama_surat == 14) {
                $this->load->view('kades/detail_permohonan_014', $data_detail);
                } 
                $this->load->view('footer');
        }

        //list surat masuk
        public function list_surat_masuk()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_list['data_surat_masuk'] = $this->m_kades->get_data_surat_masuk()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_surat_masuk', $data_list);
                $this->load->view('footer');
        }

        //detail surat masuk
        public function detail_surat_masuk($id_sm)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $detailhere = array('id_sm' => $id_sm);
                $data_detail['detail_surat_masuk'] = $this->m_kades->get_detail_surat_masuk($detailhere, 'surat_masuk')->result();

                $data_detail['lampiran'] = $this->m_kades->get_lampiran($id_sm)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/detail_surat_masuk', $data_detail);
                $this->load->view('footer');
        }

        // filter tanggal surat masuk
        public function filter_surat_masuk()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');
                        
                $data_list['data_surat_masuk'] = $this->m_kades->filter_surat_masuk($tgl_awal, $tgl_akhir)->result();

                // redirect('admin/list_surat_masuk');
                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_surat_masuk', $data_list);
                $this->load->view('footer');
        }

        //download lampiran surat masuk
        function download_lampiran_surat_masuk($id_sm)
	{
		$data = $this->db->get_where('surat_masuk',['id_sm'=>$id_sm])->row();
		force_download('../assets/uploads/admin/lampiran_sm/'.$data->lampiran,NULL);
        }

        //list surat keluar
        public function list_surat_keluar()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_list['data_surat_keluar'] = $this->m_kades->get_data_surat_keluar()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_surat_keluar', $data_list);
                $this->load->view('footer');
        }

        //detail surat keluar
        public function detail_surat_keluar($id_sk)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $detailhere = array('id_sk' => $id_sk);
                $data_detail['detail_surat_keluar'] = $this->m_kades->get_detail_surat_keluar($detailhere, 'surat_keluar')->result();

                $data_detail['lampiran'] = $this->m_kades->get_lampiran_surat_keluar($id_sk)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/detail_surat_keluar', $data_detail);
                $this->load->view('footer');
        }

        // filter tanggal surat keluar
        public function filter_surat_keluar()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');
                        
                $data_list['data_surat_keluar'] = $this->m_kades->filter_surat_keluar($tgl_awal, $tgl_akhir)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_surat_keluar', $data_list);
                $this->load->view('footer');
        }

        //download lampiran surat keluar
        function download_lampiran_surat_keluar($id_sk)
	{
		$data = $this->db->get_where('surat_keluar',['id_sk'=>$id_sk])->row();
		force_download('../assets/uploads/admin/lampiran_sk/'.$data->lampiran,NULL);
        }

        //list data feedback
        public function list_feedback()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $data_feedback['data_feedback'] = $this->m_kades->get_data_feedback()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_feedback', $data_feedback);
                $this->load->view('footer');
        }

        //detail data feedback
        public function detail_data_feedback($id_pesan)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $detailhere = array('id_pesan' => $id_pesan);
                $data_detail['detail_feedback'] = $this->m_kades->get_detail_data_feedback($detailhere, 'pesan')->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/detail_data_feedback', $data_detail);
                $this->load->view('footer');
        }
}
