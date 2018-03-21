<?php

class Person extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
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
        $this->load->view('common', $data);
    }

    public function personedit() {
        $tel = $this->input->post('tel');
        $qq = $this->input->post('qq');
        $city = $this->input->post('city');
        $address = $this->input->post('address');
        $profile = $this->input->post('profile');
        $update_time = time();

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

}
