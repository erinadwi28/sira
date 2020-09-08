<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {

	
	public function index()
	{
		$this->load->view('sira/landing_page');
	}
}
