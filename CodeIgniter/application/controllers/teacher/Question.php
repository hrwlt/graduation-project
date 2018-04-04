<?php

class Question extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function delete_question(){
        $question_id = $this->input->post('question_id');
        $obj['question_id'] = $question_id;
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

}
