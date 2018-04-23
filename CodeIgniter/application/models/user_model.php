<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'user';
    }

    public function add($username, $password, $identity, $email) {
        $data = array(
            'username' => $username,
            'password' => md5($password),
            'identity' => $identity,
            'email' => $email,
            'create_time' => time(),
            'update_time' => time()
        );
        return $this->db->insert($this->get_table_name(), $data);
    }

    public function update($where, $data) {
        return $this->db->update($this->get_table_name(), $data, $where);
    }

    public function get_by_username($username) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE username = ?';
        $query = $this->db->query($sql, array($username));
        return $query->row();
    }

    public function get_by_username_identity($username, $identity) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE username = ? AND identity = ?';
        $query = $this->db->query($sql, array($username, $identity));
        return $query->row();
    }

    public function get_by_username_password($username, $password, $identity) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE username = ? AND password = ? AND identity = ?';
        $query = $this->db->query($sql, array($username, md5($password), $identity));
        return $query->row();
    }

}