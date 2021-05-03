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
		$product = $this->product->get_selected_product($id);
		$this->load->view('/shop/partials/header');
		$this->load->view('/shop/show', $product);
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
	public function get_similar_items()
	{
		$similar_items['similar_items'] = $this->product->get_similar_items($this->input->post(NULL, TRUE));
		$this->load->view('/shop/partials/similar_items', $similar_items);
	}
	public function show_by_category($category_id){
		$product['products'] = $this->product->get_by_category($category_id);
		$this->load->view('/shop/partials/products_list', $product);
	}
}
