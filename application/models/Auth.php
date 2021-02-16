<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Model
{
    public function signup()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password1');

        $data = [
            'email' => htmlspecialchars($email),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1
        ];

        $this->db->insert('user', $data);
    }
}
