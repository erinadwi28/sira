<?php

require '../vendor/autoload.php';

use Dompdf\Dompdf;

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_jumlah['data_kades'] = $this->m_admin->ambil_nama_kades()->result();
                $data_jumlah['jumlah_rt'] = $this->m_admin->jumlah_rt()->result();
                $data_jumlah['jumlah_warga'] = $this->m_admin->jumlah_warga()->result();
                $data_jumlah['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();
                $data_jumlah['jumlah_permohonan_ditolak'] = $this->m_admin->jumlah_permohonan_ditolak()->result();
                $data_jumlah['jumlah_permohonan_selesai'] = $this->m_admin->jumlah_permohonan_selesai()->result();
                $data_jumlah['jumlah_riwayat_permohonan'] = $this->m_admin->jumlah_riwayat_permohonan()->result();
                $data_jumlah['jumlah_surat_masuk'] = $this->m_admin->jumlah_surat_masuk()->result();
                $data_jumlah['jumlah_surat_keluar'] = $this->m_admin->jumlah_surat_keluar()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/dashboard_admin', $data_jumlah);
                $this->load->view('footer');
        }

        //tampil profil saya
        public function profil_saya($id_admin)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_admin' => $id_admin);
                $data_detail['detail_profil_saya'] = $this->m_admin->get_detail_profil_saya($detailhere, 'admin')->result();

                $data_detail['foto_profil'] = $this->m_admin->get_foto_profil_profil_saya($id_admin)->result();

                $data_detail['foto_ktp'] = $this->m_admin->get_foto_ktp_profil_saya($id_admin)->result();

                $data_detail['foto_kk'] = $this->m_admin->get_foto_kk_profil_saya($id_admin)->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/profil_saya', $data_detail);
                $this->load->view('footer');
        }

        // tampil form ubah profil saya beserta datanya
        public function form_ubah_profil_saya($id_admin)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_admin' => $id_admin);
                $data_detail['detail_profil_saya'] = $this->m_admin->get_detail_profil_saya($detailhere, 'admin')->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_ubah_profil_saya', $data_detail);
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
                        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                        'golongan_darah' => $this->input->post('golongan_darah'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'jabatan' => $this->input->post('jabatan'),
                        // 'status_kepegawaian' => $this->input->post('status_kepegawaian'),
                );

                $detailhere = $this->input->post('id_admin');

                $this->m_admin->aksi_ubah_data_profil_saya($detailhere, $data, 'admin');

                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/profil_saya/' . $detailhere);
        }

        // upload foto profil profil saya
        public function upload_foto_profil_profil_saya()
        {
                $where = $this->input->post('id_admin');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_profil_profil_saya($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/profil_saya/' . $where);
        }

        //upload foto profil profil saya
        private function aksi_upload_foto_profil_profil_saya($id_admin)
        {
                $config['upload_path']          = './../assets/uploads/admin/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_profil_admin-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_admin = $this->input->post('id_admin');
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

                                        $data['foto_profil_admin'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_admin', $id_admin);
                                        $this->db->update('admin', $data);
                                }
                        }
                }
        }

        // upload foto ktp profil saya
        public function upload_foto_ktp_profil_saya()
        {
                $where = $this->input->post('id_admin');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_ktp_profil_saya($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/profil_saya/' . $where);
        }

        // upload foto ktp profil saya
        private function aksi_upload_foto_ktp_profil_saya($id_admin)
        {
                $config['upload_path']          = './../assets/uploads/admin/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_ktp_admin-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_admin = $this->input->post('id_admin');
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

                                        $data['foto_ktp_admin'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_admin', $id_admin);
                                        $this->db->update('admin', $data);
                                }
                        }
                }
        }

        // upload foto kk profil saya
        public function upload_foto_kk_profil_saya()
        {
                $where = $this->input->post('id_admin');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_kk_profil_saya($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/profil_saya/' . $where);
        }

        //upload foto kk profil saya
        private function aksi_upload_foto_kk_profil_saya($id_admin)
        {
                $config['upload_path']          = './../assets/uploads/admin/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_kk_admin-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_admin = $this->input->post('id_admin');
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

                                        $data['foto_kk_admin'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_admin', $id_admin);
                                        $this->db->update('admin', $data);
                                }
                        }
                }
        }

        // tampil form ubah kata sandi profil saya
        public function form_ubah_kata_sandi_profil_saya($id_admin)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_admin' => $id_admin);
                $data_detail['detail_profil_saya'] = $this->m_admin->get_detail_profil_saya($detailhere, 'admin')->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_ubah_kata_sandi_profil_saya', $data_detail);
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

                $where = $this->input->post('id_admin');

                if ($this->m_admin->ubah_kata_sandi_profil_saya($where, $data, 'admin')); {
                        $this->session->set_flashdata('success', 'diubah');
                        redirect('admin/form_ubah_kata_sandi_profil_saya/' . $where);
                }
        }

        //list data kepala desa
        public function list_data_kades()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_tambah_kades');
                $this->load->view('footer');
        }

        // aksi tambah data kepala desa
        public function aksi_tambah_kades()
        {
                $kata_sandi = $this->input->post('row_password');
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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_kades' => $id_kades);
                $data_detail['detail_kades'] = $this->m_admin->get_detail_kades($detailhere, 'kepala_desa')->result();

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
                redirect('admin/detail_data_kades/' . $where);
        }

        //upload foto profil kades
        private function aksi_upload_foto_profil_kades($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_kades-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_kades = $this->input->post('id_kades');
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

                                        $data['foto_profil_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa', $data);
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
                redirect('admin/detail_data_kades/' . $where);
        }

        // upload foto ktp kades
        private function aksi_upload_foto_ktp_kades($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_kades-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_kades = $this->input->post('id_kades');
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

                                        $data['foto_ktp_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa', $data);
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
                redirect('admin/detail_data_kades/' . $where);
        }

        //upload foto kk kades
        private function aksi_upload_foto_kk_kades($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_kades-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_kades = $this->input->post('id_kades');
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

                                        $data['foto_kk_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa', $data);
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
                redirect('admin/detail_data_kades/' . $where);
        }

        //upload foto ttd kades
        private function aksi_upload_foto_ttd_kades($id_kades)
        {
                $config['upload_path']          = './../assets/uploads/kades/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_kades-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_kades = $this->input->post('id_kades');
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

                                        $data['foto_ttd_kades'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_kades', $id_kades);
                                        $this->db->update('kepala_desa', $data);
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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_cari_nik_ubah_kata_sandi_kades');
                $this->load->view('footer');
        }

        //aksi cari nik ubah password kades
        public function aksi_cari_nik_ubah_kata_sandi_kades()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_cari_nik_warga');
                $this->load->view('footer');
        }

        //aksi cari nik warga calon rt
        public function cari_nik_calon_rt()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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

        // upload foto profil warga
        public function upload_foto_profil_rt()
        {
                $where = $this->input->post('id_rt');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_profil_rt($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_rt/' . $where);
        }

        //upload foto profil warga
        private function aksi_upload_foto_profil_rt($id_rt)
        {
                $config['upload_path']          = './../assets/uploads/rt/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_rt-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

                                        $uploadData = $this->upload->data();

                                        $data['foto_profil_rt'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_rt', $id_rt);
                                        $this->db->update('rt', $data);
                                }
                        }
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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

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

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_cari_nik_ubah_kata_sandi_rt');
                $this->load->view('footer');
        }

        //aksi cari nik ubah password rt
        public function aksi_cari_nik_ubah_kata_sandi_rt()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $where = array('id_warga' => $id_warga);
                $data_detail['detail_warga'] = $this->m_admin->get_detail_warga($where, 'warga')->result();

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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_tambah_warga');
                $this->load->view('footer');
        }

        // aksi tambah data warga
        public function aksi_tambah_warga()
        {
                $kata_sandi = $this->input->post('row_password');
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
                        'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                        'golongan_darah' => $this->input->post('golongan_darah'),
                        'kata_sandi' => $kata_sandi_hash,
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
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $where = array('id_warga' => $id_warga);
                $data_detail['detail_warga'] = $this->m_admin->get_detail_warga($where, 'warga')->result();

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

                $this->m_admin->aksi_ubah_data_warga($where, $data, 'warga');
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_warga/' . $where);
        }

        // upload foto profil warga
        public function upload_foto_profil()
        {
                $where = $this->input->post('id_warga');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_profil($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_warga/' . $where);
        }

        //upload foto profil warga
        private function aksi_upload_foto_profil($id_warga)
        {
                $config['upload_path']          = './../assets/uploads/warga/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_warga-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

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
        public function upload_foto_ktp_rt()
        {
                $where_rt = $this->input->post('id_rt');
                $where = $this->input->post('id_warga');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_ktp($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_rt/' . $where_rt);
        }

        // upload foto ktp warga
        public function upload_foto_ktp()
        {
                $where = $this->input->post('id_warga');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_ktp($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_warga/' . $where);
        }

        //upload foto ktp warga
        private function aksi_upload_foto_ktp($id_warga)
        {
                $config['upload_path']          = './../assets/uploads/warga/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_warga-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

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

                                        $this->db->where('id_warga', $id_warga);
                                        $this->db->update('warga', $data);
                                }
                        }
                }
        }

        // upload foto kk warga
        public function upload_foto_kk_rt()
        {
                $where_rt = $this->input->post('id_rt');
                $where = $this->input->post('id_warga');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_kk($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_rt/' . $where_rt);
        }

        // upload foto kk warga
        public function upload_foto_kk()
        {
                $where = $this->input->post('id_warga');
                if ($_FILES != null) {
                        $this->aksi_upload_foto_kk($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_data_warga/' . $where);
        }

        //upload foto kk warga
        private function aksi_upload_foto_kk($id_warga)
        {
                $config['upload_path']          = './../assets/uploads/warga/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'foto_warga-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

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

                                        $this->db->where('id_warga', $id_warga);
                                        $this->db->update('warga', $data);
                                }
                        }
                }
        }

        // aksi hapus data warga
        public function aksi_hapus_warga($id_warga)
        {

                $this->m_admin->hapus_warga($id_warga);
                $this->session->set_flashdata('success', 'dihapus');
                redirect('admin/list_data_warga');
        }

        //tampil form cari nik ubah password warga
        public function form_cari_nik_ubah_kata_sandi_warga()
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_cari_nik_ubah_kata_sandi_warga');
                $this->load->view('footer');
        }

        //aksi cari nik ubah password kades
        public function aksi_cari_nik_ubah_kata_sandi_warga()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $nik_kades = $this->input->post('nik');
                $detailhere = array('nik' => $nik_kades);
                $data_detail['detail_warga'] = $this->m_admin->cari_nik_warga($detailhere, 'warga')->result();

                if ($this->m_admin->cari_nik_warga($detailhere, 'warga')) {
                        // $this->session->set_flashdata('success', 'ditemukan');

                        $this->load->view('header');
                        $this->load->view('admin/sidebar_admin');
                        $this->load->view('topbar', $data);
                        $this->load->view('admin/form_ubah_kata_sandi_warga', $data_detail);
                        $this->load->view('footer');
                } else {
                        $this->session->set_flashdata('error', 'tidak ditemukan');
                }
        }

        // aksi ubah kata sandi kades
        public function aksi_ubah_kata_sandi_warga()
        {
                $kata_sandi = $this->input->post('kata_sandi');
                $kata_sandi_hash = sha1($kata_sandi);
                $data = array(
                        'kata_sandi' => $kata_sandi_hash,
                );

                $detailhere = $this->input->post('id_warga');

                if ($this->m_admin->aksi_ubah_kata_sandi_warga($detailhere, $data, 'warga')); {
                        $this->session->set_flashdata('success', 'diubah');
                        redirect('admin/list_data_warga');
                }
        }

        //list data permohonan
        public function list_data_permohonan()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_permohonan['data_permohonan_masuk'] = $this->m_admin->get_list_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_permohonan', $data_permohonan);
                $this->load->view('footer');
        }

        //detail data permohonan
        public function detail_data_permohonan($id_permohonan_surat, $id_nama_surat)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                if ($id_nama_surat == 1) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_001($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 2) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_002($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 3) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_003($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 4) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_004($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 5) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_005($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 6) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_006($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 7) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_007($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 8) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_008($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 9) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_009($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 10) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_010($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 11) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_011($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 12) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_012($id_permohonan_surat)->result();
                        $data_detail['detail_pengikut'] = $this->m_admin->get_detail_pengikut($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 13) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_013($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 14) {
                        $data_detail['detail_permohonan_masuk'] = $this->m_admin->get_detail_014($id_permohonan_surat)->result();
                        $data_detail['detail_pengikut'] = $this->m_admin->get_detail_pengikut($id_permohonan_surat)->result();
                }

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                if ($id_nama_surat == 1) {
                        $this->load->view('admin/suket_001/detail_permohonan_001', $data_detail);
                } elseif ($id_nama_surat == 2) {
                        $this->load->view('admin/suket_002/detail_permohonan_002', $data_detail);
                } elseif ($id_nama_surat == 3) {
                        $this->load->view('admin/suket_003/detail_permohonan_003', $data_detail);
                } elseif ($id_nama_surat == 4) {
                        $this->load->view('admin/suket_004/detail_permohonan_004', $data_detail);
                } elseif ($id_nama_surat == 5) {
                        $this->load->view('admin/suket_005/detail_permohonan_005', $data_detail);
                } elseif ($id_nama_surat == 6) {
                        $this->load->view('admin/suket_006/detail_permohonan_006', $data_detail);
                } elseif ($id_nama_surat == 7) {
                        $this->load->view('admin/suket_007/detail_permohonan_007', $data_detail);
                } elseif ($id_nama_surat == 8) {
                        $this->load->view('admin/suket_008/detail_permohonan_008', $data_detail);
                } elseif ($id_nama_surat == 9) {
                        $this->load->view('admin/suket_009/detail_permohonan_009', $data_detail);
                } elseif ($id_nama_surat == 10) {
                        $this->load->view('admin/suket_010/detail_permohonan_010', $data_detail);
                } elseif ($id_nama_surat == 11) {
                        $this->load->view('admin/suket_011/detail_permohonan_011', $data_detail);
                } elseif ($id_nama_surat == 12) {
                        $this->load->view('admin/suket_012/detail_permohonan_012', $data_detail);
                } elseif ($id_nama_surat == 13) {
                        $this->load->view('admin/suket_013/detail_permohonan_013', $data_detail);
                } elseif ($id_nama_surat == 14) {
                        $this->load->view('admin/suket_014/detail_permohonan_014', $data_detail);
                }
                $this->load->view('footer');
        }

        //data permohonan ditolak
        public function list_data_permohonan_ditolak()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_permohonan['data_permohonan_ditolak'] = $this->m_admin->get_list_permohonan_ditolak()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_permohonan_ditolak', $data_permohonan);
                $this->load->view('footer');
        }

        //data permohonan selesai
        public function list_data_permohonan_selesai()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_permohonan['data_permohonan_selesai'] = $this->m_admin->get_list_permohonan_selesai()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_permohonan_selesai', $data_permohonan);
                $this->load->view('footer');
        }

        // list riwayat permohonan
        public function list_riwayat_permohonan()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_permohonan['data_riwayat_permohonan'] = $this->m_admin->get_list_riwayat_permohonan()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_riwayat_permohonan', $data_permohonan);
                $this->load->view('footer');
        }

        // filter tanggal riwayat permohonan
        public function filter_riwayat_permohonan()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');

                $data_permohonan['tgl_awal'] = $tgl_awal;
                $data_permohonan['tgl_akhir'] =  $tgl_akhir;
                $data_permohonan['data_riwayat_permohonan'] = $this->m_admin->filter_riwayat($tgl_awal, $tgl_akhir)->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_data_riwayat_permohonan1', $data_permohonan);
                $this->load->view('footer');
        }

        //cetak laporan riwayat permohonan
        public function cetak_laporan_riwayat_permohonan($tgl_awal, $tgl_akhir)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_permohonan['tgl_awal'] = $tgl_awal;
                $data_permohonan['tgl_akhir'] =  $tgl_akhir;
                $data_permohonan['data_riwayat_permohonan'] = $this->m_admin->filter_riwayat($tgl_awal, $tgl_akhir)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/cetak_riwayat_permohonan', $data_permohonan, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream("Laporan Pelayanan Surat Kelurahan Mendawai(Periode " . $tgl_awal . " - " . $tgl_akhir . ")");
        }

        //tampil form tolak permohonan
        public function form_alasan_tolak($id_permohonan_surat)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_detail['id_permohonan_surat'] = $this->db->get_where('permohonan_surat', ['id_permohonan_surat' =>
                $id_permohonan_surat])->row_array();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_alasan_tolak', $data_detail);
                $this->load->view('footer');
        }

        //aksi tolak permohonan
        public function aksi_tolak_permohonan()
        {
                $data = array(
                        'keterangan' => $this->input->post('keterangan'),
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->tolak_permohonan($detailhere, $data, 'permohonan_surat');

                if ($this->m_admin->tolak_permohonan($detailhere, $data, 'permohonan_surat')); {
                        $this->session->set_flashdata('success', 'ditolak');
                        redirect('admin/list_data_permohonan_ditolak');
                }
        }

        // aksi setujui data permohonan 001
        public function aksi_setujui_permohonan_001()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_usaha');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_usaha')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 002
        public function aksi_setujui_permohonan_002()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_domisili');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_domisili')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 003
        public function aksi_setujui_permohonan_003()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_belum_memiliki_rumah');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_belum_memiliki_rumah')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 004
        public function aksi_setujui_permohonan_004()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_beda_nama');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_beda_nama')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 005
        public function aksi_setujui_permohonan_005()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_izin_keramaian');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_izin_keramaian')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 006
        public function aksi_setujui_permohonan_006()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_belum_pernah_menikah');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_belum_pernah_menikah')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 007
        public function aksi_setujui_permohonan_007()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_tidak_mampu');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_tidak_mampu')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 008
        public function aksi_setujui_permohonan_008()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_janda');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_janda')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 009
        public function aksi_setujui_permohonan_009()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_kematian');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_kematian')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 010
        public function aksi_setujui_permohonan_010()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_kelahiran');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_kelahiran')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 011
        public function aksi_setujui_permohonan_011()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_pengantar_ktp');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_pengantar_ktp')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 012
        public function aksi_setujui_permohonan_012()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );


                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');

                if ($this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 013
        public function aksi_setujui_permohonan_013()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_penghasilan');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_penghasilan')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }

        // aksi setujui data permohonan 014
        public function aksi_setujui_permohonan_014()
        {
                $data = array(
                        'status' => $this->input->post('status'),
                        'tgl_persetujuan_admin' => date("Y/m/d"),
                        'notif' => 'Belum Dibaca',
                );

                $data_surat = array(
                        'no_registrasi' => $this->input->post('no_registrasi'),
                        'no_bulan' => $this->input->post('no_bulan'),
                        'no_tahun' => $this->input->post('no_tahun'),
                );

                $detailhere = $this->input->post('id_permohonan_surat');

                $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat');
                $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_pindah');

                if (
                        $this->m_admin->update_status_permohonan($detailhere, $data, 'permohonan_surat')
                        && $this->m_admin->update_nomor_admin_surat($detailhere, $data_surat, 'srt_ket_pindah')
                ); {
                        $this->session->set_flashdata('success', 'disetujui');
                        redirect('admin/list_data_permohonan_selesai');
                }
        }


        //list surat masuk
        public function list_surat_masuk()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_list['data_surat_masuk'] = $this->m_admin->get_data_surat_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_surat_masuk', $data_list);
                $this->load->view('footer');
        }

        //detail surat masuk
        public function detail_surat_masuk($id_sm)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_sm' => $id_sm);
                $data_detail['detail_surat_masuk'] = $this->m_admin->get_detail_surat_masuk($detailhere, 'surat_masuk')->result();

                $data_detail['lampiran'] = $this->m_admin->get_lampiran($id_sm)->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/detail_surat_masuk', $data_detail);
                $this->load->view('footer');
        }

        //tampil form tambah surat masuk
        public function form_tambah_surat_masuk()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_tambah_surat_masuk');
                $this->load->view('footer');
        }

        // aksi tambah data surat masuk
        public function aksi_tambah_surat_masuk()
        {
                $data = array(
                        'nomor_surat' => $this->input->post('nomor_surat'),
                        'tanggal' => $this->input->post('tanggal'),
                        'pengirim' => $this->input->post('pengirim'),
                        'perihal' => $this->input->post('perihal'),
                        'isi' => $this->input->post('isi')
                );

                $id_sm = $this->m_admin->tambah_surat_masuk($data);

                if ($_FILES != null) {
                        $this->aksi_insert_lampiran_surat_masuk($id_sm);
                }

                $this->session->set_flashdata('success', 'ditambahkan');
                redirect('admin/list_surat_masuk');
        }

        //upload lampiran surat masuk langsung dari saat insert pertama kali
        private function aksi_insert_lampiran_surat_masuk($id_sm)
        {
                $config['upload_path']          = './../assets/uploads/admin/lampiran_sm/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx|doc|xlsx|xls';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'lampiran_surat_masuk-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

                                        $uploadData = $this->upload->data();

                                        $data['lampiran'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_sm', $id_sm);
                                        $this->db->update('surat_masuk', $data);
                                }
                        }
                }
        }

        //tampil form ubah surat masuk
        public function form_ubah_surat_masuk($id_sm)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_sm' => $id_sm);
                $data_detail['detail_surat_masuk'] = $this->m_admin->get_detail_surat_masuk($detailhere, 'surat_masuk')->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_ubah_surat_masuk', $data_detail);
                $this->load->view('footer');
        }

        // aksi ubah surat masuk
        public function aksi_ubah_surat_masuk()
        {
                $data = array(
                        'nomor_surat' => $this->input->post('nomor_surat'),
                        'tanggal' => $this->input->post('tanggal'),
                        'pengirim' => $this->input->post('pengirim'),
                        'perihal' => $this->input->post('perihal'),
                        'isi' => $this->input->post('isi')
                );

                $detailhere = $this->input->post('id_sm');

                $this->m_admin->aksi_ubah_surat_masuk($detailhere, $data, 'surat_masuk');

                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_surat_masuk/' . $detailhere);
        }

        // upload ubah lampiran surat masuk
        public function upload_lampiran_surat_masuk()
        {
                $where = $this->input->post('id_sm');
                if ($_FILES != null) {
                        $this->aksi_upload_lampiran_surat_masuk($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_surat_masuk/' . $where);
        }

        //upload ubah lampiran surat masuk
        private function aksi_upload_lampiran_surat_masuk($id_sm)
        {
                $config['upload_path']          = './../assets/uploads/admin/lampiran_sm/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx|doc|xlsx|xls';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'lampiran_surat_masuk-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_sm = $this->input->post('id_sm');
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

                                        $data['lampiran'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_sm', $id_sm);
                                        $this->db->update('surat_masuk', $data);
                                }
                        }
                }
        }

        //download lampiran surat masuk
        function download_lampiran_surat_masuk($id_sm)
        {
                $data = $this->db->get_where('surat_masuk', ['id_sm' => $id_sm])->row();
                force_download('../assets/uploads/admin/lampiran_sm/' . $data->lampiran, NULL);
        }

        // aksi hapus surat masuk
        public function aksi_hapus_surat_masuk($id_sm)
        {

                $this->m_admin->hapus_surat_masuk($id_sm);
                $this->session->set_flashdata('success', 'dihapus');
                redirect('admin/list_surat_masuk');
        }

        // filter tanggal surat masuk
        public function filter_surat_masuk()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');

                $data_list['tgl_awal'] = $tgl_awal;
                $data_list['tgl_akhir'] =  $tgl_akhir;
                $data_list['data_surat_masuk'] = $this->m_admin->filter_surat_masuk($tgl_awal, $tgl_akhir)->result();

                // redirect('admin/list_surat_masuk');
                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_surat_masuk1', $data_list);
                $this->load->view('footer');
        }

        //cetak list surat masuk
        public function cetak_list_surat_masuk($tgl_awal, $tgl_akhir)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_list['tgl_awal'] = $tgl_awal;
                $data_list['tgl_akhir'] =  $tgl_akhir;
                $data_list['data_surat_masuk'] = $this->m_admin->filter_surat_masuk($tgl_awal, $tgl_akhir)->result();


                $dompdf = new Dompdf();

                $html = $this->load->view('admin/cetak_list_surat_masuk', $data_list, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream("Laporan Surat Masuk Kedinasan Kelurahan Mendawai(Periode " . $tgl_awal . " - " . $tgl_akhir . ")");
        }

        //list surat keluar
        public function list_surat_keluar()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_list['data_surat_keluar'] = $this->m_admin->get_data_surat_keluar()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_surat_keluar', $data_list);
                $this->load->view('footer');
        }

        //detail surat keluar
        public function detail_surat_keluar($id_sk)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_sk' => $id_sk);
                $data_detail['detail_surat_keluar'] = $this->m_admin->get_detail_surat_keluar($detailhere, 'surat_keluar')->result();

                $data_detail['lampiran'] = $this->m_admin->get_lampiran_surat_keluar($id_sk)->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/detail_surat_keluar', $data_detail);
                $this->load->view('footer');
        }

        //tampil form tambah surat keluar
        public function form_tambah_surat_keluar()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_tambah_surat_keluar');
                $this->load->view('footer');
        }

        // aksi tambah data surat keluar
        public function aksi_tambah_surat_keluar()
        {
                $data = array(
                        'nomor_surat' => $this->input->post('nomor_surat'),
                        'tanggal' => $this->input->post('tanggal'),
                        'tujuan' => $this->input->post('tujuan'),
                        'perihal' => $this->input->post('perihal'),
                        'isi' => $this->input->post('isi')
                );

                $id_sk = $this->m_admin->tambah_surat_keluar($data);

                if ($_FILES != null) {
                        $this->aksi_insert_lampiran_surat_keluar($id_sk);
                }

                $this->session->set_flashdata('success', 'ditambahkan');
                redirect('admin/list_surat_keluar');
        }

        //upload lampiran surat masuk langsung dari saat insert pertama kali
        private function aksi_insert_lampiran_surat_keluar($id_sk)
        {
                $config['upload_path']          = './../assets/uploads/admin/lampiran_sk/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx|doc|xlsx|xls';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'lampiran_surat_keluar-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

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

                                        // $ambil = $this->m_admin->get_foto_profil_warga($id_warga);
                                        // $r = $ambil->row();
                                        // unlink(".../assets/uploads/warga/".$r->nama_foto);

                                        $uploadData = $this->upload->data();

                                        $data['lampiran'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_sk', $id_sk);
                                        $this->db->update('surat_keluar', $data);
                                }
                        }
                }
        }

        //tampil form ubah surat keluar
        public function form_ubah_surat_keluar($id_sk)
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $detailhere = array('id_sk' => $id_sk);
                $data_detail['detail_surat_keluar'] = $this->m_admin->get_detail_surat_keluar($detailhere, 'surat_keluar')->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/form_ubah_surat_keluar', $data_detail);
                $this->load->view('footer');
        }

        // aksi ubah surat keluar
        public function aksi_ubah_surat_keluar()
        {
                $data = array(
                        'nomor_surat' => $this->input->post('nomor_surat'),
                        'tanggal' => $this->input->post('tanggal'),
                        'tujuan' => $this->input->post('tujuan'),
                        'perihal' => $this->input->post('perihal'),
                        'isi' => $this->input->post('isi')
                );

                $detailhere = $this->input->post('id_sk');

                $this->m_admin->aksi_ubah_surat_keluar($detailhere, $data, 'surat_keluar');

                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_surat_keluar/' . $detailhere);
        }

        // upload ubah lampiran surat keluar
        public function upload_lampiran_surat_keluar()
        {
                $where = $this->input->post('id_sk');
                if ($_FILES != null) {
                        $this->aksi_upload_lampiran_surat_keluar($_FILES);
                }
                $this->session->set_flashdata('success', 'diubah');
                redirect('admin/detail_surat_keluar/' . $where);
        }

        //upload ubah lampiran surat keluar
        private function aksi_upload_lampiran_surat_keluar($id_sk)
        {
                $config['upload_path']          = './../assets/uploads/admin/lampiran_sk/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx|doc|xlsx|xls';
                // $config['max_size']             = 2048;
                $config['file_name']                 = 'lampiran_surat_keluar-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

                $this->load->library('upload', $config);
                $id_sk = $this->input->post('id_sk');
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

                                        $data['lampiran'] = $uploadData['file_name'];
                                        // $data['keterangan'] = $keterangan[$i];
                                        // $data['id_warga'] = $id_warga;

                                        // $data_detail = $this->input->post('id_warga');

                                        $this->db->where('id_sk', $id_sk);
                                        $this->db->update('surat_keluar', $data);
                                }
                        }
                }
        }

        //download lampiran surat keluar
        function download_lampiran_surat_keluar($id_sk)
        {
                $data = $this->db->get_where('surat_keluar', ['id_sk' => $id_sk])->row();
                force_download('../assets/uploads/admin/lampiran_sk/' . $data->lampiran, NULL);
        }

        // aksi hapus surat masuk
        public function aksi_hapus_surat_keluar($id_sk)
        {

                $this->m_admin->hapus_surat_keluar($id_sk);
                $this->session->set_flashdata('success', 'dihapus');
                redirect('admin/list_surat_keluar');
        }

        // filter tanggal surat keluar
        public function filter_surat_keluar()
        {
                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $tgl_awal = $this->input->post('tanggal_mulai');
                $tgl_akhir = $this->input->post('tanggal_akhir');

                $data_list['tgl_awal'] = $tgl_awal;
                $data_list['tgl_akhir'] =  $tgl_akhir;
                $data_list['data_surat_keluar'] = $this->m_admin->filter_surat_keluar($tgl_awal, $tgl_akhir)->result();

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                $this->load->view('admin/list_surat_keluar1', $data_list);
                $this->load->view('footer');
        }

        //cetak list surat keluar
        public function cetak_list_surat_keluar($tgl_awal, $tgl_akhir)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_list['tgl_awal'] = $tgl_awal;
                $data_list['tgl_akhir'] =  $tgl_akhir;
                $data_list['data_surat_keluar'] = $this->m_admin->filter_surat_keluar($tgl_awal, $tgl_akhir)->result();


                $dompdf = new Dompdf();

                $html = $this->load->view('admin/cetak_list_surat_keluar', $data_list, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream("Laporan Surat Keluar Kedinasan Kelurahan Mendawai(Periode " . $tgl_awal . " - " . $tgl_akhir . ")");
        }

        public function lihat_surat($id_permohonan_surat, $id_nama_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();
                $data['jumlah_permohonan_masuk'] = $this->m_admin->jumlah_permohonan_masuk()->result();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();

                if ($id_nama_surat == 1) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_001($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 2) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_002($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 3) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_003($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 4) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_004($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 5) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_005($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 6) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_006($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 7) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_007($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 8) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_008($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 9) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_009($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 10) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_010($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 11) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_011($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 12) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_012($id_permohonan_surat)->result();
                        $data_detail['pengikut'] = $this->m_admin->get_detail_pengikut($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 13) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_013($id_permohonan_surat)->result();
                } elseif ($id_nama_surat == 14) {
                        $data_detail['detail_suket'] = $this->m_admin->get_detail_014($id_permohonan_surat)->result();
                        $data_detail['pengikut'] = $this->m_admin->get_detail_pengikut($id_permohonan_surat)->result();
                }

                $this->load->view('header');
                $this->load->view('admin/sidebar_admin');
                $this->load->view('topbar', $data);
                if ($id_nama_surat == 1) {
                        $this->load->view('admin/suket_001/tampil_suket001', $data_detail);
                } elseif ($id_nama_surat == 2) {
                        $this->load->view('admin/suket_002/tampil_suket002', $data_detail);
                } elseif ($id_nama_surat == 3) {
                        $this->load->view('admin/suket_003/tampil_suket003', $data_detail);
                } elseif ($id_nama_surat == 4) {
                        $this->load->view('admin/suket_004/tampil_suket004', $data_detail);
                } elseif ($id_nama_surat == 5) {
                        $this->load->view('admin/suket_005/tampil_suket005', $data_detail);
                } elseif ($id_nama_surat == 6) {
                        $this->load->view('admin/suket_006/tampil_suket006', $data_detail);
                } elseif ($id_nama_surat == 7) {
                        $this->load->view('admin/suket_007/tampil_suket007', $data_detail);
                } elseif ($id_nama_surat == 8) {
                        $this->load->view('admin/suket_008/tampil_suket008', $data_detail);
                } elseif ($id_nama_surat == 9) {
                        $this->load->view('admin/suket_009/tampil_suket009', $data_detail);
                } elseif ($id_nama_surat == 10) {
                        $this->load->view('admin/suket_010/tampil_suket010', $data_detail);
                } elseif ($id_nama_surat == 11) {
                        $this->load->view('admin/suket_011/tampil_suket011', $data_detail);
                } elseif ($id_nama_surat == 12) {
                        $this->load->view('admin/suket_012/tampil_suket012', $data_detail);
                } elseif ($id_nama_surat == 13) {
                        $this->load->view('admin/suket_013/tampil_suket013', $data_detail);
                } elseif ($id_nama_surat == 14) {
                        $this->load->view('admin/suket_014/tampil_suket014', $data_detail);
                }
                $this->load->view('footer');
        }

        public function cetak_surat($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_001($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_001/cetak_suket001', $data_detail, true);
                $dompdf->set_base_path("../../assets/dashboard/css");
                // $html .= '<link href="../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet" />';
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Usaha');
        }

        public function cetak_surat002($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_002($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_002/cetak_suket002', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Domisili');
        }

        public function cetak_surat003($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_003($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_003/cetak_suket003', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Belum Memiliki Rumah');
        }

        public function cetak_surat004($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_004($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_004/cetak_suket004', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Beda Nama');
        }

        public function cetak_surat005($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_005($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_005/cetak_suket005', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Izin Keramaian');
        }

        public function cetak_surat006($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_006($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_006/cetak_suket006', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Belum Pernah Menikah');
        }

        public function cetak_surat007($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_007($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_007/cetak_suket007', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Tidak Mampu');
        }

        public function cetak_surat008($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_008($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_008/cetak_suket008', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Janda');
        }

        public function cetak_surat009($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_009($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_009/cetak_suket009', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Kematian');
        }

        public function cetak_surat010($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_010($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_010/cetak_suket010', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'landscape');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Kelahiran');
        }

        public function cetak_surat011($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_011($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_011/cetak_suket011', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('F4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Pengantar KTP');
        }

        public function cetak_surat012($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_012($id_permohonan_surat)->result();
                $data_detail['pengikut'] = $this->m_admin->get_detail_pengikut($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_012/cetak_suket012', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Pengantar KK');
        }

        public function cetak_surat013($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_013($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_013/cetak_suket013', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Penghasilan');
        }

        public function cetak_surat014($id_permohonan_surat)
        {

                $data['admin'] = $this->db->get_where('admin', ['id_admin' =>
                $this->session->userdata('id_admin')])->row_array();

                $data_detail['data_kades'] = $this->m_admin->get_data_kades()->result();
                $data_detail['detail_pemohon'] = $this->m_admin->get_data_pemohon($id_permohonan_surat)->result();
                $data_detail['detail_suket'] = $this->m_admin->get_detail_014($id_permohonan_surat)->result();
                $data_detail['pengikut'] = $this->m_admin->get_detail_pengikut($id_permohonan_surat)->result();

                $dompdf = new Dompdf();

                $html = $this->load->view('admin/suket_014/cetak_suket014', $data_detail, true);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();
                $dompdf->stream('Surat Keterangan Pindah');
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
