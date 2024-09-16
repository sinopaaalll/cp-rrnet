<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = [
            'title' => "Dashboard"
        ];

        $this->load->view('component/admin/header', $data);
        $this->load->view('component/admin/sidebar');
        $this->load->view('pages/admin/dashboard/index', $data);
        $this->load->view('component/admin/footer');
    }
}
