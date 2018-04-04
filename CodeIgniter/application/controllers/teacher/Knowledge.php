<?php

class Knowledge extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/knowledge_model');
    }

    public function delete_knowledge() {
        $knowledge_id = $this->input->post('knowledge_id');
        if (!$knowledge_id) {
            $obj['message'] = '知识点ID不存在！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $where = ['id' => $knowledge_id];
        $data = ['destory' => 1];
        $result = $this->knowledge_model->update($where, $data);
        if (!$result) {
            $obj['message'] = '数据库操作失败！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

    public function edit_knowledge_list() {
        $knowledge_id = $this->input->post('knowledge_id');
        $knowledge_text = $this->input->post('knowledge_text');
        if (!$knowledge_id) {
            $obj['success'] = FALSE;
            $obj['message'] = "知识点ID不存在！";
        }
        $where = ['id' => $knowledge_id];
        $data = ['knowledge_text' => $knowledge_text];
        $result = $this->knowledge_model->update($where, $data);
        if (!$result) {
            $obj['message'] = '数据库操作失败！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

}
