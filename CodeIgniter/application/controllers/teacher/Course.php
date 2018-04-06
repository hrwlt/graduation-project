<?php

class Course extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/course_model');
    }

    public function delete_course() {
        $course_id = $this->input->post('course_id');
        if (!$course_id) {
            $obj['message'] = '删除发生异常';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $where = ['id' => $course_id];
        $data = ['destory' => 1, 'status' => "已归档", 'update_time' => time()];
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

    public function edit_course() {
        $course_id = $this->input->post('course_id');
        $course_instruction = $this->input->post('course_instruction');
        if (!$course_id) {
            $obj['message'] = '课程ID不存在！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $where = ['id' => $course_id];
        $data = ['course_instruction' => $course_instruction, 'update_time' => time()];
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

    public function add_course() {
        $teacher = $this->session->username;
        $course_name = $this->input->post('course_name');
        $course_instruction = $this->input->post('course_instruction');
        if (!$course_name) {
            $obj['message'] = '课程名称不能为空！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $result = $this->course_model->add($teacher, $course_name, $course_instruction);
        if (!$result) {
            $obj['message'] = '数据库新增失败';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

}
