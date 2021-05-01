<?php
defined('BASEPATH') OR exit('ni direct  scrtipt access allowed!');

class admins extends CI_Controller
{
    public function index()
    {
        $this->load->view('/admin/login');
    }
    public function verify_login()
    {
        redirect('/admins/show_dashboard');
    }
    public function show_dashboard()
    {
        $this->load->view('/admin/partials/header');
        $this->load->view('/admin/dashboard');
    }
    public function show($id)
    {
        $this->load->view('/admin/partials/header');
        $this->load->view('/admin/show_order');
    }
    public function products()
    {
        $this->load->view('/admin/partials/header');
        $this->load->view('/admin/products');
    }
}
?>