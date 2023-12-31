<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Navbar');
        $this->load->library('session');
    }

    function index(){
        $data['judul'] = 'Homepage';
        $data['kategori'] = $this->Navbar->getCategories();
        $data['userlogin'] = $this->session->userdata('logged_in');
        $this->load->view('home_v', $data);
    }
}