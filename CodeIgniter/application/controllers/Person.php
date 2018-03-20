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

}
