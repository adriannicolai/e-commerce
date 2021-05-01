<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller {

	public function index()
	{
		$this->load->view('/shop/partials/header');
		$this->load->view('/shop/products');
	}
	public function show($id)
	{
		$clean_id['id'] = $this->security->xss_clean($id);
		$this->load->view('/shop/partials/header');
		$this->load->view('/shop/show', $clean_id);
	}
	public function carts()
	{
		echo 'adrian';
	}
}
