<?php
class All extends Frontend_Controller {

    function __construct() {
        parent::__construct();
        $this->data["social"] = json_decode(siteMeta("social_icon"));

        $this->data['latest'] = $this->retrieve->read_limit("post",array("publish" => 1),"desc",7);

        //count popular news start
        $popular = $this->retrieve->readOrderby("count_popular","read_number",array(),"desc");

         if($popular != NULL){
            foreach ($popular as $key => $value) {
                if($key < 7){
                    $this->data['populars'][$key] = $this->retrieve->read_limit("post",array("id" => $value->post_id,"publish" => 1),"desc",7);
                }
            }
         }
       //count popular news End

    }

    public function news() {
        $this->data['meta_title'] = "সকল খবর";
        $this->data['mainLatestNews'] = $this->retrieve->read_limit("post",array("topic" => $_GET['topic'], "publish" => 1),"desc",1);
        
       //echo count($this->data['mainLatestNews']);
        
        $this->data['topic'] = mb_convert_encoding($_GET['topic'], "UTF-8");

        $this->load->view('includes/header', $this->data);
        $this->load->view('all_news', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    
    public function poll_statistics() {
        $this->data['meta_title'] = "সকল খবর";
        
        $this->data['statistics'] = $this->retrieve->read_limit("poll_question",array("publish" => 1),"desc",10);
       // print_r($this->data['statistics']);
        $this->load->view('includes/header', $this->data);
        $this->load->view('poll_statistics', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

}
