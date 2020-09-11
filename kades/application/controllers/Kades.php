<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kades extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('level_user')) {
			redirect('login');
		}
	}
	
	public function index()
	{   

        $this->load->view('header');
        $this->load->view('kades/sidebar_kades');
        $this->load->view('topbar');
        $this->load->view('kades/dashboard_kades');
        $this->load->view('footer');
        
	}
}