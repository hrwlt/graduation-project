<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'question';
    }

    public function add($question_name, $creater, $knowledge_id, $question, $status, $destory = 0) {
        $data = array(
            'question_name' => $question_name,
            'creater' => $creater,
            'knowledge_id' => $knowledge_id,
            'question' => $question,
            'status' => $status,
            'destory' => $destory,
            'create_time' => time(),
            'update_time' => time()
        );
        return $this->db->insert($this->get_table_name(), $data);
    }

    public function update($where, $data) {
        return $this->db->update($this->get_table_name(), $data, $where);
    }

    public function get_by_creater($creater) {
        $sql = 'SELECT * FROM ' . $this->get_table_name() . ' WHERE creater = ? AND destory = 0';
        $query = $this->db->query($sql, array($creater));
        return $query->result();
    }

}