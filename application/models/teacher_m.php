<?php

class Teacher_m extends Lab_Model {
    
    protected $_table_name = 'employee';
    protected $_order_by = 'id';
    protected $_limit = '1';
    
    function __construct() {
        parent::__construct();
    }
    
    public function login() {
        $user = $this->retrieve_by(array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        ));

        if(count($user)) {
            $data = array(
                'name'          => $user[0]->employee_name,
                'username'      => $user[0]->username,
                'mobile'        => $user[0]->employee_mobile,
                'type'          => $user[0]->employee_type,
                'designation'   => $user[0]->employee_designation,
                'subject'       => $user[0]->employee_subject,
                'loggedin'      => TRUE
            );
            $this->session->set_userdata($data);
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
    }
    
    public function loggedin() {
        return (bool) $this->session->userdata('loggedin');
    }    
  
}

