<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function get_table_name() {
        return 'knowledge';
    }

    public function add($knowledge_name, $creater, $is_show, $knowledge_text) {
        $data = array(
            'knowledge_name' => $knowledge_name,
            'creater' => $creater,
            'is_show' => $is_show,
            'knowledge_text' => $knowledge_text,
            'create_time' => time(),
            'update_time' => time(),
            'destory' => 0
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