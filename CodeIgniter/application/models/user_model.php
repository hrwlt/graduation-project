<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'user';
    }

    public function get_by_username_password($username, $password, $identity) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE username = ? AND password = ? AND identity = ?';
        $query = $this->db->query($sql, array($username, md5($password), $identity));
        return $query->row();
    }

}