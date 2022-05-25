<?php

class Gallery extends Admin_Controller{
	function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->library('upload');
        $this->data["gallery_amount"]=count($this->action->read("gallery",array("trash"=>"true")));
    }
    
    public function index($album = NULL) {
        $this->data['meta_title'] = 'Photo Gallery';
        $this->data['active'] = 'data-target="photo_gallery_menu"';
        $this->data['subMenu'] = 'data-target="gallery"';
        $this->data['confirmation']=$this->data["student_info"]= null;
        $this->data['album_id'] = $album;


         //-----------------------------------------------------------------------
        //------------------------Save Gallery start here------------------------
        //-----------------------------------------------------------------------
        if ($this->input->post('gallery_Save')) {
            site_update();//Updating site update time
/*              $config['upload_path'] = './public/gallery';
                $config['allowed_types'] = 'png|jpg|gif';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000'; /* max width of the image file 
                $config['max_height'] = '3000';
                $config['file_name'] ="gallery".rand(1111,9999); 
                $config['overwrite']=false;
                
                $this->upload->initialize($config);*/

            $files = $_FILES;
            $title=$this->input->post('galleryTitle');
            $count = count($_FILES['gallery_image']['name']);
            for($i=0; $i<$count; $i++){
                $_FILES['gallery_image']['name']= $files['gallery_image']['name'][$i];
                $_FILES['gallery_image']['type']= $files['gallery_image']['type'][$i];
                $_FILES['gallery_image']['tmp_name']= $files['gallery_image']['tmp_name'][$i];
                $_FILES['gallery_image']['error']= $files['gallery_image']['error'][$i];
                $_FILES['gallery_image']['size']= $files['gallery_image']['size'][$i]; 

                $file_name="gallery".rand(1111,9999).".".pathinfo($_FILES['gallery_image']['name'],PATHINFO_EXTENSION); 

                $this->upload->initialize($this->set_upload_options($file_name));
                if($this->upload->do_upload('gallery_image') == true){
                    $data=array(
                        'gallery_title'=>$title[$i],
                        'gallery_path'=>"public/gallery/".$file_name
                        );
                    if ($album!=null) {
                        $data['album']=$album;
                    }
                    $this->action->add("gallery",$data);
                }
            }
                
        }
        //-----------------------------------------------------------------------
        //-------------------------Save Gallery end here-------------------------
        //-----------------------------------------------------------------------

        //Moving To Trash start here-----------------------*---------------------
        if($this->input->get("delete_token")){//Deleting Message
            site_update();//Updating site update time
            $data=array(
                "trash"=>"true"
            );
            $where=array('id'=>$this->input->get("delete_token"));
            $this->action->update('gallery',$data,$where);
            redirect('gallery/gallery','refresh');
        }
        //Moving To Trash End here-----------------------*---------------------
        $where=array(
            'trash'=>'false',
            'album'=> null
        );
        if ($album!=null) {
            $where["album"]=$album;
        }
        $this->data["gallery_data"]=$this->action->readOrderby("gallery","position",$where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/gallery/gallery_nav', $this->data);
        $this->load->view('components/gallery/add_photo', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function add_video() {
        $this->data['meta_title'] = 'Video Gallery';
        $this->data['active'] = 'data-target="video_gallery_menu"';
        $this->data['subMenu'] = 'data-target="video_gallery"';
        $this->data['confirmation']=$this->data["student_info"]= null;


        $data = array(
            "date" =>$this->input->post("date"),
            "video_title" => $this->input->post("video_caption"),
            "embed_code" => $this->input->post("embed_code")
        );

        $msg = array(
            "title" => "success",
            "emit"  => "Video successfully saved!",
            "btn"   => true
        );

        $this->data["confirmation"] = message($this->action->add("video_gallery", $data), $msg);
        $this->session->set_flashdata("confirmation", $this->data["confirmation"]);
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/gallery/add_video', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    
    public function all_video() {
        $this->data['meta_title'] = 'Video Gallery';
        $this->data['active'] = 'data-target="video_gallery_menu"';
        $this->data['subMenu'] = 'data-target="video_gallery"';
        $this->data['confirmation']=$this->data["student_info"]= null;

       

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/gallery/all_video', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

     public function trash($emit = NULL) {
        $this->data['meta_title'] = 'gallery';
        $this->data['active'] = 'data-target="header_menu"';
        $this->data['subMenu'] = 'data-target="trash"';
        $this->data['confirmation'] = null;

        //All Delete and restore Start here----------------------------
            //All restore start

                $amount=array();

                if ($this->input->post("restore_all")) {
                    foreach ($this->input->post("id") as $id) {
                        $data=array("trash"=>"false");
                        $where=array('id'=>$id);

                        if($this->action->update('gallery',$data,$where)){
                            $amount[]=$id;
                        }
                    }

            $msg_array=array(
                "title"=>"Success",
                "emit"=>"<strong>".count($amount)." Item/Items</strong> Restore Successfully",
                "btn"=>true
            );

            $this->data['confirmation']=message('success',$msg_array);          
            $this->session->set_flashdata('confirmation',$this->data['confirmation']);
            redirect('gallery/gallery/trash','refresh');
                }
            //All restore end

            //All Delete start
                if ($this->input->post("delete_all")) {

                $amount=array();

                    foreach ($this->input->post("id") as $id) {
                        $where=array('id'=>$id);
                        //Deleting image
                        $all_info=$this->action->read('gallery',$where);

                        if (is_file($all_info[0]->gallery_path)) {
                            unlink($all_info[0]->gallery_path);
                        }
                        if($this->action->deletedata('gallery',$where)){
                            $amount[]=$id;
                        }
                    }

            $msg_array=array(
                "title"=>"Success",
                "emit"=>"<strong>".count($amount)." Item/Items</strong> Delete Successfully",
                "btn"=>true
            );

            $this->data['confirmation']=message('danger',$msg_array);          
            $this->session->set_flashdata('confirmation',$this->data['confirmation']);
            redirect('gallery/gallery/trash','refresh');
                }
            //All Delete end
        //All Delete and restore End here----------------------------

        //-----------------------------------------------------------------------
        //-----------------------Delete Gallery Start here-----------------------
        //-----------------------------------------------------------------------
        if($this->input->get("delete_token")){//Deleting Message
            $this->action->deletedata('gallery',array('id'=>$this->input->get("delete_token")));
            if (is_file("./".$this->input->get("img_url"))) {
                unlink("./".$this->input->get("img_url"));
            }
            redirect('gallery/gallery/trash','refresh');
        }
        //-----------------------------------------------------------------------
        //------------------------Delete Gallery End here------------------------
        //----------------------------------------------------------------------- 

        //$this->data["slider_data"]=$this->action->read("slider");
        $where=array(
            'trash'=>'true'
        );
        $this->data["gallery_data"]=$this->action->readOrderby("gallery","position",$where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/gallery/gallery_nav', $this->data);
        $this->load->view('components/gallery/trash', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

       private function set_upload_options($file_name){   
        $config = array();
        $config['upload_path'] = './public/gallery';
        $config['allowed_types'] = 'png|jpg|gif';
        $config['file_name'] =$file_name; 
        $config['overwrite']     = true;
        return $config;
    }

}