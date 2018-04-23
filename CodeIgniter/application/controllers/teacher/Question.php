<?php

class Question extends CI_Controller {

    private static $RIGHT_OPTION = ["A" => 0, "B" => 1, "C" => 2, "D" => 3];

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/question_model');
    }

    public function question_list($question_id) {
        if (!isset($this->session->username)) {
            var_dump('请先登录！');
        }
        $data['avatar'] = empty($this->session->avatar) ? '/resource/imgs/default_avatar.png' : '/resource/imgs/' . $this->session->avatar;
        $data['username'] = $this->session->username;
        $row = $this->question_model->get_by_id($question_id);
        if (!$row) {
            var_dump('题库ID不存在！');
        }
        $data['question_list'] = json_decode($row->question);
        $data['question_id'] = $question_id;
        $data['option_array'] = ["A", "B", "C", "D"];
        $this->load->view('teacher/question_list', $data);
    }


    public function add_question() {
        $knowledge_id = $this->input->post('knowledge_id');
        $question_name = $this->input->post('question_name');
        $creater = $this->session->username;
        if (!$question_name) {
            $obj['message'] = '题库名称不能为空！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $row = $this->question_model->add($question_name, $creater, $knowledge_id, '');
        if (!$row) {
            $obj['message'] = '数据库添加失败！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
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

    public function question_add() {
        $question_id = $this->input->post('question_id');
        $question_name = $this->input->post('question_name');
        $question_option_A = $this->input->post('question_option_A');
        $question_option_B = $this->input->post('question_option_B');
        $question_option_C = $this->input->post('question_option_C');
        $question_option_D = $this->input->post('question_option_D');
        $right_option = $this->input->post('right_option');
        if (!$question_id) {
            $obj['message'] = '题库ID不存在！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        if (!in_array($right_option, ["A", "B", "C", "D"])) {
            $obj['message'] = '正确选项请填写A、B、C或者D！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $tmp = array();
        $tmp['question_name'] = $question_name;
        $tmp['option'] = [
            $question_option_A,
            $question_option_B,
            $question_option_C,
            $question_option_D
        ];
        $tmp['right_option'] = $this::$RIGHT_OPTION[$right_option];

        $row = $this->question_model->get_by_id($question_id);
        $result = json_decode($row->question, TRUE);
        if (empty($result)) {
            $result = array();
        }
        array_push($result, $tmp);
        $question = json_encode($result);
        $where = ['id' => $question_id];
        $data = ['question' => $question];
        $this->question_model->update($where, $data);

        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

    public function edit_question_list(){
        $question_id = $this->input->post('question_id');
        $question_list_id = $this->input->post('question_list_id');
        $question_name = $this->input->post('question_name');
        $question_option_A = $this->input->post('question_option_A');
        $question_option_B = $this->input->post('question_option_B');
        $question_option_C = $this->input->post('question_option_C');
        $question_option_D = $this->input->post('question_option_D');
        $right_option = $this->input->post('right_option');
        if (!$question_id) {
            $obj['message'] = '题库ID不存在！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        if (!in_array($right_option, ["A", "B", "C", "D"])) {
            $obj['message'] = '正确选项请填写A、B、C或者D！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $tmp = array();
        $tmp['question_name'] = $question_name;
        $tmp['option'] = [
            $question_option_A,
            $question_option_B,
            $question_option_C,
            $question_option_D
        ];
        $tmp['right_option'] = $this::$RIGHT_OPTION[$right_option];

        $row = $this->question_model->get_by_id($question_id);
        $result = json_decode($row->question, TRUE);
        $result[$question_list_id] = $tmp;
        $question = json_encode($result);
        $where = ['id' => $question_id];
        $data = ['question' => $question];
        $this->question_model->update($where, $data);

        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

    public function delete_question_list() {
        $question_id = $this->input->post('question_id');
        $question_list_id = $this->input->post('question_list_id');
        if (!$question_id) {
            $obj['message'] = '题库ID不存在！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }
        $row = $this->question_model->get_by_id($question_id);
        $result = json_decode($row->question, TRUE);
        array_splice($result, $question_list_id, 1);
        $question = json_encode($result);
        $where = ['id' => $question_id];
        $data = ['question' => $question];
        $this->question_model->update($where, $data);
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

}
