<?php

class Knowledge extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function delete_knowledge(){
        $knowledge_id = $this->input->post('knowledge_id');
        $obj['id'] = $knowledge_id;
        $obj['success'] = TRUE;
        echo json_encode($obj);
        exit();
    }

}
