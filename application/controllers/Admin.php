<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{   

        $this->load->view('header');
        $this->load->view('admin/sidebar_admin');
        $this->load->view('topbar');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('footer');
        
	}
}