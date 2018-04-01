<?php

class Person extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('teacher/course_model');
        $this->load->model('teacher/knowledge_model');
        $this->load->model('teacher/question_model');
    }

    public function index($seen) {
        switch ($seen) {
            case 'personedit':
                $data['title'] = '个人中心 - 基本设置';
                break;
            case 'personavatar':
                $data['title'] = '个人中心 - 头像设置';
                break;
            case 'personsafe':
                $data['title'] = '个人中心 - 安全设置';
                break;
            default:
                break;
        }
        $data['operate'] = 'person';
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
            $this->load->view('teacher/common', $data);
        } else if ($this->session->identity === '1') {
            $this->load->view('student/common', $data);
        } else {
            var_dump('请先登录！');
        }
    }

    public function personedit() {
        $tel = $this->input->post('tel');
        $qq = $this->input->post('qq');
        $city = $this->input->post('city');
        $address = $this->input->post('address');
        $profile = $this->input->post('profile');
        $update_time = time();

        if (!isset($this->session->id)) {
            $obj['message'] = '请先登录！';
            $obj['success'] = FALSE;
            $obj['url'] = '/login/index';
            echo json_encode($obj);
            exit();
        }

        $where = [
            'id' => $this->session->id
        ];
        $array = [
            'tel' => $tel,
            'qq' => $qq,
            'city' => $city,
            'address' => $address,
            'profile' => $profile,
            'update_time' => $update_time
        ];
        $update = $this->user_model->update($where, $array);
        if($update){
            $obj['message'] = '更新成功！';
            $obj['success'] = TRUE;
            // 添加session
            $session_array = [
                'tel' => $tel,
                'qq' => $qq,
                'city' => $city,
                'address' => $address,
                'profile' => $profile
            ];
            $this->session->set_tempdata($session_array, NULL, 86400);
        }else{
            $obj['message'] = '更新失败！';
            $obj['success'] = FALSE;
        }

        echo json_encode($obj);
        exit();
    }

    public function personsafe() {
        $username = $this->session->username;
        $identity = $this->session->identity;
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');

        if (!isset($this->session->id)) {
            $obj['message'] = '请先登录！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $row = $this->user_model->get_by_username_password($username, $old_password, $identity);
        if (!$row) {
            $obj['message'] = '请输入正确的旧密码！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        if (trim($new_password) != trim($confirm_password)) {
            $obj['message'] = '两次输入密码必须相同！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $where = ['id' => $this->session->id];
        $array = ['password' => md5($new_password)];
        $result = $this->user_model->update($where, $array);
        if (!$result) {
            $obj['message'] = '密码修改失败，请稍后再试！';
            $obj['success'] = FALSE;
            echo json_encode($obj);
            exit();
        }

        $obj['message'] = '密码修改成功！';
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

    public function upload_avatar() {
        $config['upload_path'] = getcwd() . '/resource/imgs/';
        $config['allowed_types'] = 'text|gif|jpg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            var_dump($this->upload->display_errors());
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $where = ['id' => $this->session->id];
            $array = ['avatar' => $file_name];
            $result = $this->user_model->update($where, $array);
            if (!$result) {

            }
            $session_array = [
                'avatar' => $file_name,
            ];
            $this->session->set_tempdata($session_array, NULL, 86400);
            redirect('/person/index/personavatar');
        }
    }

    public function upload() {
        $this->load->view('upload');
    }

}
