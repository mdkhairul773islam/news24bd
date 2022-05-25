<?php

class Video extends Admin_Controller {

     function __construct() {
        parent::__construct();

        $this->load->model('action');
    }
    
    public function index() {
        $this->data['meta_title'] = 'video';
        $this->data['active'] = 'data-target="video-menu"';
        $this->data['subMenu'] = 'data-target="add"';
        $this->data['confirmation'] = null;
	    
	    
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/video/nav', $this->data);
        $this->load->view('components/video/video', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    public function add(){
        $embaded_code='<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'.$this->input->post("embed_code").'" frameborder="0" allowfullscreen></iframe>';
        $data = array(
            "date" =>$this->input->post("date"),
            "video_title" => $this->input->post("video_caption"),
            "embed_code" => $embaded_code
        );

        $msg = array(
            "title" => "success",
            "emit"  => "Video successfully saved!",
            "btn"   => true
        );

        $this->data["confirmation"] = message($this->action->add("video_gallery", $data), $msg);
        $this->session->set_flashdata("confirmation", $this->data["confirmation"]);
        redirect("video/video", "refresh");
    }

     public function all() {
        $this->data['meta_title'] = 'All Video';
        $this->data['active'] = 'data-target="video-menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;
        
         if($this->input->get("delete_token")){//Deleting Message
            $this->action->deletedata('video_gallery',array('id'=>$this->input->get("delete_token")));
            redirect('video/video/all','refresh');
        }
        $this->data["v_gallery_data"]=$this->action->read("video_gallery");
        
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/video/nav', $this->data);
        $this->load->view('components/video/all', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
   
}
