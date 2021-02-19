<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Model
{
    public function signup($table)
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password1');

        $data = [
            'nama_lengkap' => htmlspecialchars($name),
            'email' => htmlspecialchars($email),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'level_id' => 2,
        ];

        $this->db->insert($table, $data);
    }

    public function signin($table)
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where($table, ['email' => $email])->row_array();

        if ($user)
        {
           if (password_verify($password, $user['password']))
           {
               if ($user['level_id'] == 1)
               {
                   $data = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'nama_lengkap' => $user['nama_lengkap'],
                    'level_id' => $user['level_id'],
                   ];
                   $this->session->set_userdata($data);

                   redirect('Admin/AdminController');
               }
               else
               {
                $data = [
                 'id' => $user['id'],
                 'email' => $user['email'],
                 'nama_lengkap' => $user['nama_lengkap'],
                 'level_id' => $user['level_id'],
                ];
                $this->session->set_userdata($data);

                redirect('User/UserController');
               }
           }
           else
           {
            $this->session->set_flashdata('message', '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			Wrong Password!!</div>');
			redirect('AuthController');
           }
        }
        else
        {
            $this->session->set_flashdata('message', '
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			Email is not registered!!</div>');
			redirect('AuthController');
        }
        // Cek User
    }
}
