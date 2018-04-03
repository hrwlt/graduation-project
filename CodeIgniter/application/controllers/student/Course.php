<?php

class Course extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('teacher/course_model');
        $this->load->model('teacher/knowledge_model');
        $this->load->model('teacher/question_model');
        $this->load->model('student/student_course_model');
    }

    public function chose_course() {
        $course_id = $this->input->post('course_id');
        $username = $this->session->username;
        if (!$username) {
            $obj['message'] = "你还未登录！";
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        } else {
            $row = $this->student_course_model->get_by_username_course_id($username, $course_id);
            if ($row) {
                $obj['message'] = "你已经选修该课程！";
                $obj['success'] = FALSE;
                echo json_encode($obj);
                exit();
            } else {
                $this->student_course_model->add($username, $course_id);
                $obj['message'] = "选修成功！";
                $obj['success'] = TRUE;
                echo json_encode($obj);
                exit();
            }
        }
    }

}
