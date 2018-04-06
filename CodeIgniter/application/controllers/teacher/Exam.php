<?php

class Exam extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/exam_model');
        $this->load->model('teacher/question_model');
    }

    public function end_exam() {
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

    public function startExam() {
        $exam_name = $this->input->post('exam_name');
        $course_id = $this->input->post('course_id');
        $creater = $this->session->username;
        $monitor_teacher = $this->input->post('exam_monitor_teacher');
        $exam_question_id = $this->input->post('exam_question_id');
        $exam_question_num = $this->input->post('exam_question_num');

        if ($exam_question_num <= 0) {
            $obj['message'] = "题目数量不能为零！";
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $question_result = $this->question_model->get_by_id($exam_question_id);
        if (!$question_result) {
            $obj['message'] = "该题库不存在！";
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $question = json_decode($question_result->question, TRUE);

        if (count($question) < $exam_question_num) {
            $obj['message'] = "该题库数量不够！";
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $row = $this->exam_model->get_by_course_id($course_id);
        if ($row) {
            $obj['message'] = "该课程考试已经存在！";
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $exam_question = [];
        $exam_question_keys = array_rand($question, $exam_question_num);

        if ($exam_question_num == 1) {
            $exam_question[] = $question[$exam_question_keys];
        } else {
            foreach ($exam_question_keys as $exam_question_key) {
                $exam_question[] = $question[$exam_question_key];
            }
        }

        $exam_question = json_encode($exam_question);

        $result = $this->exam_model->add($exam_name, $course_id, $creater, $monitor_teacher, $exam_question);

        if (!$result) {
            $obj['message'] = "数据库插入失败！";
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();

    }
}
