<?php

class Comments extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('action');
    }
    
    public function index($emit = NULL) {
        $this->data['meta_title'] = 'Visitors';
        $this->data['active'] = 'data-target="visitor"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;
        
        $this->data['messages']=$this->action->read('messages',array(),'desc');

        if ($this->input->post('view_query')) {
            $where=array('messages_date'=>$this->input->post('date'));
            $this->data['messages']=$this->action->read('messages',$where,'desc');
        }

        //---------------------Delete Data Start------------------------------
        if($this->input->get("id")){//Deleting Message
            $this->action->deletedata('messages',array('id'=>$this->input->get("id")));
            redirect('visitors/comments?d_success=1','refresh');
        }

        if ($this->input->get("d_success")==1){
            $msg_array=array(
                "title"=>"Deleted",
                "emit"=>"Message Successfully Deleted",
                "btn"=>true
            );
            $this->data['confirmation']=message("danger",$msg_array);
        }
        //---------------------Delete Data End--------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/contact/index', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function view_comments($emit = NULL) {
        $this->data['meta_title'] = 'Visitors';
        $this->data['active'] = 'data-target="visitor"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        $where=array('id'=>$this->input->get('id'));
        
        $this->data['messages']=$this->action->read('messages',$where);

        $data=array("messages_condition"=>"read");
        $this->action->update('messages',$data,$where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/contact/view_comments', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    function send_replay(){
            $mobile_no = explode(",", $this->input->post('mobiles'));
            $content = $this->input->post('message');  
            
           foreach($mobile_no as $key=>$num) {
                 $messLen = 0;
                 $strlength=strlen($content);

                if( $strlength <= 160){ $messLen = 1; } 
                else if( $strlength <= 306){ $messLen = 2; } 
                else if( $strlength <= 459){ $messLen = 3; } 
                else if( $strlength <= 612){ $messLen = 4; }
                else if( $strlength <= 765){ $messLen = 5; }
                else if( $strlength <= 918){ $messLen = 6; }
                else if( $strlength <= 1071){ $messLen = 7; }
                else if( $strlength <= 1080){ $messLen = 8; }
                else { $messLen = "Equal to an MMS."; }

                 $message = send_sms($num, $content);       
                 $insert = array(
                    'delivery_date'     => date('Y-m-d'),
                    'delivery_time'     => date('H:i:s'),
                    'mobile'            => $num,
                    'message'           => $content,
                    'total_characters'  => $strlength,
                    'total_messages'    => $messLen,
                    'delivery_report'   => $message
                 );
                 $this->action->add('sms_record', $insert);
              }  

              if($message){
               echo "Message Sent";
              } else {
                echo "Message Not sent";
              }     
    }



   private function holder() {
        $holder = array('super','admin', 'user');
        if(!(in_array($this->session->userdata('holder'), $holder)))
        {
            $this->membership_m->logout();
            redirect('access/users/login');
        }
    }

}