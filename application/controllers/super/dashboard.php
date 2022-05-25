<?php
class Dashboard extends Admin_controller{

    function __construct() {
        parent::__construct();
        $this->holder();
        $this->load->model('action');
        
         //Collectiong Browser Statistics Data Start here
        $browser_data=array();
        $browser_s=$this->action->readGroupBy('visitors', 'browser');
        foreach ($browser_s as $key => $info){
            $browser_name=$info->browser;
            $quantity=count($this->action->readGroupBy("visitors",'ip',array("browser"=>$browser_name)));
            $browser_data[$browser_name]=$quantity;
        }
        $this->data['br_data']=$browser_data;
        //Collectiong Browser Statistics Data End here

        //Collectiong Device Statistics Data Start here
        $device_data=array();
        $device_s=$this->action->readGroupBy('visitors', 'device');
        foreach ($device_s as $key => $info){
            $device_name=$info->device;
            $quantity=count($this->action->readGroupBy("visitors",'ip',array("device"=>$device_name)));
            $device_data[$device_name]=$quantity;
        }
        $this->data['device_data']=$device_data;
        //Collectiong Device Statistics Data End here
        
    }
    
    public function index() {
        $this->data['meta_title'] = 'dashboard';
        $this->data['active'] = 'data-target="dashboard"';
        $this->data['subMenu'] = 'data-target=""';

        /* //Collectiong Browser Statistics Data Start here
        $browser_data=array();
        $browser_s=$this->action->readGroupBy('visitors', 'browser');
        foreach ($browser_s as $key => $info){
            $browser_name=$info->browser;
            $quantity=count($this->action->readGroupBy("visitors",'ip',array("browser"=>$browser_name)));
            $browser_data[$browser_name]=$quantity;
        }
        $this->data['br_data']=$browser_data;
        //Collectiong Browser Statistics Data End here

        //Collectiong Device Statistics Data Start here
        $device_data=array();
        $device_s=$this->action->readGroupBy('visitors', 'device');
        foreach ($device_s as $key => $info){
            $device_name=$info->device;
            $quantity=count($this->action->readGroupBy("visitors",'ip',array("device"=>$device_name)));
            $device_data[$device_name]=$quantity;
        }
        $this->data['device_data']=$device_data;
        //Collectiong Device Statistics Data End here
        */



        //Visitor Counter Start here

        $d = new DateTime("-30 days");
        $date_form = $d->format('Y-m-d');
        
        $todays_where = array(
            "date" => date("Y-m-d")
        );


        $last_month_where=array(
            "date >=" => $date_form,
            "date <=" => date("Y-m-d")
            );
        
        $this->data['todays_visitor']      = count($this->action->read('visitors',$todays_where));
        $this->data['last_month_visitor']  = count($this->action->readGroupBy('visitors','ip',$last_month_where));
        $this->data['total_visitor']       = count($this->action->readGroupBy('visitors','ip'));
        $this->data['current_visitor']     = count($this->action->read('current_visitor'));
        //Visitor Counter End here
        

        $this->load->view('super/includes/header', $this->data);
        $this->load->view('super/includes/aside', $this->data);
        $this->load->view('super/includes/headermenu', $this->data);
        $this->load->view('super/dashboard', $this->data);
        $this->load->view('super/includes/footer');
    }

    private function holder(){
        if($this->uri->segment(1) != $this->session->userdata('holder')){
            $this->membership_m->logout();
            redirect('access/users/login');
        }
    }

}
