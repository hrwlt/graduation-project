<?php

class Exam extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/exam_model');
    }

    public function end_exam(){
        $exam_id = $this->input->post('exam_id');
        if (!$exam_id) {
            $obj['message'] = '考试ID不存在！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $where = ['id' => $exam_id];
        $data = ['status' => "已结束"];
        $result = $this->exam_model->update($where, $data);
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
