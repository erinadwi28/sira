<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_landing', 'm_landing');
	}

	public function index()
	{        
		$data_detail['data_kades'] = $this->m_landing->get_data_kades()->result();

        $this->load->view('landing_page', $data_detail);
	}

    // aksi tambah data feedback
    public function aksi_tambah_feedback()
    {
        $data = array(
            'tanggal_kirim' => date("Y/m/d"),
            'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
            'isi' => $this->input->post('isi'),
        );

        if ($this->m_landing->tambah_feedback($data)); {
            $this->session->set_flashdata('success', 'dikirim');
            redirect('landing_page');
        }
	}
}
