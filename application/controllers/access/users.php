<?php

class Users extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->data['meta_title'] = 'Login';
        $this->load->model('action');
        $this->load->helper('ip');
    }

    public function login() {
        // $dashboard = config_item('privilege');
        //Users Information
        $system_info=$_SERVER['HTTP_USER_AGENT'];

        //Check Cookies Start here--------------------------
        if(isset($_COOKIE['user'])){
            $user_cookie=json_decode($_COOKIE['user']);

            $user = $this->action->read('users',array(
                'username' =>$user_cookie->username
            ));
            
            if(count($user)) {
                // log in user
                $data = array(
                    'user_id'       => $user[0]->id,
                    'login_period'  => date('Y-m-d H:i:s a'),
                    'name'          => $user[0]->name,
                    'email'         => $user[0]->email,
                    'username'      => $user[0]->username,
                    'mobile'        => $user[0]->mobile,
                    'privilege'     => $user[0]->privilege,
                    'image'         => $user[0]->image,
                    'branch'        => $user[0]->branch,
                    'holder'        => $user[0]->privilege,
                    'loggedin'      => TRUE
                );
                
                $this->session->set_userdata($data);
                // var_dump($user);
    
                // store access info
                $info = array(
                    'user_id'       => $user[0]->id,
                    'login_period'  => $this->session->userdata('login_period')
                );
                $this->db->insert("access_info", $info);
            }



        }
        //Check Cookies End here--------------------------

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean');

        if($this->form_validation->run() == TRUE) {
            if($this->membership_m->login() == TRUE) {
                $uname=$this->input->post('username');
                //Login Log inserting Start here
                $old_data = $this->action->read("login_log",array("id"=>"1"));
                
                $data=array(
                    "username" => $old_data[0]->username,
                    "datetime" => $old_data[0]->datetime
                );
                $this->action->update("login_log",$data,array("id"=>"2"));

                $data=array(
                    "username" => $uname,
                    "datetime" => date("Y-m-d_h:i:s a")
                );
                $this->action->update("login_log",$data,array("id"=>"1"));

                /*
                //Login Log insertig End here
                //Send message Start here
                $content= $uname.' is trying to access to your application system information is : '.$system_info.',IP Address: '.get_client_ip();
                //Getting Message Length
                $messLen = 0;
                $strlength=strlen($content);
                if( $strlength <= 160){ $messLen = 1; } 
                else if( $strlength <= 306){ $messLen = 2; } 
                else if( $strlength <= 459){ $messLen = 3; } 
                else if( $strlength <= 612){ $messLen = 4; }

                $gsm ="";
                $message = send_sms($gsm, $content);    

                if($message) {   
                    $insert = array(
                        'delivery_date'     => date('Y-m-d'),
                        'delivery_time'     => date('H:i:s'),
                        'mobile'            => $gsm,
                        'message'           => $content,
                        'total_characters'  => strlen($content),
                        'total_messages'    => $messLen,
                        'delivery_report'   => $message
                    );
                    $this->action->add('sms_record', $insert);
                }
                */
                
                //Send message End here
                redirect($this->session->userdata('privilege') . '/dashboard');
            } else {
                $messArr = array(
                    "title" => "",
                    "icon" => "",
                    "emit" => "Wrong Username or Password!",
                    "btn" => false
                );
                $this->session->set_flashdata('error', message('warning-login', $messArr));

                redirect('access/users/login', 'refresh');
            }
        }

        if($this->membership_m->loggedin() == TRUE){
           redirect($this->session->userdata('privilege') . '/dashboard');
        }

        //Converting array to object
        $meta = $this->action->read("site_meta");
        $meta_info=array();
        foreach ($meta as $meta_value) {
            $meta_info[$meta_value->meta_key] = $meta_value->meta_value;
        }
        $meta_data = (object) $meta_info;
        $this->data["meta"] = $meta_data;
        //Converting array to object
        $this->load->view('access/login1', $this->data);
    }

    public function logout(){
        setcookie('user',null, -1,'/');
        $this->membership_m->logout();
        redirect('access/users/login');
    }


}
