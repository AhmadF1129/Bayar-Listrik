<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Bayar Listrik | Masuk';

		$this->load->view('Template/auth_header', $data);
		$this->load->view('Auth/login');
		$this->load->view('Template/auth_footer');
	}

	public function daftar()
	{
		$data['title'] = 'Bayar Listrik | Daftar';

		$this->load->view('Template/auth_header', $data);
		$this->load->view('Auth/daftar');
		$this->load->view('Template/auth_footer');
	}
}
