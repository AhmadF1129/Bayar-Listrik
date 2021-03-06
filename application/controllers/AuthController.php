<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth');
	}

	public function index()
	{
		$data['tittle'] = 'Bayar Listrik | Sign In';

		$this->load->view('Template/auth_header', $data);
		$this->load->view('Auth/login');
		$this->load->view('Template/auth_footer');
	}

	public function register()
	{
		$table = "user";
		$data['tittle'] = 'Bayar Listrik | Sign Up';

		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'valid_email' => 'Please use valid email!!',
			'is_unique' => 'Email is already use!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'min_length' => 'This password too short!',
			'matches' => 'Password didnt match!!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
			'matches' => 'Password didnt match!!'
		]);

		if ($this->form_validation->run() == false)
		{
			$this->load->view('Template/auth_header', $data);
			$this->load->view('Auth/register');
			$this->load->view('Template/auth_footer');
		}
		else
		{
			$this->Auth->signup($table);
			$this->session->set_flashdata('message', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			Your Account has been created!!</div>');
			redirect('AuthController');
		}
	}

	public function signin()
	{
		$table = "user";
		$this->Auth->signin($table);
	}

	public function signout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->set_flashdata('message', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		Success to sign out!!</div>');
		redirect('AuthController');
	}
}
