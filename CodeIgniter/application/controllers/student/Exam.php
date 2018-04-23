<?php

class Exam extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function end_exam() {
        $exam_question_num = $this->input->post('exam_question_num');
        $right_num = 0;
        for ($i = 0; $i < $exam_question_num; $i++) {
            $option = $this->input->post('option' . $i);
            $right_option = $this->input->post('right_option' . $i);
            if ($option == $right_option) {
                $right_num++;
            }
        }

        $obj['success'] = TRUE;
        $obj['right_num'] = $right_num;
        $obj['accuracy_rate'] = $right_num / $exam_question_num * 100;
        echo json_encode($obj);
        exit();

    }

}
