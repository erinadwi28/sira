<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_warga', 'm_warga');
		if (!$this->session->userdata('role_warga'))  {
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
        $this->load->view('warga/sidebar_warga');
        $this->load->view('topbar', $data);
        $this->load->view('warga/profil_saya', $data_detail);
        $this->load->view('footer');
	}

	// tampil form ubah profil saya beserta datanya
    public function form_ubah_profil_saya($id_warga)
    {
        $data['warga'] = $this->db->get_where('warga', ['id_warga' =>
        $this->session->userdata('id_warga')])->row_array();

        $detailhere = array('id_warga' => $id_warga);
        $data_detail['detail_profil_saya'] = $this->m_warga->get_detail_profil_saya($detailhere,'warga')->result();

        $this->load->view('header');
        $this->load->view('warga/sidebar_warga');
        $this->load->view('topbar', $data);
        $this->load->view('warga/form_ubah_profil_saya', $data_detail);
        $this->load->view('footer');
	}
	
	// aksi ubah profil saya
    public function aksi_ubah_profil_saya()
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
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'no_kk' => $this->input->post('no_kk'),
            'status_hub_kel' => $this->input->post('status_hub_kel'),
            'no_hp' => $this->input->post('no_hp'),
        );

        $detailhere = $this->input->post('id_warga');

        $this->m_warga->aksi_ubah_data_profil_saya($detailhere, $data, 'warga');

        $this->session->set_flashdata('success', 'diubah');
        redirect('warga/profil_saya/' . $detailhere);
	}
	
	// upload foto profil warga
    public function upload_foto_profil()
    {
        $where = $this->input->post('id_warga');
        if ($_FILES != null) {
            $this->aksi_upload_foto_profil($_FILES);
        }
        $this->session->set_flashdata('success', 'diubah');
        redirect('warga/profil_saya/'.$where);
    }

    //upload foto profil warga
    private function aksi_upload_foto_profil($id_warga)
    {
        $config['upload_path']          = './assets/uploads/warga/';
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
        redirect('warga/profil_saya/'.$where);
    }

    //upload foto ktp warga
    private function aksi_upload_foto_ktp($id_warga)
    {
        $config['upload_path']          = './assets/uploads/warga/';
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
        redirect('warga/profil_saya/'.$where);
    }

    //upload foto kk warga
    private function aksi_upload_foto_kk($id_warga)
    {
        $config['upload_path']          = './assets/uploads/warga/';
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
    public function form_ubah_kata_sandi_profil_saya($id_warga)
    {
        $data['warga'] = $this->db->get_where('warga', ['id_warga' =>
        $this->session->userdata('id_warga')])->row_array();

        $detailhere = array('id_warga' => $id_warga);
        $data_detail['detail_profil_saya'] = $this->m_warga->get_detail_profil_saya($detailhere,'warga')->result();

        $this->load->view('header');
        $this->load->view('warga/sidebar_warga');
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
            redirect('warga/form_ubah_kata_sandi_profil_saya/'.$where);
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
	public function form_suket001()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_001/form_suket001');
		$this->load->view('footer');
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
	public function form_suket002()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_002/form_suket002');
		$this->load->view('footer');
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
	public function form_suket003()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_003/form_suket003');
		$this->load->view('footer');
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
	public function form_suket004()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_004/form_suket004');
		$this->load->view('footer');
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
	public function form_suket005()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_005/form_suket005');
		$this->load->view('footer');
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
	public function form_suket006()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_006/form_suket006');
		$this->load->view('footer');
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
	public function form_suket007()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_007/form_suket007');
		$this->load->view('footer');
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
	public function form_suket008()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_008/form_suket008');
		$this->load->view('footer');
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
	public function form_suket009()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_009/form_suket009');
		$this->load->view('footer');
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
	public function form_suket010()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_010/form_suket010');
		$this->load->view('footer');
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
	public function form_suket011()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_011/form_suket011');
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
	public function form_suket012()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_012/form_suket012');
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
	public function form_suket013()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_013/form_suket013');
		$this->load->view('footer');
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
	public function form_suket014()
	{
		$this->load->view('header');
		$this->load->view('warga/sidebar_warga');
		$this->load->view('topbar');
		$this->load->view('warga/suket_014/form_suket014');
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
