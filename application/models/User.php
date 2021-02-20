<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
    public function getUserById()
    {
        $id = $this->session->userdata('id');
        $query = "SELECT u.*, l.level FROM user u JOIN `level` l ON l.id = u.level_id WHERE u.id = $id";
        return $this->db->query($query)->row_array();
    }
}
