<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt extends CI_Controller {

        public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('role_rt'))  {
			redirect('login');
		}
	}
	
	public function index()
	{   

        $this->load->view('header');
        $this->load->view('rt/sidebar_rt');
        $this->load->view('topbar');
        $this->load->view('rt/dashboard_rt');
        $this->load->view('footer');
        
	}

}
