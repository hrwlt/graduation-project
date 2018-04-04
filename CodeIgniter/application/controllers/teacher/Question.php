<?php

class Question extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/question_model');
    }

    public function delete_question() {
        $question_id = $this->input->post('question_id');
        if (!$question_id) {
            $obj['message'] = '删除发生异常';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $where = ['id' => $question_id];
        $data = ['destory' => 1];
        $result = $this->question_model->update($where, $data);
        if (!$result) {
            $obj['message'] = '数据库删除失败';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

}
