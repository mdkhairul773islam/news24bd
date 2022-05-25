<?php

class Category extends Admin_Controller{
	  function __construct() {
      parent::__construct();
    }
    
    public function index() {
        $this->data['meta_title'] = 'Category';
        $this->data['active'] = 'data-target="category_menu"';
        $this->data['subMenu'] = 'data-target="category"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        if($this->input->post("save")){
            $data = array(
                "date"          => date("Y-m-d"),
                "topic"         => $this->input->post("topic"),
                "parent_topic"  => $this->input->post("parent_topic")
            );

            $msg_array = array(
                "title" => "success",
                "emit" => "Data Successfully Saved",
                "btn" => true
            );
            $this->data["confirmation"] = message($this->action->add("topic",$data),$msg_array);
        }

        $this->data['parents'] = $this->action->read("topic",array("parent_topic" => ""));

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/category/add', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function all() {
        $this->data['meta_title'] = 'Category';
        $this->data['active'] = 'data-target="category_menu"';
        $this->data['subMenu'] = 'data-target="category"';
        $this->data['confirmation']=$this->data["student_info"]= null;

        $this->data['topics'] = $this->action->read("topic");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/category/all', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function edit($id=null) {
        $this->data['meta_title'] = 'Category';
        $this->data['active'] = 'data-target="category_menu"';
        $this->data['subMenu'] = 'data-target="category"';
        $this->data['confirmation'] = null;

        $where = array("id" => $id);

        if($this->input->post("update")){
            $data = array(
                "date"          => date("Y-m-d"),
                "topic"         => $this->input->post("topic"),
                "parent_topic"  => $this->input->post("parent_topic")
            );

            $msg_array = array(
                "title" => "success",
                "emit" => "Data Successfully Updated",
                "btn" => true
            );
            $this->data["confirmation"] = message($this->action->update("topic",$data,$where),$msg_array);
        }

        $this->data['topics'] = $this->action->read("topic",$where);
        $this->data['parents'] = $this->action->read("topic",array("parent_topic" => ""));

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/category/edit', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function delete(){
        $where = array('id' => $this->input->get('id'));

        $msg = array(
            "title" => "delete",
            "emit"  => "This data successfully deleted",
            "btn"   => true
        );

        $this->data["confirmation"] = message($this->action->deleteData('topic', $where), $msg);
        $this->session->set_flashdata("confirmation", $this->data["confirmation"]);
        redirect('category/category/all', 'refresh');
    }

}