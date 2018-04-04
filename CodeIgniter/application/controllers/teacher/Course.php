<?php

class Course extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/course_model');
    }

    public function delete_course(){
        $course_id = $this->input->post('course_id');
        if (!$course_id) {
            $obj['message'] = '删除发生异常';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $where = ['id' => $course_id];
        $data = ['destory' => 1];
        $result = $this->course_model->update($where, $data);
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
