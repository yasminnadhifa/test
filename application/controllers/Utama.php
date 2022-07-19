<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

    }

    public function index()
    {
        $this->load->view('layout/header_user');
        $this->load->view('auth/utama');
        $this->load->view('layout/footer_user');

    }

}