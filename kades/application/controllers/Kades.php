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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
        $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

        $detailhere = array('id_kades' => $id_kades);
        $data_detail['detail_profil_saya'] = $this->m_kades->get_detail_profil_saya($detailhere, 'kepala_desa')->result();

        $data_detail['foto_profil'] = $this->m_kades->get_foto_profil_profil_saya($id_kades)->result();

        $data_detail['foto_ktp'] = $this->m_kades->get_foto_ktp_profil_saya($id_kades)->result();

        $data_detail['foto_kk'] = $this->m_kades->get_foto_kk_profil_saya($id_kades)->result();
        
        $data_detail['foto_ttd'] = $this->m_kades->get_foto_ttd_kades($id_kades)->result();
        
        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar', $data);
        $this->load->view('kades/profil_saya', $data_detail);
        $this->load->view('footer');
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
                $config['file_name'] 	        = 'foto_kades-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_kades = $this->input->post('id_kades');
                
                if(!empty($_FILES['berkas']['name'])){

                                if($this->upload->do_upload('berkas')){
                                
                                $uploadData = $this->upload->data();

                                //Compres Foto
                                $config['image_library']='gd2';
                                $config['source_image']='./../assets/uploads/kades/'.$uploadData['file_name'];
                                $config['create_thumb']= FALSE;
                                $config['maintain_ratio']= TRUE;
                                $config['quality']= '50%';
                                $config['width']= 600;
                                $config['height']= 400;
                                
                                $config['new_image']= './../assets/uploads/kades/'.$uploadData['file_name'];
                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();
                                
                                $item = $this->db->where('id_kades',$id_kades)->get('kepala_desa')->row();
                                
                                //replace foto lama 
                                if($item->foto_profil_kades != "placeholder_profil.png"){
                                        $target_file = './../assets/uploads/kades/'.$item->foto_profil_kades;
                                        unlink($target_file);
                                }

                                $data['foto_profil_kades'] = $uploadData['file_name'];

                                $this->db->where('id_kades', $id_kades);
                                $this->db->update('kepala_desa',$data);
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
                $config['file_name'] 	        = 'foto_ktp_kades-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_kades = $this->input->post('id_kades');
                
                if(!empty($_FILES['berkas']['name'])){

                                if($this->upload->do_upload('berkas')){
                                
                                $uploadData = $this->upload->data();

                                //Compres Foto
                                $config['image_library']='gd2';
                                $config['source_image']='./../assets/uploads/kades/'.$uploadData['file_name'];
                                $config['create_thumb']= FALSE;
                                $config['maintain_ratio']= TRUE;
                                $config['quality']= '80%';
                                $config['width']= 600;
                                $config['height']= 400;                                
                                $config['new_image']= './../assets/uploads/kades/'.$uploadData['file_name'];
                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();
                                
                                $item = $this->db->where('id_kades',$id_kades)->get('kepala_desa')->row();
                                
                                //replace foto lama 
                                if($item->foto_ktp_kades != "placeholder_ktp.png"){
                                        $target_file = './../assets/uploads/kades/'.$item->foto_ktp_kades;
                                        unlink($target_file);
                                }

                                $data['foto_ktp_kades'] = $uploadData['file_name'];

                                $this->db->where('id_kades', $id_kades);
                                $this->db->update('kepala_desa',$data);
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
                $config['file_name'] 	        = 'foto_kk_kades-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_kades = $this->input->post('id_kades');
                
                if(!empty($_FILES['berkas']['name'])){

                                if($this->upload->do_upload('berkas')){
                                
                                $uploadData = $this->upload->data();

                                //Compres Foto
                                $config['image_library']='gd2';
                                $config['source_image']='./../assets/uploads/kades/'.$uploadData['file_name'];
                                $config['create_thumb']= FALSE;
                                $config['maintain_ratio']= TRUE;
                                $config['quality']= '90%';
                                $config['width']= 900;
                                $config['height']= 700;                               
                                $config['new_image']= './../assets/uploads/kades/'.$uploadData['file_name'];
                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();
                                
                                $item = $this->db->where('id_kades',$id_kades)->get('kepala_desa')->row();
                                
                                //replace foto lama 
                                if($item->foto_kk_kades != "placeholder_kk.png"){
                                        $target_file = './../assets/uploads/kades/'.$item->foto_kk_kades;
                                        unlink($target_file);
                                }

                                $data['foto_kk_kades'] = $uploadData['file_name'];

                                $this->db->where('id_kades', $id_kades);
                                $this->db->update('kepala_desa',$data);
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
                redirect('kades/profil_saya/'.$where);
        }

        //upload foto ttd kades
        private function aksi_upload_foto_ttd_kades($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                $config['file_name'] 	        = 'foto_ttd_kades-'.date('ymd').'-'.substr(md5(rand()),0,10);
                        
                $this->load->library('upload',$config);
                $id_kades = $this->input->post('id_kades');
                
                if(!empty($_FILES['berkas']['name'])){

                                if($this->upload->do_upload('berkas')){
                                
                                $uploadData = $this->upload->data();

                                //Compres Foto
                                $config['image_library']='gd2';
                                $config['source_image']='./../assets/uploads/kades/'.$uploadData['file_name'];
                                $config['create_thumb']= FALSE;
                                $config['maintain_ratio']= TRUE;
                                $config['quality']= '50%';
                                $config['width']= 600;
                                $config['height']= 400;
                                
                                $config['new_image']= './../assets/uploads/kades/'.$uploadData['file_name'];
                                $this->load->library('image_lib', $config);
                                $this->image_lib->resize();
                                
                                $item = $this->db->where('id_kades',$id_kades)->get('kepala_desa')->row();
                                
                                //replace foto lama 
                                if($item->foto_ttd_kades != "placeholder_ttd.png"){
                                        $target_file = './../assets/uploads/kades/'.$item->foto_ttd_kades;
                                        unlink($target_file);
                                }

                                $data['foto_ttd_kades'] = $uploadData['file_name'];

                                $this->db->where('id_kades', $id_kades);
                                $this->db->update('kepala_desa',$data);
                        }
                }
        }

        // tampil form ubah kata sandi profil saya
        public function form_ubah_kata_sandi_profil_saya($id_kades)
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array(); 
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                $kata_sandi_awal = $this->input->post('kata_sandi_awal');
                $data_lama = sha1($kata_sandi_awal);

                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);

                $data_baru = array(
                'kata_sandi' => $kata_sandi_hash,
                );

                $where = $this->input->post('id_kades');

                $kades = $this->m_kades->cek_kades($where);

                if ($data_lama === $kades['kata_sandi']) {
                        $this->m_kades->ubah_kata_sandi_profil_saya($where, $data_baru, 'kepala_desa');
                        $this->session->set_flashdata('success', '<b>Kata Sandi</b> Berhasil Diubah');
                        redirect('kades/form_ubah_kata_sandi_profil_saya/'.$where);
                }else{
                        $this->session->set_flashdata('error', '<b>Kata Sandi Lama</b> Salah');
                        redirect('kades/form_ubah_kata_sandi_profil_saya/'.$where);
                }
        }

        public function list_data_admin()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array(); 
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');
                
                $data_permohonan['tgl_awal'] = $tgl_awal;
                $data_permohonan['tgl_akhir'] =  $tgl_akhir;
                $data_permohonan['data_riwayat_permohonan'] = $this->m_kades->filter_riwayat($tgl_awal, $tgl_akhir)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_riwayat_permohonan1', $data_permohonan);
                $this->load->view('footer');
        }

        //detail data permohonan
        public function detail_data_permohonan($id_permohonan_surat, $id_nama_surat)
	{       
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array(); 
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');
                
                $data_list['tgl_awal'] = $tgl_awal;
                $data_list['tgl_akhir'] =  $tgl_akhir;
                $data_list['data_surat_masuk'] = $this->m_kades->filter_surat_masuk($tgl_awal, $tgl_akhir)->result();

                // redirect('admin/list_surat_masuk');
                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_surat_masuk1', $data_list);
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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');
                        
                $data_list['tgl_awal'] = $tgl_awal;
                $data_list['tgl_akhir'] =  $tgl_akhir;
                $data_list['data_surat_keluar'] = $this->m_kades->filter_surat_keluar($tgl_awal, $tgl_akhir)->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_surat_keluar1', $data_list);
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
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

                $data_feedback['data_feedback'] = $this->m_kades->get_data_feedback()->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/list_data_feedback', $data_feedback);
                $this->load->view('footer');
        }
        
        //list data feedback
        public function list_data_feedback_belum_dibaca()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['id_kades' =>
                $this->session->userdata('id_kades')])->row_array(); 
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

                $data_feedback['data_feedback'] = $this->m_kades->get_data_feedback_belum_dibaca()->result();

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
                
                $data_pesan = array(
                        'notif_kades' => 'Dibaca',
                );

                $this->m_kades->update_status_notif_pesan($id_pesan, $data_pesan, 'pesan');
                
                $data['jumlah_pesan_masuk'] = $this->m_kades->jumlah_pesan_masuk()->result();

                $detailhere = array('id_pesan' => $id_pesan);
                $data_detail['detail_feedback'] = $this->m_kades->get_detail_data_feedback($detailhere, 'pesan')->result();

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar', $data);
                $this->load->view('kades/detail_data_feedback', $data_detail);
                $this->load->view('footer');
        }
}
