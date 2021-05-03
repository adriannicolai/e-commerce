<?php
defined('BASEPATH') OR exit('no direct script access allowed!');

class product extends CI_Model
{
    function get_categories()
    {
        return $this->db->query('SELECT categories.id AS id ,categories.name AS category_name, count(products.id) AS category_count FROM categories LEFT JOIN products ON categories.id = products.category_id GROUP BY categories.name')->result_array();
    }
    function get_products($search)
    {
        $clean_search = $this->security->xss_clean($search);
        return $this->db->query('SELECT *, products.id AS product_id FROM products LEFT JOIN images ON products.id = images.product_id WHERE name LIKE ? AND display_picture = ?', array('%'. $clean_search.'%', 1))->result_array();
    }
    function get_selected_product($id)
    {
        $clean_id = $this->security->xss_clean($id);
        $product['product_infos'] = $this->db->query('SELECT *, products.id AS product_id FROM products WHERE id = ?', array($clean_id))->result_array();
        $product['product_images'] = $this->db->query('SELECT * FROM images WHERE product_id = ? LIMIT ?', array($clean_id, 5))->result_array();
        return $product;
    }
    function get_similar_items($post)
    {
        return $this->db->query('SELECT *, products.id AS product_id FROM products LEFT JOIN images ON products.id = images.product_id WHERE category_id = ? AND display_picture = ? AND  products.id != ? LIMIT ?', array($post['category_id'], 1, $post['selected_product'], 16))->result_array();
    }
    function get_by_category($category_id)
    {
        $clean_category_id = $this->security->xss_clean($category_id);
        return $this->db->query('SELECT *, products.id AS product_id FROM products LEFT JOIN images ON products.id = images.product_id WHERE category_id = ? AND display_picture = ?', array($clean_category_id, 1))->result_array();
    }
}
?>