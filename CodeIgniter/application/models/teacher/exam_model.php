<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'exam';
    }

    public function add($exam_name, $creater, $status) {
        $data = array(
            'exam_name' => $exam_name,
            'creater' => $creater,
            'status' => $status,
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

}