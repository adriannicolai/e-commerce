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
		$this->load->view('/shop/partials/header');
		$this->load->view('/shop/carts');
	}
	public function get_categories(){
		$categories['categories'] = $this->product->get_categories();
		$this->load->view('/shop/partials/category_list', $categories);
	}
	public function get_products()
	{
		$products['products'] = $this->product->get_products($this->input->post('search', TRUE));
		$this->load->view('/shop/partials/products_list', $products);
	}
}
