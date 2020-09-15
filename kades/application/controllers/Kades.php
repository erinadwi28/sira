<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kades extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
                $this->load->model('M_kepala_desa', 'm_kepala_desa');

                if (!$this->session->userdata('role_kades')) {
                        redirect('login');
                }
        }

        public function index()
        {
                $data['kades'] = $this->db->get_where('kepala_desa', ['nik' =>
                $this->session->userdata('nik')])->row_array();

                $this->load->view('header', $data);
                $this->load->view('kades/sidebar_kades', $data);
                $this->load->view('topbar', $data);
                $this->load->view('kades/dashboard_kades', $data);
                $this->load->view('footer');
        }

        //profil kades
        public function profil_kades($id_kades)
        {
                $data_profil = $this->m_kepala_desa->get_profil($id_kades);

                $result = array(
                        'data_detail' => $data_profil,
                        'page' => 'kades/profil_kades',
                );

                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        // tampil form ubah profil
        public function form_ubah_profil($id_kades)
        {
                $data_profil = $this->m_kepala_desa->get_profil($id_kades);

                $result = array(
                        'data_detail' => $data_profil,
                        'page' => 'kades/form_ubah_profil',
                );
                $this->load->view('header');
                $this->load->view('kades/sidebar_kades');
                $this->load->view('topbar');
                $this->load->view($result);
                $this->load->view('footer');
        }

        // aksi ubah profil
        public function aksi_ubah_profil()
        {
                $id_kades = $this->input->post('id_kades');

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
                        'foto_profil_kades' => $this->input->post('foto_profil_kades'),
                        'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                        'no_kk' => $this->input->post('no_kk'),
                        'status_hub_kel' => $this->input->post('status_hub_kel'),
                        'no_hp' => $this->input->post('no_hp'),
                        'foto_ktp' => $this->input->post('foto_ktp'),
                        'foto_kk' => $this->input->post('foto_kk'),
                        'foto_ttd' => $this->input->post('foto_ttd'),
                        'status_kepegawaian' => $this->input->post('status_kepegawaian'),
                );

                $this->m_kepala_desa->aksi_ubah_profil($id_kades, $data);

                if ($this->m_kepala_desa->aksi_ubah_profil($id_kades, $data)) {
                        $this->session->set_flashdata('success', 'Data Kepala Desa berhasil ditambahkan');
                        echo "sukses";
                } else {
                        $this->session->set_flashdata('error', 'Data Kepala Desa gagal ditambahkan');
                        echo "gagal";
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
