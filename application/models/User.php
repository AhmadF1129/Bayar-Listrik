<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
    public function getUserById()
    {
        return $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
    }
}
