<?php

class Home extends CI_Controller {

    private static $ARRAY_TITLE = array(
        "home" => "首页",
        "personedit" => "个人中心-基本设置",
        "personavatar" => "个人中心-头像设置",
        "personsafe" => "个人中心-安全设置",
        "question" => "我的试题库",
        "knowledge" => "我的知识点库",
        "course" => "我的课程",
        "exam" => "考试列表",
        "myCourse" => "我的课程",
        "myExam" => "我的考试"
    );

    public function __construct() {
        parent::__construct();
        $this->load->model('teacher/course_model');
        $this->load->model('teacher/knowledge_model');
        $this->load->model('teacher/question_model');
        $this->load->model('teacher/exam_model');
        $this->load->model('student/student_course_model');
    }

    public function index($title, $operate, $seen) {
        $data['title'] = $this::$ARRAY_TITLE[$title];
        $data['operate'] = $operate;
        $data['seen'] = $seen;
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
            $data['exam_lists'] = $this->exam_model->get_by_creater($this->session->username);
            $this->load->view('teacher/common', $data);
        } else if ($this->session->identity === '1') {
            //获取学生用户对应的课程及信息
            $course_list = [];
            $exam_list = [];
            $course_ids = $this->student_course_model->get_by_username($this->session->username);
            foreach ($course_ids as $course_id) {
                $student_course_id = $course_id->course_id;
                $course_info = $this->course_model->get_by_id($student_course_id);
                $course_list[] = $course_info;
                //获取学生对应的考试信息
                $exam_info = $this->exam_model->get_by_course_id($student_course_id);
                if ($exam_info && $course_info->status == "进行中") {
                    $exam_info->exam_question = json_decode($exam_info->exam_question);
                    $exam_list[] = $exam_info;
                }
            }
            $data['student_course_lists'] = $course_list;
            $data['student_exam_lists'] = $exam_list;
            $data['course_lists'] = $this->course_model->get_all();
            $data['option_array'] = ["A、","B、","C、","D、"];
            $this->load->view('student/common', $data);
        } else {
            var_dump('请先登录！');
        }
    }

}
