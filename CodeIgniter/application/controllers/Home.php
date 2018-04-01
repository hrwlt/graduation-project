<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/course_model');
        $this->load->model('teacher/knowledge_model');
        $this->load->model('teacher/question_model');
        $this->load->model('student/student_course_model');
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
        if ($this->session->identity === '0') {
            $data['course_list'] = $this->course_model->get_by_teacher($this->session->username);
            $data['knowledge_list'] = $this->knowledge_model->get_by_creater($this->session->username);
            $data['question_list'] = $this->question_model->get_by_creater($this->session->username);
            $this->load->view('teacher/common', $data);
        } else if ($this->session->identity === '1') {
            //获取学生用户对应的课程及信息
            $course_list = [];
            $course_ids = $this->student_course_model->get_by_username($this->session->username);
            foreach ($course_ids as $course_id) {
                $tmp = new stdClass();
                $student_course_id = $course_id->course_id;
                $course_info = $this->course_model->get_by_id($student_course_id);
                $tmp->course_img = $course_info->course_img;
                $tmp->course_name = $course_info->course_name;
                $tmp->course_instruction = $course_info->course_instruction;
                if ($course_info->destory == 1) {
                    $tmp->course_status = '已关闭';
                } else {
                    $tmp->course_status = $course_info->status;
                }
                $course_list[] = $tmp;
            }
            $data['student_course_lists'] = $course_list;
            $this->load->view('student/common', $data);
        } else {
            var_dump('请先登录！');
        }
    }

}
