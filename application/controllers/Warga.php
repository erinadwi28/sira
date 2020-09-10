<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		if($this->session->login['level_user']!=='warga') redirect('login');
        }
        
	public function index()
	{   

        $this->load->view('header');
        $this->load->view('warga/sidebar_warga');
        $this->load->view('topbar');
        $this->load->view('warga/dashboard_warga');
        $this->load->view('footer');
        
	}
}