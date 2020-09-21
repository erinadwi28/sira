<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
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
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $data_kades['data_kades'] = $this->m_admin->get_data_kades()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_kades', $data_kades);
                $this->load->view('footer');
        }
        
        //detail data kepala desa
        public function detail_data_kades($id_kades)
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $detailhere = array('id_kades' => $id_kades);
                $data_detail['detail_kades'] = $this->m_admin->get_detail_kades($detailhere, 'kepala_desa')->result();

                $data_detail['foto_profil'] = $this->m_admin->get_foto_profil_kades($id_kades)->result();

                $data_detail['foto_ktp'] = $this->m_admin->get_foto_ktp_kades($id_kades)->result();

                $data_detail['foto_kk'] = $this->m_admin->get_foto_kk_kades($id_kades)->result();

                $data_detail['foto_ttd'] = $this->m_admin->get_foto_ttd_kades($id_kades)->result();


               
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/detail_data_kades', $data_detail);
                $this->load->view('footer');
        }
        
        //tampil form tambah kades
        public function form_tambah_kades()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_tambah_kades');
                $this->load->view('footer');
        }

        // aksi tambah data kepala desa
        public function aksi_tambah_kades()
        {
                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);
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
                        'kata_sandi' => $kata_sandi_hash,
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                );

                $this->m_admin->tambah_kades($data);
                $this->session->set_flashdata('success', 'ditambahkan');
                redirect('admin/list_data_kades');
        }

        // tampil form ubah kades beserta datanya
        public function form_ubah_kades($id_kades)
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $detailhere = array('id_kades' => $id_kades);
                $data_detail['detail_kades'] = $this->m_admin->get_detail_kades($detailhere,'kepala_desa')->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_ubah_kades', $data_detail);
                $this->load->view('footer');
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
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                );

                $detailhere = $this->input->post('id_kades');

                $this->m_admin->aksi_ubah_data_kades($detailhere, $data, 'kepala_desa');

                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_kades/' . $detailhere);
        }

        // upload foto profil kades
        public function upload_foto_profil_kades()
        {
                $where = $this->input->post('id_kades');
                if ($_FILES != null) {
                $this->aksi_upload_foto_profil_kades($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_kades/'.$where);
        }

        //upload foto profil kades
        private function aksi_upload_foto_profil_kades($id_kades)
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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();
                        
                                        $data['foto_profil_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa',$data);
				}
			}
		}
        }

        // upload foto ktp kades
        public function upload_foto_ktp_kades()
        {
                $where = $this->input->post('id_kades');
                if ($_FILES != null) {
                $this->aksi_upload_foto_ktp_kades($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_kades/'.$where);
        }

        // upload foto ktp kades
        private function aksi_upload_foto_ktp_kades($id_kades)
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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();
                        
                                        $data['foto_ktp_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa',$data);
				}
			}
		}
        }

        // upload foto kk kades
        public function upload_foto_kk_kades()
        {
                $where = $this->input->post('id_kades');
                if ($_FILES != null) {
                $this->aksi_upload_foto_kk_kades($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_kades/'.$where);
        }

        //upload foto kk kades
        private function aksi_upload_foto_kk_kades($id_kades)
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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();
                        
                                        $data['foto_kk_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa',$data);
				}
			}
		}
        }

        // upload foto ttd kades
        public function upload_foto_ttd_kades()
        {
                $where = $this->input->post('id_kades');
                if ($_FILES != null) {
                $this->aksi_upload_foto_ttd_kades($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_kades/'.$where);
        }

        //upload foto ttd kades
        private function aksi_upload_foto_ttd_kades($id_kades)
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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();
                        
                                        $data['foto_ttd_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa',$data);
				}
			}
		}
        }

        // aksi hapus data kepala desa
        public function aksi_hapus_kades($id_kades)
        {
                $this->m_admin->hapus_kades($id_kades);

                $this->session->set_flashdata('success', 'dihapus');
                redirect('admin/list_data_kades');
        }

        //list data mantan kepala desa
        public function list_data_mantan_kades()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $data_kades['data_kades'] = $this->m_admin->get_data_mantan_kades()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_mantan_kades', $data_kades);
                $this->load->view('footer');
        }

        //tampil form cari nik ubah password
        public function form_cari_nik_ubah_kata_sandi_kades()
        {

                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_cari_nik_ubah_kata_sandi_kades');
                $this->load->view('footer');
        }

        //aksi cari nik ubah password kades
        public function aksi_cari_nik_ubah_kata_sandi_kades()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $nik_kades = $this->input->post('nik');
                $detailhere = array('nik' => $nik_kades);
                $data_detail['detail_kades'] = $this->m_admin->cari_nik_kades($detailhere, 'kepala_desa')->result();

                if ($this->m_admin->cari_nik_kades($detailhere, 'kepala_desa')) {
                        // $this->session->set_flashdata('success', 'ditemukan');

                        $this->load->view('header');
                        $this->load->view('admin/sidebar_admin');
                        $this->load->view('topbar', $data);
                        $this->load->view('admin/form_ubah_kata_sandi_kades', $data_detail);
                        $this->load->view('footer');
                } else {
                        $this->session->set_flashdata('error', 'tidak ditemukan');
                }
        }

        // aksi ubah kata sandi kades
        public function aksi_ubah_kata_sandi_kades()
        {
                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);
                $data = array(
                        'kata_sandi' => $kata_sandi_hash,
                );

                $detailhere = $this->input->post('id_kades');

                if ($this->m_admin->aksi_ubah_kata_sandi_kades($detailhere, $data, 'kepala_desa')); {
                        $this->session->set_flashdata('success', 'diubah');
                        redirect('admin/list_data_kades');
                }
        }

        //list data rt
        public function list_data_rt()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $data_rt['data_rt'] = $this->m_admin->get_data_rt()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_rt', $data_rt);
                $this->load->view('footer');
        }

        // tampil form cari nik tambah data rt
        public function form_tambah_rt()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_cari_nik_warga');
                $this->load->view('footer');
        }

        //aksi cari nik warga calon rt
        public function cari_nik_calon_rt()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $nik_warga = $this->input->post('nik');
                $detailhere = array('nik' => $nik_warga);
                $data_detail['detail_warga'] = $this->m_admin->cari_nik_calon_rt($detailhere, 'warga')->result();

                if ($this->m_admin->cari_nik_calon_rt($detailhere, 'warga')) {
                        // $this->session->set_flashdata('success', 'Data Berhasil Ditemukan');

                        $this->load->view('header');
                        $this->load->view('admin/sidebar_admin');
                        $this->load->view('topbar', $data);
                        $this->load->view('admin/form_tambah_rt', $data_detail);
                        $this->load->view('footer');
                } else {
                        $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
                        echo "gagal";
                }
        }

        // aksi tambah data rt
        public function aksi_tambah_rt()
        {
                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);
                $data = array(
                        'id_warga' => $this->input->post('id_warga'),
                        'rt' => $this->input->post('rt'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'kata_sandi' => $kata_sandi_hash,
                );

                $this->m_admin->tambah_rt($data);
                $this->session->set_flashdata('success', 'ditambahkan');
                redirect('Admin/list_data_rt');
        }

        //detail data rt
        public function detail_data_rt($id_rt)
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $data_detail['detail_rt'] = $this->m_admin->get_detail_rt($id_rt)->result();

                $data_detail['foto_profil'] = $this->m_admin->get_foto_profil_rt($id_rt)->result();

                $data_detail['foto_ktp'] = $this->m_admin->get_foto_ktp_rt($id_rt)->result();

                $data_detail['foto_kk'] = $this->m_admin->get_foto_kk_rt($id_rt)->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/detail_data_rt', $data_detail);
                $this->load->view('footer');
        }

        // tampil form ubah rt
        public function form_ubah_rt($id_rt)
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $detailhere = $id_rt;
                $data_detail['detai_rt'] = $this->m_admin->get_detail_rt($detailhere, 'rt')->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_ubah_rt', $data_detail);
                $this->load->view('footer');
        }

        // aksi ubah data rt
        public function aksi_ubah_rt()
        {
                $id_rt = $this->input->post('id_rt');
                $id_warga = $this->input->post('id_warga');

                $data_rt = array(
                        'id_warga' => $this->input->post('id_warga'),
                        'rt' => $this->input->post('rt'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                );

                $data_warga = array(
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


                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                );

                $this->m_admin->aksi_ubah_profil_rt($id_rt, $data_rt);
                $this->m_admin->aksi_ubah_profil_rt_warga($id_warga, $data_warga);

                if ($this->m_admin->aksi_ubah_profil_rt($id_rt, $data_rt) && $this->m_admin->aksi_ubah_profil_rt_warga($id_warga, $data_warga)); {
                        $this->session->set_flashdata('success', 'ditambahkan');
                        redirect('admin/detail_data_rt/' . $id_rt);
                }
        }

        // aksi hapus data rt
        public function aksi_hapus_rt($id_rt)
        {
                if ($this->m_admin->hapus_rt($id_rt)); {
                        $this->session->set_flashdata('success', 'dinonaktifkan');
                        redirect('admin/list_data_rt');
                }
        }

        // aksi ubah profil_rt
        public function aksi_ubah_profil_rt()
        {
                $id_rt = $this->input->post('id_rt');
                $id_warga = $this->input->post('id_warga');

                $data_rt = array(
                        'id_warga' => $this->input->post('id_warga'),
                        'rt' => $this->input->post('rt'),
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'status_kepegawaiaan' => $this->input->post('status_kepegawaiaan'),
                        'kata_sandi' => $this->input->post('kata_sandi'),
                        'foto_profil_rt' => $this->input->post('foto_profil_rt'),
                );

                $data_warga = array(
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


                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'foto_ktp' => $this->input->post('foto_ktp'),
                        'foto_kk' => $this->input->post('foto_kk'),
                );

                $this->m_kepala_desa->aksi_ubah_profil_rt($id_rt, $data_rt);
                $this->m_kepala_desa->aksi_ubah_profil_rt_warga($id_warga, $data_warga);

                if ($this->m_kepala_desa->aksi_ubah_profil_rt($id_rt, $data_rt) && $this->m_kepala_desa->aksi_ubah_profil_rt_warga($id_warga, $data_warga)) {
                        $this->session->set_flashdata('success', 'Data Kepala Desa berhasil ditambahkan');
                        echo "sukses";
                } else {
                        $this->session->set_flashdata('error', 'Data Kepala Desa gagal ditambahkan');
                        echo "gagal";
                }
        }

        //list data mantan ketua rt
        public function list_data_mantan_rt()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $data_rt['data_rt'] = $this->m_admin->get_data_mantan_rt()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin', $data);
                $this->load->view('topbar');
                $this->load->view('admin/list_data_mantan_rt', $data_rt);
                $this->load->view('footer');
        }

        //tampil form cari nik ubah password _rt
        public function form_cari_nik_ubah_kata_sandi_rt()
        {

                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_cari_nik_ubah_kata_sandi_rt');
                $this->load->view('footer');
        }

        //aksi cari nik ubah password rt
        public function aksi_cari_nik_ubah_kata_sandi_rt()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $detailhere = $this->input->post('nik');
                $data_detail['detail_rt'] = $this->m_admin->get_detail_rt_ubah_kata_sandi($detailhere)->result();

                if ($this->m_admin->get_detail_rt($detailhere)) {
                        // $this->session->set_flashdata('success', 'Data Berhasil Ditemukan');

                        $this->load->view('header');
                        $this->load->view('admin/sidebar_admin');
                        $this->load->view('topbar', $data);
                        $this->load->view('admin/form_ubah_kata_sandi_rt', $data_detail);
                        $this->load->view('footer');
                } else {
                        $this->session->set_flashdata('error', 'Data Tidak Ditemukan');
                        echo "gagal";
                }
        }

        // aksi ubah kata sandi rt
        public function aksi_ubah_kata_sandi_rt()
        {
                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);
                $data = array(
                        'kata_sandi' => $kata_sandi_hash,
                );

                $detailhere = $this->input->post('id_rt');

                if ($this->m_admin->aksi_ubah_kata_sandi_rt($detailhere, $data, 'rt')); {
                        $this->session->set_flashdata('success', 'diubah');
                        redirect('admin/list_data_rt');
                }
        }

        //list data warga
        public function list_data_warga()
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $data_warga['data_warga'] = $this->m_admin->get_data_warga()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_warga', $data_warga);
                $this->load->view('footer');
        }

        //detail data warga
        public function detail_data_warga($id_warga)
	{       
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $where = array('id_warga' => $id_warga);
                $data_detail['detail_warga'] = $this->m_admin->get_detail_warga($where,'warga')->result();

                $data_detail['foto_profil'] = $this->m_admin->get_foto_profil_warga($id_warga)->result();

                $data_detail['foto_ktp'] = $this->m_admin->get_foto_ktp_warga($id_warga)->result();

                $data_detail['foto_kk'] = $this->m_admin->get_foto_kk_warga($id_warga)->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/detail_data_warga', $data_detail);
                $this->load->view('footer');
        }

        //tampil form tambah data warga
        public function form_tambah_warga()
	{
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_tambah_warga');
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
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                );

		$this->m_admin->tambah_warga($data);
		$this->session->set_flashdata('success', 'ditambahkan');
                redirect('admin/list_data_warga');
		
        }

        // tampil form ubah warga beserta datanya
        public function form_ubah_warga($id_warga)
        {
                $data['admin'] = $this->db->get_where('admin', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $where = array('id_warga' => $id_warga);
                $data_detail['detail_warga'] = $this->m_admin->get_detail_warga($where,'warga')->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_ubah_warga', $data_detail);
                $this->load->view('footer');        
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
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                );

                $where = $this->input->post('id_warga');

                $this->m_admin->aksi_ubah_data_warga($where,$data,'warga');
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_warga/'.$where);
        }

        // upload foto profil warga
        public function upload_foto_profil()
        {
                $where = $this->input->post('id_warga');
                if ($_FILES != null) {
                $this->aksi_upload_foto_profil($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_warga/'.$where);
        }

        //upload foto profil warga
        private function aksi_upload_foto_profil($id_warga)
        {
                $config['upload_path']          = './../assets/uploads/warga/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		// $config['max_size']             = 2048;
		$config['file_name'] 	        = 'foto_warga-'.date('ymd').'-'.substr(md5(rand()),0,10);
                
                $this->load->library('upload',$config);
                $id_warga = $this->input->post('id_warga');
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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();
                        
                                        $data['foto_profil_warga'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_warga', $id_warga);
                                        $this->db->update('warga',$data);
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
                redirect('admin/detail_data_warga/'.$where);
        }

        //upload foto ktp warga
        private function aksi_upload_foto_ktp($id_warga)
        {
                $config['upload_path']          = './../assets/uploads/warga/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		// $config['max_size']             = 2048;
		$config['file_name'] 	        = 'foto_warga-'.date('ymd').'-'.substr(md5(rand()),0,10);
                
                $this->load->library('upload',$config);
                $id_warga = $this->input->post('id_warga');
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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();
                        
                                        $data['foto_ktp_warga'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                                $this->db->where('id_warga', $id_warga);
                                                $this->db->update('warga',$data);
                                                

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
                redirect('admin/detail_data_warga/'.$where);
        }

        //upload foto kk warga
        private function aksi_upload_foto_kk($id_warga)
        {
                $config['upload_path']          = './../assets/uploads/warga/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		// $config['max_size']             = 2048;
		$config['file_name'] 	        = 'foto_warga-'.date('ymd').'-'.substr(md5(rand()),0,10);
                
                $this->load->library('upload',$config);
                $id_warga = $this->input->post('id_warga');
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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

					$uploadData = $this->upload->data();
                        
                                        $data['foto_kk_warga'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                                $this->db->where('id_warga', $id_warga);
                                                $this->db->update('warga',$data);
                                                
				}
			}
		}
        }

        // aksi hapus data warga
        public function aksi_hapus_warga($id_warga){

                $this->m_admin->hapus_warga($id_warga);
		$this->session->set_flashdata('success', 'dihapus');
                redirect('admin/list_data_warga');
		
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
