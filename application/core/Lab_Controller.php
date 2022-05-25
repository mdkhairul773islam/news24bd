<?php

class Lab_Controller extends CI_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();

        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
        $this->data['description'] = NULL;



        //$this->data['label_lang'] = config_item('label_lang');
    }
}



// for frontend
class Frontend_Controller extends Lab_Controller {

    function __construct() {
        parent::__construct();

        // Set default meta title
        $this->data['meta_title'] = 'Frontend meta title';

        // load retrieve model
        $this->load->helper("form");
        $this->load->helper('ip');
        $this->load->helper("confirmation");

        // load retrieve model
        $this->load->model('retrieve');
        $this->load->model('action');
        $this->load->helper('custom');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('BanglaDate');
        $this->load->library('upload');

        // bangla date and month
        $this->data["bnDate"] = $this->bangladate->get_date();

        //Converting array to object
        $meta = $this->retrieve->read("site_meta");
        $meta_info=array();
        foreach ($meta as $meta_value) {
            $meta_info[$meta_value->meta_key] = $meta_value->meta_value;
        }
        $meta_data = (object) $meta_info;
        $this->data["meta"] = $meta_data;
        //Converting array to object

        //counter-------------------start
        $todays_where = array(
            "date" => date("Y-m-d")
        );

        $this->data['todays_visitor']=$this->retrieve->read('visitors',$todays_where);
        $this->data['total_visitor']=$this->retrieve->readDistinct('visitors','ip');
        $this->data['current_visitor']=count($this->action->read('current_visitor'));
        //counter-----------------------end

    }

}








// for backend
class Admin_Controller extends Lab_Controller {

    function __construct() {
        parent::__construct();

        // Set default meta title
        $this->data['meta_title'] = 'Backend meta title';

        // Load helpers
        $this->load->helper('form');
        $this->load->helper("file");
        $this->load->helper("custom");
        $this->load->helper("sms");
        $this->load->helper("confirmation");
        $this->load->helper("encryption");

        // Load libraties
        $this->load->library('form_validation');
        $this->load->library('session');

        // Load models
        $this->load->model('membership_m');
        //Loading Theme Data
        $this->load->model('action');

        // Login check
        $exception_uris = array(
            'access/users/login',
            'access/users/logout'
        );

        if(in_array(uri_string(), $exception_uris) == FALSE) {
            if($this->membership_m->loggedin() == FALSE) {
                redirect('access/users/login');
            } else {
                // set profile image
                // $status = json_decode($this->session->userdata('status'));
                $this->data['image'] = $this->session->userdata('image');
                $this->data['username'] = $this->session->userdata('username');
                $this->data['name'] = $this->session->userdata('name');
                $this->data['email'] = $this->session->userdata('email');
                $this->data['mobile'] = $this->session->userdata('mobile');
                $this->data['branch'] = $this->session->userdata('branch');

                $list_of_privilege = config_item('privilege');
                $this->data['privilege'] = $this->session->userdata('privilege');
            }
        }
    }

}

// for subscriber
class Subscriber_Controller extends Lab_Controller {

    function __construct() {
        parent::__construct();

        // Set default meta title
        $this->data['meta_title'] = 'Subscriber meta title';

        // Load helpers
        $this->load->helper('form');
        $this->load->helper("file");
        $this->load->helper("custom");
        $this->load->helper("sms");
        $this->load->helper("confirmation");

        // Load libraties
        $this->load->library('form_validation');
        $this->load->library('session');

        // Load models
        $this->load->model('subscriber_m');

        // Login check
        $exception_uris = array(
            'access/subscriber/login',
            'access/subscriber/logout'
        );

        if (in_array(uri_string(), $exception_uris) == FALSE) {
            if ($this->subscriber_m->loggedin() == FALSE) {
                redirect('access/subscriber/login');
            } else {
                $this->data['id'] = $this->session->userdata('student_id');
                $this->data['name'] = $this->session->userdata('name');
                $this->data['class'] = $this->session->userdata('class');
            }
        }
    }
}




// for backend
class Teacher_Controller extends Lab_Controller {

    function __construct() {
        parent::__construct();

        // Set default meta title
        $this->data['meta_title'] = 'Teacher panel meta title';

        // Load helpers
        $this->load->helper('form');
        $this->load->helper("file");
        $this->load->helper("custom");
        $this->load->helper("sms");
        $this->load->helper("confirmation");

        // Load libraties
        $this->load->library('form_validation');
        $this->load->library('session');

        // Load models
        $this->load->model('teacher_m');

        // Login check
        $exception_uris = array(
            'access/teachers/login',
            'access/teachers/logout'
        );

        if(in_array(uri_string(), $exception_uris) == FALSE) {
            if ($this->teacher_m->loggedin() == FALSE) {
                redirect('access/teachers/login');
            } else {
                // set profile image
                $this->data['name'] = $this->session->userdata('name');
                $this->data['username'] = $this->session->userdata('username');
                $this->data['mobile'] = $this->session->userdata('mobile');
                $this->data['type'] = $this->session->userdata('type');
                $this->data['designation'] = $this->session->userdata('designation');
                $this->data['subject'] = $this->session->userdata('subject');
            }
        }
    }

}
