<?php

class Subscriber extends Subscriber_Controller {

    function __construct() {
        parent::__construct();
        
        $this->data['meta_title'] = 'subscriber login';
        
        $this->load->model('retrieve');
        $this->data['banner']=$this->retrieve->read('banner');
        $this->data['latest_news']=$this->retrieve->read('latest_news',array(),"desc");
        $this->data['latest_notice']=$this->retrieve->read('notice',array(),"desc");
		$this->data['theme_setting']=$this->retrieve->read('theme_setting');

        $todays_where=array("date"=>date("Y-m-d"));

        $this->data['todays_visitor']=$this->retrieve->read('visitors',$todays_where);
        $this->data['total_visitor']=$this->retrieve->readDistinct('visitors','ip');
    }
    
    public function login() {
        $this->data['confirmation'] = NULL;
        
        $this->form_validation->set_rules('student_id', 'Student ID', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if($this->form_validation->run() == TRUE) {
            if($this->subscriber_m->login() == TRUE) {
                // Send message End here
                redirect('studentPanel/dashboard');
            } else {
                $messArr = array(
                    "title" => "Warning",
                    "emit"  => "Wrong Student ID or Password!",
                    "btn"   => false
                );

                $this->session->set_flashdata('error', message('warning', $messArr));
                redirect('access/subscriber/login', 'refresh');
            }
        }

        if($this->subscriber_m->loggedin() == TRUE){
            redirect('studentPanel/dashboard');
        }
        
        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/banner', $this->data);
        $this->load->view('includes/navbar', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('subscriber-login', $this->data);
        $this->load->view('includes/aside', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function logout(){
        $this->subscriber_m->logout();
        redirect('access/subscriber/login');
    }
    
   
}

