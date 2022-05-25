<?php

class Subscriber_m extends Lab_Model {
    
    protected $_table_name = 'admission';
    protected $_limit = '1';
            
    function __construct() {
        parent::__construct();
    }
    
    public function login() {
        $user = $this->retrieve_by(array(
            'student_id' => $this->input->post('student_id'),
            'password' => $this->input->post('password')
        ));
        
        $holder = array('student', 'teacher', 'staff');
        
        if(count($user)) {
            // log in user
            $info=$this->retrieve->read('registration',array('id'=>$user[0]->student_id));
            $data = array(
                'name'          =>$info[0]->name,
                'class'         =>$info[0]->class,
                'student_id'    => $user[0]->student_id,
                'holder'        => 'student',
                'loggedin'      => TRUE
            );
            
            $this->session->set_userdata($data);
            // var_dump($user);
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
    }
    
    public function loggedin() {
        return (bool) $this->session->userdata('loggedin');
    }
}

