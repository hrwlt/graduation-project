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

    public function add_knowledge_list() {
        $knowledge_title = $this->input->post('knowledge_title');
        $knowledge_show = $this->input->post('knowledge_show');
        $knowledge_text = $this->input->post('knowledge_text');
        $creater = $this->session->username;

        if (!$knowledge_title) {
            $obj['success'] = FALSE;
            $obj['message'] = "知识点名称不能为空！";
            echo json_encode($obj);
            exit();
        }

        $result = $this->knowledge_model->add($knowledge_title, $creater, $knowledge_show, $knowledge_text);
        if (!$result) {
            $obj['success'] = FALSE;
            $obj['message'] = "数据添加失败！";
            echo json_encode($obj);
            exit();
        }

        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();

    }

}
