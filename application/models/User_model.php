<?php
class User_model extends CI_Model {
    
    public function register($data) {
        return $this->db->insert('users', $data);
    }
}
