<?php
class Home extends Frontend_Controller {

    function __construct() {
        parent::__construct();
        $this->data["social"] = json_decode(siteMeta("social_icon"));
        
        //counter-------------------
        $todays_where = array(
            "date" => date("Y-m-d")
        );

        $this->data['todays_visitor']=$this->retrieve->read('visitors',$todays_where);
        $this->data['total_visitor']=$this->retrieve->readDistinct('visitors','ip');
        $this->data['current_visitor']=count($this->action->read('current_visitor'));
        //counter-----------------------
		
    }

    public function index() {
        $this->load->helper('ip_helper');
        $this->data['meta_title'] = 'প্রথম পাতা';
        $this->data['latestNews']       = NULL;
        $this->data['latest']           = NULL;
        $this->data['mainLatestNews']   = NULL;
        $this->data['populars']         = NULL;
        $this->data['photoNewsGallery'] = NULL;
	
	    $this->data['poll_question'] = $this->action->read("poll_question", array("status" => 1),'desc');

        $this->data['latestNews'] = $this->retrieve->read("post",array("date" => date("Y-m-d"),"is_latest" => 1 , "publish" => 1),"desc");
        $this->data['latestFocusNews'] = $this->retrieve->read("post",array("is_latest" => 1 , "publish" => 1),"desc");
        $this->data['latest'] = $this->retrieve->read_limit("post",array("publish" => 1),"desc",7);
        $this->data['mainLatestNews'] = $this->retrieve->read_limit("post",array("publish" => 1),"desc",12);
        
        
        //counter-----------------------------
        $ip     =get_client_ip();
        $os     =getOS();
        $browser=getBrowser();
        $device =getDevice();

        $date=date("Y-m-d");

        $data=array(
            "date"              => $date,
            "ip"                => $ip,
            "operating_system"  => $os,
            "browser"           => $browser,
            "device"            => $device
            );

        if ($this->action->exists('visitors', array('ip'=>$ip,'date'=>$date))==false) {
            $this->action->add('visitors',$data);
        }
        //counter-----------------------------

        //count popular news start
        $popular = $this->retrieve->readOrderby("count_popular","read_number",array(),"desc");

         if($popular != NULL){
            foreach ($popular as $key => $value) {
                if($key < 7){
                    $this->data['populars'][$key] = $this->retrieve->read_limit("post",array("id" => $value->post_id,"publish" => 1),"desc",7);
                }
            }
         }
        //count popular news end

        //Fontpage photo Gallery News Bottom Side Start
          $this->data['photoNewsGallery']  = $this->retrieve->read("gallery",array("album" => null,"trash" =>'false'));
          $this->data['entertainment'] = $this->retrieve->read_limit("post",array("topic" => "বিনোদন" , "publish" => 1),"desc",6);
        //Fontpage photo Gallery News Bottom Side End

        //double-big-news news start
          $this->data['bangladesh'] = $this->retrieve->read_limit("post",array("topic" => "বাংলাদেশ" , "publish" => 1),"desc",6);
        //double-big-news news end

        //full width news start
          $this->data['national'] = $this->retrieve->read_limit("post",array("topic" => "জাতীয়" , "publish" => 1),"desc",8);
          $this->data['politics'] = $this->retrieve->read_limit("post",array("topic" => "রাজনীতি" , "publish" => 1),"desc",8);
        //full width news end


        //single line news start
          $this->data['economy'] = $this->retrieve->read_limit("post",array("topic" => "অর্থনীতি" , "publish" => 1),"desc",6);
          $this->data['international'] = $this->retrieve->read_limit("post",array("topic" => "আন্তর্জাতিক" , "publish" => 1),"desc",6);
          $this->data['sports'] = $this->retrieve->read_limit("post",array("topic" => "খেলাধুলা" , "publish" => 1),"desc",6);
        //single line news end



        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('includes/modal', $this->data);
       	$this->load->view('news/heading', $this->data);
        $this->load->view('news/top-double-ad-3', $this->data);
        $this->load->view('news/full-width-news', $this->data);
        $this->load->view('news/middle-triple-ad', $this->data);
        $this->load->view('news/double-big-news', $this->data);
        $this->load->view('news/top-double-ad', $this->data);
        $this->load->view('news/single-line-news', $this->data);
        $this->load->view('news/top-double-ad-2', $this->data);
        $this->load->view('news/gallery-side-news', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    public function c_counter(){
        $this->load->helper('ip_helper');
        $ip=get_client_ip();

        $data=array(
            'ip'    =>$ip,
            'time'  =>strtotime('now +1min')
        );
        if ($this->action->exists('current_visitor', array('ip'=>$ip))==false) {
            $this->action->add("current_visitor",$data);
        }else{
            $data=array(
                'time'  =>strtotime('now +1min')
            );
            $where=array(
                'ip'=>$ip
            );
            $this->action->update("current_visitor",$data,$where);
        }

        $where=array(
            'time <' =>strtotime('now')
        );
        $this->action->deletedata("current_visitor",$where);
        echo "success";
    }

    public function news_search() {
        $this->data['meta_title'] = 'খবর খুঁজুন';
		
        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/search', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    public function more() {
        $this->data['meta_title'] = "বিস্তারিত";

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/more', $this->data);
        $this->load->view('includes/footer', $this->data);
    }
    public function video_gallery() {
        $this->data['meta_title'] = 'ভিডিও গ্যালারি';
        $this->data['confirmation']= null;

        $this->data["video_gallery"]=$this->action->read("video_gallery");

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/video_gallery', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function photo_gallery() {
        $this->data['meta_title'] = 'ফটো গ্যালারি';
        $this->data['confirmation']= null;

        $this->data["gallery"] = $this->action->read("gallery",array("trash" => "false",'album'=> null));

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/photo_gallery', $this->data);
        $this->load->view('includes/footer', $this->data);
    }


	public function single() {
        $this->data['meta_title'] = $this->data['allNews'] = NULL;

        $id = $this->input->get('id');
        $joinCond = "post.id = tags.post_id";
        $where = array("post.id" => $id);
        
        $this->data['news'] = $this->retrieve->joinAndRead("tags","post",$joinCond,$where);
        $this->data['meta_title'] = ($this->data['news']) ? filter($this->data['news'][0]->title) : "";
        
        if($this->data['news'] != NULL){
            $this->data['allNews'] = $this->retrieve->read_limit("post",array("topic" => $this->data['news'][0]->topic, "publish" => 1),"desc",10);
            $count = 0;
            $condition = array("date" => date("Y-m-d"), "post_id" => $id);
            $countInfo = $this->retrieve->read("count_popular",$condition);

            if($countInfo != NULL){
                $count = $countInfo[0]->read_number + 1;
                $data = array(
                    "date"  => date("Y-m-d"),
                    "post_id" => $id,
                    "read_number" => $count
                );
                $this->retrieve->update("count_popular",$data,$condition);
            }else{
                $data = array(
                    "date"  => date("Y-m-d"),
                    "post_id" => $id,
                    "read_number" => 1
                );
                $this->retrieve->add("count_popular",$data);
            }

        }

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/single', $this->data);
        $this->load->view('includes/footer', $this->data);
    }


    public function singlepage() {
        $this->data['meta_title'] = 'more';

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/single-page', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function searchData() {
        $this->data['meta_title'] = 'more';

        $this->data['latest'] = $this->retrieve->read_limit("post",array("publish" => 1),"desc",7);
        
       // count popular news Start
        $popular = $this->retrieve->readOrderby("count_popular","read_number",array("date" => date("Y-m-d")),"desc");

        if($popular != NULL){
            foreach ($popular as $key => $value) {
                $this->data['populars'][$key] = $this->retrieve->read_limit("post",array("id" => $value->post_id,"publish" => 1),"desc",7);
            }
        }
       //count popular news End
	   
	   
		$field = array("title","topic","news","sub_topic");
        $this->data['result'] = $this->action->readlike('post', $this->input->post('search_word'),$field);
		
		
        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('searchData', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

    public function archive() {
        $this->data['meta_title'] = 'archive';

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/archive', $this->data);
        $this->load->view('includes/footer', $this->data);
    }

     public function news_more() {
        $this->data['meta_title'] = 'more';

        $this->data['latestNews'] = $this->retrieve->read("post",array("date" => date("Y-m-d"),"is_latest" => 1 , "publish" => 1),"desc");
        $this->data['latest'] = $this->retrieve->read_limit("post",array("publish" => 1),"desc",7);
        $this->data['mainLatestNews'] = $this->retrieve->read_limit("post",array("publish" => 1),"desc",12);
         //count popular news start
        $popular = $this->retrieve->readOrderby("count_popular","read_number",array("date" => date("Y-m-d")),"desc");

        if($popular != NULL){
            foreach ($popular as $key => $value) {
                $this->data['populars'][$key] = $this->retrieve->read_limit("post",array("id" => $value->post_id,"publish" => 1),"desc",7);
            }
        }
       //count popular news end

        $this->load->view('includes/header', $this->data);
        $this->load->view('includes/marquee', $this->data);
        $this->load->view('news/news_more', $this->data);
        $this->load->view('includes/footer', $this->data);
    }




 public function read(){
        $content = file_get_contents('php://input');
        $receive = json_decode($content, true);
        $table = $receive['table'];

        $condition = array();
        if(is_array($receive) && array_key_exists('cond', $receive)){
            foreach($receive['cond'] as $key => $val){
                if($val != null){
                    $condition[$key] = $val;
                }
            }
        }

        $result = $this->retrieve->readOrderby($table, "id", $condition , "desc");
        echo json_encode($result);
    }
    

 

}
