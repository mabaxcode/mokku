<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('Manage_model', 'DbManage');

        if ( $this->session->userdata('user_type') <> "ADMIN") {
        	redirect();
        }
	}

	function addProduct($data=false)
	{	
		$data['tempkey'] = getRandomString('20');
	    $this->load->view('admin/add-product', $data);
	}

	function upload_product_img($data=false)
	{
		print_r($_FILES['file']);
	}
}
