<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        if ( $this->session->userdata('user_type') == "ADMIN") {
        	redirect('admin');
        }
        
	}

	public function index()
	{
		$this->load->view('home');
	}
}
