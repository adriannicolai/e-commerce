<?php
defined('BASEPATH') OR exit('no direct script access allowed!');

class product extends CI_Model
{
    function get_categories()
    {
        return $this->db->query('SELECT * FROM categories')->result_array();
    }
    function get_products($search)
    {
        return $this->db->query('SELECT *, products.id AS product_id FROM products LEFT JOIN images ON products.id = images.product_id WHERE name LIKE ? AND display_picture = ?', array('%'.$search.'%', 1))->result_array();
    }
}
?>