<?php

class Poll_question extends Admin_Controller{
	  function __construct() {
      parent::__construct();
      $this->load->library("upload");
    }

    public function index() {
        $this->data['meta_title'] = 'Poll Question';
        $this->data['active'] = 'data-target="poll_question"';
        $this->data['subMenu'] = 'data-target="add"';
        $this->data['confirmation'] = null;


        if($this->input->post("save")){
            $data = array(
                "date"     => $this->input->post("date"),
                "question" => $this->input->post("question"),
                "status"   => 0
            );

            $msg_array = array(
                "title" => "success",
                "emit" => "Poll Successfully Saved",
                "btn" => true
            );
			
			if($this->action->add("poll_question",$data)){
				$this->data["confirmation"] = message('success',$msg_array);
			}else{
				echo "problame";
			}
        }

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/poll_question/nav', $this->data);
        $this->load->view('components/poll_question/add', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    
    public function all() {
       $this->data['meta_title'] = 'All Poll Question';
        $this->data['active'] = 'data-target="poll_question"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

		$this->data['poll'] = $this->action->read('poll_question',array(), 'desc');
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/poll_question/nav', $this->data);
        $this->load->view('components/poll_question/all', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }    
    
    public function view($id= null) {
        $this->data['meta_title'] = 'All Poll Question';
        $this->data['active'] = 'data-target="poll_question"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

		$this->data['poll'] = $this->action->read('poll_question',array("id" => $id));
		
		 
		
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/poll_question/nav', $this->data);
        $this->load->view('components/poll_question/view', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }


    public function edit($id) {
        $this->data['meta_title'] = 'Poll Question Edit';
        $this->data['active'] = 'data-target="poll_question"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;


        if($this->input->post("update")){
            $data = array(
                "date"     => $this->input->post("date"),
                "question" => $this->input->post("question"),
                "status"   => 1
            );

            $msg_array = array(
                "title" => "success",
                "emit" => "Poll Successfully Updated",
                "btn" => true
            );
			
			if($this->action->update("poll_question",$data, array('id'=>$id))){
				$this->data["confirmation"] = message('success',$msg_array);
			}
        }
		$this->data['poll'] = $this->action->read('poll_question',array('id'=>$id));
        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/poll_question/nav', $this->data);
        $this->load->view('components/poll_question/edit', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }


    public function delete($id) {
	   $msg_array = array(
			"title" => "success",
			"emit" => "Poll Successfully Deleted",
			"btn" => true
		);
			
			if($this->action->deleteData("poll_question", array('id'=>$id))){
				$this->data["confirmation"] = message('success',$msg_array);
				redirect('poll_question/poll_question/all');
			}
    }
    

}
