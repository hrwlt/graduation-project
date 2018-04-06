<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'course';
    }

    public function add($teacher, $course_name, $course_instruction) {
        $data = array(
            'teacher' => $teacher,
            'course_name' => $course_name,
            'course_instruction' => $course_instruction,
            'student_num' => 0,
            'status' => "进行中",
            'destory' => 0,
            'create_time' => time(),
            'update_time' => time()
        );
        return $this->db->insert($this->get_table_name(), $data);
    }

    public function update($where, $data) {
        return $this->db->update($this->get_table_name(), $data, $where);
    }

    public function get_all() {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE status= "进行中" AND destory = 0';
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_by_teacher($teacher) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE teacher = ? AND destory = 0';
        $query = $this->db->query($sql, array($teacher));
        return $query->result();
    }

    public function get_by_id($id) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE id = ?';
        $query = $this->db->query($sql, array($id));
        return $query->row();
    }

}