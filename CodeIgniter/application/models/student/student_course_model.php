<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_course_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'student_course';
    }

    public function get_by_username($username) {
        $sql = 'SELECT course_id FROM ' . $this->get_table_name() . ' WHERE username=?';
        $query = $this->db->query($sql, array($username));
        return $query->result();
    }

}