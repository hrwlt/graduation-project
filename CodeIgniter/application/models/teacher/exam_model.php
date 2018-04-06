<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'exam';
    }

    public function add($exam_name, $course_id, $creater, $monitor_teacher, $exam_question) {
        $data = array(
            'exam_name' => $exam_name,
            'course_id' => $course_id,
            'creater' => $creater,
            'monitor_teacher' => $monitor_teacher,
            'status' => '正在进行中',
            'exam_question' => $exam_question,
            'create_time' => time(),
            'update_time' => time()
        );
        return $this->db->insert($this->get_table_name(), $data);
    }

    public function update($where, $data) {
        return $this->db->update($this->get_table_name(), $data, $where);
    }

    public function get_by_creater($creater) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE creater = ? OR monitor_teacher = ?';
        $query = $this->db->query($sql, array($creater, $creater));
        return $query->result();
    }

    public function get_by_course_id($course_id) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE course_id = ? AND status = ?';
        $query = $this->db->query($sql, array($course_id, "正在进行中"));
        return $query->row();
    }

}