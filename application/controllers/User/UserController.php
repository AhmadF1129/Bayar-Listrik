<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    public function index()
    {
        $data['tittle'] = "Bayar Listrik | Profiles";
        $data['user'] = $this->User->getUserById();

        $this->load->view('Template/main_header', $data);
        $this->load->view('Template/main_sidebar', $data);
        $this->load->view('Template/main_topbar', $data);
        $this->load->view('User/index');
        $this->load->view('Template/main_footer');
    }
}