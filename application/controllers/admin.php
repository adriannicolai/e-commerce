<?php
defined('BASEPATH') OR exit('ni direct  scrtipt access allowed!');

class admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('/admin/login');
    }
}
?>