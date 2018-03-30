<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/course_model');
        $this->load->model('teacher/knowledge_model');
        $this->load->model('teacher/question_model');
    }

    public function index() {
        $data['title'] = '首页';
        $data['operate'] = 'home';
        $data['seen'] = 'home';
        $data['username'] = $this->session->username;
        $data['identity'] = $this->session->identity;
        $data['email'] = $this->session->email;
        $data['tel'] = $this->session->tel;
        $data['qq'] = $this->session->qq;
        $data['address'] = $this->session->address;
        $data['city'] = $this->session->city;
        $data['profile'] = $this->session->profile;
        $data['avatar'] = empty($this->session->avatar) ? '/resource/imgs/default_avatar.png' : '/resource/imgs/' . $this->session->avatar;
        $data['course_list'] = $this->course_model->get_by_teacher($this->session->username);
        $data['knowledge_list'] = $this->knowledge_model->get_by_creater($this->session->username);
        $data['question_list'] = $this->question_model->get_by_creater($this->session->username);
        if ($this->session->identity == 0) {
            $this->load->view('teacher/common', $data);
        } else if ($this->session->identity == 1) {
            $this->load->view('student/common', $data);
        }
    }

}
