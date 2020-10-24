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

                $data['data_kades'] = $this->m_rt->ambil_nama_kades()->result();
                $data['data_rt'] = $this->m_rt->ambil_nama_rt()->result();
                $data['jumlah_warga'] = $this->m_rt->jumlah_warga()->result();
                $data['jumlah_permohonan_masuk'] = $this->m_rt->jumlah_permohonan_masuk()->result();
                $data['jumlah_permohonan_ditolak'] = $this->m_rt->jumlah_permohonan_ditolak()->result();
                $data['jumlah_permohonan_disetujui'] = $this->m_rt->jumlah_permohonan_disetujui()->result();
                $data['jumlah_permohonan_selesai'] = $this->m_rt->jumlah_permohonan_selesai()->result();
                $data['jumlah_riwayat_permohonan'] = $this->m_rt->jumlah_riwayat_permohonan()->result();

                $this->load->view('header');
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
                redirect('rt/profil_saya/'.$where);
        } 

        //upload foto profil rt
        private function aksi_upload_foto_profil($id_rt)
        {
                $config['upload_path']          = './../assets/uploads/rt/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name'] 	        = 'foto_rt-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_rt = $this->input->post('id_rt');
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

                                // $ambil = $this->m_admin->get_foto_profil_rt($id_rt);
                                // $r = $ambil->row();
                                // unlink(".../assets/uploads/rt/".$r->nama_foto);

                                        $uploadData = $this->upload->data();
                                
                                $data['foto_profil_rt'] = $uploadData['file_name'];
                                // $data['keterangan'] = $keterangan[$i];
                                // $data['id_rt'] = $id_rt;

                                // $data_detail = $this->input->post('id_rt');

                                $this->db->where('id_rt', $id_rt);
                                $this->db->update('rt',$data);
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
                redirect('rt/profil_saya/'.$where);
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
                $where = $this->input->post('id_rt');
                if ($_FILES != null) {
                $this->aksi_upload_foto_kk($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('rt/profil_saya/'.$where);
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
        
        // tampil form ubah kata sandi profil saya
        public function form_ubah_kata_sandi_profil_saya($id_rt)
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $detailhere = array('id_rt' => $id_rt);
                $data_detail['detail_profil_saya'] = $this->m_rt->get_detail_profil_saya($detailhere,'rt')->result();

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
                redirect('rt/form_ubah_kata_sandi_profil_saya/'.$where);
                }
        }

        public function list_data_warga()
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $data_rt['data_warga'] = $this->m_rt->get_data_warga()->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/list_data_warga', $data_rt);
                $this->load->view('footer');
        }

        //detail data warga
        public function detail_data_warga($id_warga)
	{       
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $where = array('id_warga' => $id_warga);
                $data_detail['detail_warga'] = $this->m_rt->get_detail_warga($where,'warga')->result();

                $data_detail['foto_profil'] = $this->m_rt->get_foto_profil_warga($id_warga)->result();

                $data_detail['foto_ktp'] = $this->m_rt->get_foto_ktp_warga($id_warga)->result();

                $data_detail['foto_kk'] = $this->m_rt->get_foto_kk_warga($id_warga)->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/detail_data_warga', $data_detail);
                $this->load->view('footer');
        }
        
        //list data permohonan
        public function list_data_permohonan()
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $data_permohonan['data_permohonan_masuk'] = $this->m_rt->get_list_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/list_data_permohonan', $data_permohonan);
                $this->load->view('footer');        
        }

        //detail data permohonan
        public function detail_data_permohonan($id_permohonan_surat, $id_nama_surat)
	{       
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                if($id_nama_surat == 1){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_001($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 2){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_002($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 3){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_003($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 4){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_004($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 5){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_005($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 6){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_006($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 7){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_007($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 8){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_008($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 9){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_009($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 10){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_010($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 11){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_011($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 12){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_012($id_permohonan_surat)->result();
                        $data_detail['detail_pengikut'] = $this->m_rt->get_detail_pengikut($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 13){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_013($id_permohonan_surat)->result();
                } elseif($id_nama_surat == 14){
                        $data_detail['detail_permohonan_masuk'] = $this->m_rt->get_detail_014($id_permohonan_surat)->result();
                        $data_detail['detail_pengikut'] = $this->m_rt->get_detail_pengikut($id_permohonan_surat)->result();
                } 

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                if($id_nama_surat == 1){
                $this->load->view('rt/detail_permohonan_001', $data_detail);
                } elseif($id_nama_surat == 2) {
                $this->load->view('rt/detail_permohonan_002', $data_detail);
                } elseif($id_nama_surat == 3) {
                $this->load->view('rt/detail_permohonan_003', $data_detail);
                } elseif($id_nama_surat == 4) {
                $this->load->view('rt/detail_permohonan_004', $data_detail);
                } elseif($id_nama_surat == 5) {
                $this->load->view('rt/detail_permohonan_005', $data_detail);
                } elseif($id_nama_surat == 6) {
                $this->load->view('rt/detail_permohonan_006', $data_detail);
                } elseif($id_nama_surat == 7) {
                $this->load->view('rt/detail_permohonan_007', $data_detail);
                } elseif($id_nama_surat == 8) {
                $this->load->view('rt/detail_permohonan_008', $data_detail);
                } elseif($id_nama_surat == 9) {
                $this->load->view('rt/detail_permohonan_009', $data_detail);
                } elseif($id_nama_surat == 10) {
                $this->load->view('rt/detail_permohonan_010', $data_detail);
                } elseif($id_nama_surat == 11) {
                $this->load->view('rt/detail_permohonan_011', $data_detail);
                } elseif($id_nama_surat == 12) {
                $this->load->view('rt/detail_permohonan_012', $data_detail);
                } elseif($id_nama_surat == 13) {
                $this->load->view('rt/detail_permohonan_013', $data_detail);
                } elseif($id_nama_surat == 14) {
                $this->load->view('rt/detail_permohonan_014', $data_detail);
                } 
                $this->load->view('footer');
        }

        //data permohonan ditolak
        public function list_data_permohonan_ditolak()
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $data_permohonan['data_permohonan_ditolak'] = $this->m_rt->get_list_permohonan_ditolak()->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/list_data_permohonan_ditolak', $data_permohonan);
                $this->load->view('footer');        
        }

        //data permohonan disetujui
        public function list_data_permohonan_disetujui()
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $data_permohonan['data_permohonan_disetujui'] = $this->m_rt->get_list_permohonan_disetujui()->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/list_data_permohonan_disetujui', $data_permohonan);
                $this->load->view('footer');        
        }

        //data permohonan selesai
        public function list_data_permohonan_selesai()
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $data_permohonan['data_permohonan_selesai'] = $this->m_rt->get_list_permohonan_selesai()->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/list_data_permohonan_selesai', $data_permohonan);
                $this->load->view('footer');        
        }

        // list riwayat permohonan
        public function list_riwayat_permohonan()
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $data_permohonan['data_riwayat_permohonan'] = $this->m_rt->get_list_riwayat_permohonan()->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/list_data_riwayat_permohonan', $data_permohonan);
                $this->load->view('footer');        
        }

        // filter tanggal riwayat permohonan
        public function filter_riwayat_permohonan()
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');
                
                $data_permohonan['data_riwayat_permohonan'] = $this->m_rt->filter_riwayat($tgl_awal, $tgl_akhir)->result();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/list_data_riwayat_permohonan', $data_permohonan);
                $this->load->view('footer');
        }

        // aksi setujui data permohonan 001
        public function aksi_setujui_permohonan_001()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_usaha');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_usaha')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 002
        public function aksi_setujui_permohonan_002()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_domisili');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_domisili')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 003
        public function aksi_setujui_permohonan_003()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_belum_memiliki_rumah');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_belum_memiliki_rumah')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 004
        public function aksi_setujui_permohonan_004()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_beda_nama');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_beda_nama')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 005
        public function aksi_setujui_permohonan_005()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_izin_keramaian');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_izin_keramaian')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 006
        public function aksi_setujui_permohonan_006()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_belum_pernah_menikah');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_belum_pernah_menikah')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 007
        public function aksi_setujui_permohonan_007()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_tidak_mampu');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_tidak_mampu')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 008
        public function aksi_setujui_permohonan_008()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_janda');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_janda')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 009
        public function aksi_setujui_permohonan_009()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_kematian');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_kematian')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 010
        public function aksi_setujui_permohonan_010()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_kelahiran');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_kelahiran')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 011
        public function aksi_setujui_permohonan_011()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_pengantar_ktp');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_pengantar_ktp')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 012
        public function aksi_setujui_permohonan_012()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_pengantar_kk');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_pengantar_kk')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 013
        public function aksi_setujui_permohonan_013()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_penghasilan');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_penghasilan')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        // aksi setujui data permohonan 014
        public function aksi_setujui_permohonan_014()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $data_surat = array(
                        'nomor_surat_rt' => $this->input->post('nomor_surat_rt'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_pindah');

                if ($this->m_rt->update_status_permohonan($detailhere, $data, 'permohonan_surat') 
                && $this->m_rt->update_nomor_rt_surat($detailhere, $data_surat, 'srt_ket_pindah')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('rt/list_data_permohonan_disetujui');
                }
        }

        //tampil form tolak permohonan
        public function form_alasan_tolak($id_permohonan_surat)
        {
                $data['rt'] = $this->db->get_where('rt', ['id_rt' =>
                $this->session->userdata('id_rt')])->row_array();

                $data_detail['id_permohonan_surat'] = $this->db->get_where('permohonan_surat', ['id_permohonan_surat' =>
                $id_permohonan_surat])->row_array();

                $this->load->view('header');
                $this->load->view('rt/sidebar_rt');
                $this->load->view('topbar', $data);
                $this->load->view('rt/form_alasan_tolak', $data_detail);
                $this->load->view('footer');
        }

        //aksi tolak permohonan
        public function aksi_tolak_permohonan()
        {
                $data = array(
                        'keterangan' => $this->input->post('keterangan'),
                        'status' => $this->input->post('status'),
                        'tanggal_persetujuan_rt' => date("Y/m/d"),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_rt->tolak_permohonan($detailhere, $data, 'permohonan_surat');

                if ($this->m_rt->tolak_permohonan($detailhere, $data, 'permohonan_surat')); {
                        $this->session->set_flashdata('success', 'ditolak');
                        redirect('rt/list_data_permohonan_ditolak');
                }
        }
}
