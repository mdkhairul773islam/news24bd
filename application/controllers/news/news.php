<?php

class News extends Admin_Controller{
	  function __construct() {
      parent::__construct();
      $this->load->library("upload");
    }

    public function index() {
        $this->data['meta_title'] = 'News';
        $this->data['active'] = 'data-target="news_menu"';
        $this->data['subMenu'] = 'data-target="add"';
        $this->data['confirmation'] = null;

        $this->data['topics'] = $this->action->read("topic");

        if($this->input->post("save")){
            $data = array(
                "title"     		=> $this->input->post("title"),
                "topic"     		=> $this->input->post("topic"),
                "sub_topic"     	=> $this->input->post("sub_topic"),
                "news"      		=> $this->input->post("news"),
                "date"      		=> $this->input->post("date"),
                "time"      		=> date('h:i:s a'),
                "updated_time"      => date('h:i:s a'),
                "updated_at"        => $this->input->post("date"),
                "is_latest" 		=> $this->input->post("is_latest"),
                "publish"   		=> $this->input->post("publish"),
            );

            if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                $config['upload_path'] = './public/upload/post';
                $config['allowed_types'] = 'png|jpeg|jpg|gif';
                $config['max_size'] = '40096';
                $config['max_width'] = '300000'; // max width of the image file
                $config['max_height'] = '300000';
                $config['file_name'] =str_shuffle(strtotime("now")."newPost".rand(100000,999999));
                $config['overwrite']=true;

                $this->upload->initialize($config);

                if ($this->upload->do_upload("attachFile")){
                    $upload_data = $this->upload->data();

                    $data["photo"]="public/upload/post/".$upload_data['file_name'];
                }
                else {
                    $msg_array=array(
                        "title" => "Error",
                        "emit"  => $this->upload->display_errors(),
                        "btn"   => true
                    );
                    $this->data['confirmation'] = message("warning", $msg_array);
                }
            }

            $msg_array = array(
                "title" => "success",
                "emit" => "News Successfully Saved",
                "btn" => true
            );
            $this->data["confirmation"] = message($this->action->add("post",$data),$msg_array);

            $last_id = 1;
            $last_data = $this->action->read_limit("post",array(),"desc","1");
            if(count($last_data)){
                $last_id = $last_data[0]->id;
            }

            $this->addTag($last_id);
        }

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/news/add', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    private function addTag($id){
        $tag = $this->input->post("tags");
        $tags = explode(",", $tag);

        foreach ($tags as $key => $tag) {
            $data = array(
                "tag_name" =>$tag,
                "post_id" => $id
            );

            $this->action->add("tags",$data);
        }
    }

    public function edit($id=null) {
        $this->data['meta_title'] = 'News';
        $this->data['active'] = 'data-target="news_menu"';
        $this->data['subMenu'] = 'data-target="edit"';
        $this->data['confirmation']=$this->data["info"]= null;

        $where = array( "id" => $id );
        
        
        echo "<pre>";
        print_r($_POST);
        
        die();

        if($this->input->post("update")){
            $data = array(
                "title"         => $this->input->post("title"),
                "topic"         => $this->input->post("topic"),
                "sub_topic"         => $this->input->post("sub_topic"),
                "news"          => $this->input->post("news"),
                "updated_at"    => date("Y-m-d"),
                "updated_time"  => date("h:i:s a"),
                "is_latest"     => $this->input->post("is_latest"),
                "publish"       => $this->input->post("publish")
            );

            if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                $config['upload_path'] = './public/upload/post';
                $config['allowed_types'] = 'png|jpeg|jpg|gif';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000'; // max width of the image file
                $config['max_height'] = '3000';
                $config['file_name'] =str_shuffle(strtotime("now")."newPost".rand(100000,999999));
                $config['overwrite']=true;

                $this->upload->initialize($config);

                if ($this->upload->do_upload("attachFile")){

                    if(is_file("./".$this->input->post("old_image"))){
                        unlink("./".$this->input->post("old_image"));
                    }

                    $upload_data = $this->upload->data();

                    $data["photo"]="public/upload/post/".$upload_data['file_name'];
                }
                else {
                    $msg_array=array(
                        "title" => "Error",
                        "emit"  => $this->upload->display_errors(),
                        "btn"   => true
                    );
                    $this->data['confirmation'] = message("warning", $msg_array);
                }
            }

            $msg_array = array(
                "title" => "success",
                "emit" => "Data Successfully Updated",
                "btn" => true
            );
            $this->data["confirmation"] = message($this->action->update("post",$data,$where),$msg_array);


            $this->updateTag($id);
        }


        $this->data['info'] = $this->action->read("post", $where);
        $this->data['topics'] = $this->action->read("topic");

        $tags = array();
        foreach ($this->action->read("tags",array("post_id" => $id)) as $key => $tag) {
            $tags[] = $tag->tag_name;
        }
        $this->data['tags'] = implode(",", $tags);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/news/edit', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    private function updateTag($id){
        $tag = $this->input->post("tags");
        $tags = explode(",", $tag);

        $where = array(
            "post_id" => $id
        );
        $this->action->deleteData("tags",$where);

        foreach ($tags as $key => $tag) {
            $data = array(
                "tag_name" =>$tag,
                "post_id" => $id,
            );

            $this->action->add("tags",$data);
        }
    }

    public function all() {
        $this->data['meta_title'] = 'News';
        $this->data['active'] = 'data-target="news_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        /*Delet Information*/

         if($this->input->get("delete_token")){
            $this->action->deletedata('post',array('id'=>$this->input->get("delete_token")));
            $this->action->deletedata('count_popular',array('post_id'=>$this->input->get("delete_token")));
            $this->action->deletedata('tags',array('post_id'=>$this->input->get("delete_token")));

            if (is_file("./".$this->input->get("img_url"))) {
                unlink("./".$this->input->get("img_url"));
            }
            redirect('news/news/all','refresh');
        }
        /*Delet Information end*/

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/news/all', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function single() {
        $this->data['meta_title'] = 'Single';
        $this->data['active'] = 'data-target="single"';
        $this->data['subMenu'] = 'data-target="all"';


        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/news/single', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}
