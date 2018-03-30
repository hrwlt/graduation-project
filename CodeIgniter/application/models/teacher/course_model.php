<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'course';
    }

    public function add($teacher, $student_num, $status) {
        $data = array(
            'teacher' => $teacher,
            'student_num' => $student_num,
            'status' => $status,
            'destory' => 0,
            'create_time' => time(),
            'update_time' => time()
        );
        return $this->db->insert($this->get_table_name(), $data);
    }

    public function update($where, $data) {
        return $this->db->update($this->get_table_name(), $data, $where);
    }

    public function get_by_teacher($teacher) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE teacher = ? AND destory = 0';
        $query = $this->db->query($sql, array($teacher));
        return $query->result();
    }

}