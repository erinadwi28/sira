<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

        public function __construct(){
		parent::__construct();
		if($this->session->login['level_user']!=='admin') redirect('login');
	}

	
	public function index()
	{   

        $this->load->view('header');
        $this->load->view('admin/sidebar_admin');
        $this->load->view('topbar');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('footer');
        
        }

        public function data_kepaladesa()
	{
        $this->load->model('M_admin');
        $data_kepaladesa = $this->M_admin->get_data_kepaladesa();
        $result = array(
                'list_data' => $data_kepaladesa,
                'page' => 'admin/list_kepaladesa',
        );
        $this->load->view('header','admin/sidebar_admin','topbar',$result,'footer');
        }
        
}