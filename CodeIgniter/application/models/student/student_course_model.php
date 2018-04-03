<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_course_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'student_course';
    }

    public function add($username, $course_id) {
        $data = array(
            'username' => $username,
            'course_id' => $course_id
        );
        return $this->db->insert($this->get_table_name(), $data);
    }

    public function get_by_username($username) {
        $sql = 'SELECT course_id FROM ' . $this->get_table_name() . ' WHERE username=?';
        $query = $this->db->query($sql, array($username));
        return $query->result();
    }

    public function get_by_username_course_id($username, $course_id) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE username = ? AND course_id = ?';
        $query = $this->db->query($sql, array($username, $course_id));
        return $query->row();
    }

}