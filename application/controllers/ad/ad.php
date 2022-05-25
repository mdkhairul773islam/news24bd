<?php

class Ad extends Admin_Controller{
	  function __construct() {
      parent::__construct();
      $this->load->library("upload");
    }
    
    public function index() {
        $this->data['meta_title'] = 'Ad';
        $this->data['active'] = 'data-target="ad_menu"';
        $this->data['subMenu'] = 'data-target="new_local_ad"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/nav', $this->data);
        $this->load->view('components/ad/new_local_ad', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function save_ad(){
        if($this->input->post("save")){
            $data = array(
                "datetime"  => date("Y-m-d"),
                "from_date" => $this->input->post("from_date"),
                "to_date"   => $this->input->post("to_date"),
                "url"       => $this->input->post("url"),
                "ad_id"     => $this->input->post("ad_id")
            );

            if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                $config['upload_path'] = './public/upload/ads';
                $config['allowed_types'] = 'png|jpeg|jpg|gif';
                $config['max_size'] = '4096';
                $config['max_width'] = '3000'; /* max width of the image file */
                $config['max_height'] = '3000';
                $config['file_name'] =str_shuffle(strtotime("now")."ads".rand(100000,999999)); 
                $config['overwrite']=true;   
                
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload("attachFile")){
                    $upload_data = $this->upload->data();
                    
                    $data["path"]="public/upload/ads/".$upload_data['file_name'];


                } else {
                    $msg_array=array(
                        "title" => "Error",
                        "emit"  => $this->upload->display_errors(),
                        "btn"   => true
                    );
                    $this->data['confirmation'] = message("warning", $msg_array);
                }

            }

            $msg_array=array(
                "title" => "Success",
                "emit"  => "Ad Successfully Saved",
                "btn"   => true
            );

            $this->data['confirmation'] = message($this->action->add("ad",$data),$msg_array);
            $this->session->set_flashdata("confirmation",$this->data['confirmation']);
            redirect("ad/ad","refresh");
        }
    }

    public function local_ad_edit() {
        $this->data['meta_title'] = 'Ad';
        $this->data['active'] = 'data-target="ad_menu"';
        $this->data['subMenu'] = 'data-target="local_ad_edit"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/local_ad_edit', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function all_local_ad() {
        $this->data['meta_title'] = 'Ad';
        $this->data['active'] = 'data-target="ad_menu"';
        $this->data['subMenu'] = 'data-target="all_local_ad"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/all_local_ad', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function adsance() {
        $this->data['meta_title'] = 'Adsance';
        $this->data['active'] = 'data-target="adsance_menu"';
        $this->data['subMenu'] = 'data-target="adsance"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/adsance', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function adsance_edit() {
        $this->data['meta_title'] = 'Adsance';
        $this->data['active'] = 'data-target="adsance_menu"';
        $this->data['subMenu'] = 'data-target="adsance_edit"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/adsance_edit', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function all_adsance() {
        $this->data['meta_title'] = 'Adsance';
        $this->data['active'] = 'data-target="adsance_menu"';
        $this->data['subMenu'] = 'data-target="all_adsance"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/all_adsance', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    public function all_ad_new() {
        $this->data['meta_title'] = 'Adsance';
        $this->data['active'] = 'data-target="ad_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation']=null;

        $this->data["ad"]= $this->action->read("ad");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/nav', $this->data);
        $this->load->view('components/ad/all_ad_new', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    public function edit_ad_new($id=null) {
        $this->data['meta_title'] = 'Adsance';
        $this->data['active'] = 'data-target="ad_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation']=null;

        $where = array("id" => $id);

            if($this->input->post("update")){

                $data = array(
                    "from_date" => $this->input->post("from_date"),
                    "to_date" => $this->input->post("to_date"),
                    "url" => $this->input->post("url")
                );

                //Uploading dme_attachment
                if ($_FILES["attachment"]["name"]!=null && $_FILES["attachment"]["name"]!="" ) {

                    $config['upload_path'] = './public/upload/ads';
                    $config['allowed_types'] = 'png|jpeg|jpg|gif';
                    $config['max_size'] = '4096';
                    $config['max_width'] = '4000'; /* max width of the image file */
                    $config['max_height'] = '4000';
                    $config['file_name'] =str_shuffle("attachment".rand(100000,999999));
                    $config['overwrite']=true;

                    $this->upload->initialize($config);
                    if ($this->upload->do_upload("attachment")){

                        if(is_file("./".$this->input->post("old_photo"))){
                            unlink("./".$this->input->post("old_photo"));
                        }

                        $upload_data = $this->upload->data();
                        $data["path"]="public/upload/ads/".$upload_data['file_name'];
                    }
                }
                $msg_array=array(
                    "title" => "Success",
                    "emit"  => "Ad Successfully Updated",
                    "btn"   => true
                );

                $this->data['confirmation'] = message($this->action->update("ad",$data,$where),$msg_array);

            }

        $this->data["ad"]= $this->action->read("ad", $where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/ad/nav', $this->data);
        $this->load->view('components/ad/edit_ad_new', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function delete($id=NULL){

        $info=$this->action->read('ad',array('id'=>$id));
        if($info != NULL){
            unlink($info[0]->path);
        }
        $options= array(
            'title' => 'delete',
            'emit'  => 'Successfully Deleted!',
            'btn'   => true
        );

       $this->data['confirmation']=message($this->action->deletedata('ad', array('id' => $id)), $options);
       $this->session->set_flashdata("confirmation",$this->data['confirmation']);
       redirect("ad/ad/all_ad_new","refresh");
    }

}