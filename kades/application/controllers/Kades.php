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

                $this->load->view('header', $data);
                $this->load->view('kades/sidebar_kades', $data);
                $this->load->view('topbar', $data);
                $this->load->view('kades/dashboard_kades', $data);
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

        // tampil form ubah profil saya beserta datanya
        public function form_ubah_profil_saya($id_kades)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array();

                $detailhere = array('id_kades' => $id_kades);
                $data_detail['detail_profil_saya'] = $this->m_kades->get_detail_profil_saya($detailhere,'kepala_desa')->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/form_ubah_profil_saya', $data_detail);
                $this->load->view('footer');
        }
	
	// aksi ubah profil saya
    public function aksi_ubah_profil_saya()
    {
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
                'golongan_darah' => $this->input->post('golongan_darah'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'no_kk' => $this->input->post('no_kk'),
                'status_hub_kel' => $this->input->post('status_hub_kel'),
                'no_hp' => $this->input->post('no_hp'),
        );

        $detailhere = $this->input->post('id_kades');

        $this->m_kades->aksi_ubah_data_profil_saya($detailhere, $data, 'kepala_desa');

        $this->session->set_flashdata('success', 'diubah');
        redirect('kades/profil_saya/' . $detailhere);
	}
	
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

        public function ubah_data_admin()
        {

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar');
                $this->load->view('kades/ubah_data_admin');
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
