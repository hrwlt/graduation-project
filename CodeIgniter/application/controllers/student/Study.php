<?php

class Study extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/course_model');
    }

    public function index($id) {
        $data['username'] = $this->session->username;
        $data['avatar'] = empty($this->session->avatar) ? '/resource/imgs/default_avatar.png' : '/resource/imgs/' . $this->session->avatar;
        $course_list = $this->course_model->get_by_id($id);
        $data['course_name'] = $course_list->course_name;
        $data['course_instruction'] = $course_list->course_instruction;
        $this->load->view('student/study', $data);
    }

}
