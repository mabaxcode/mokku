<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();

        $this->user_id = $this->session->userdata('user_id');
        
	}

	public function productDetail($product_id)
	{	

		$product = get_any_table_row(array('product_id' => $product_id), 'product');

		switch ($product['category']) {
			case '1':
				$category = "Kain Sarung";
				break;
			case '2':
				$category = "Kaftan";
				break;
			case '3':
				$category = "Kemeja";
				break;
			case '4':
				$category = "Kaftan Sepasang";
				break;
			
			default:
				$category = "Unknow Category";
				break;
		}

		$data['category'] = $category;
		$data['product']  = $product;


		$product_img = get_any_table_array(array('product_id' => $product_id, 'is_submit' => '1'), 'product_image');

		$data['product_img'] = $product_img;
		$data['user_id']     = $this->user_id;

		$this->load->view('product-detail', $data);
	}

	function addToCart($data=false)
	{
		
	}
}
