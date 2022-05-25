<?php

class Retrieve extends Lab_Model {

    function __construct() {
        parent::__construct();
    }

    public function readGroupBy($table, $groupBy, $where=array(), $orderBy="id", $sort="desc"){
        $this->db->select('*');
        $this->db->group_by($groupBy);
        $this->db->order_by($orderBy, $sort);
        $this->db->where($where);
        $result = $this->db->get($table);

        return $result->result();
    }

    public function read_limit($table, $where = array(), $by="asc",$limit){
        $this->_table_name = $table;
        $this->_order_type = $by;
        if (isset($limit)) {
            $this->_limit = $limit;
        }

        if(count($where) > 0){
            return $this->retrieve_by($where);
        } else {
            return $this->retrieve();
        }
    }



    // for custom helper
    public function forIdGenerator($table) {
        $this->_table_name = $table;
        $this->_order_type = 'desc';
        $this->_limit = '1';

        return $this->retrieve();
    }

    // check existance
    public function exists($table, $where) {
        return $this->existance($table, $where);
    }

    // save into database
    public function add($table, $data) {
        $this->_table_name = $table;
        return $this->save($data);
    }

    // update into database
    public function update($table, $data, $where) {
        $this->_table_name = $table;
        return $this->save($data, $where);
    }

    // retrieve from database
    public function read($table, $where = array(),$by="asc") {
        $this->_table_name = $table;
        $this->_order_type = $by;

        if(count($where) > 0){
            return $this->retrieve_by($where);
        } else {
            return $this->retrieve();
        }
    }


    // retrieve from database using two table
    public function joinAndRead($from, $join, $joinCond, $where=array()){
        $this->db->select('*');
        $this->db->from($from);
        $this->db->join($join, $joinCond);
        $this->db->where($where);

        $query = $this->db->get();

		return $query->result();
    }
    

    // retrieve from database using multiple table
    public function multipleJoinAndRead($from, $details=array(), $where=array()){
        $this->db->select('*');
        $this->db->from($from);

        // check type exists or not
        foreach ($details as $key => $val) {
            if(array_key_exists("type", $val)){
                $this->db->join($key, $val["condition"], $val["type"]);
            } else {
                $this->db->join($key, $val["condition"]);
            }
        }

        // appling condition
        $this->db->where($where);
        // get the result set
        $query = $this->db->get();


        // return the set
        return $query->result();
    }


	// retrieve from database
    public function readDistinct($table, $field_name)
	 {
      $sql="select distinct $field_name from $table";
	  $query = $this->db->query($sql);
	  return $query->result();
     }

	// read between two dates

	 public function readByDate($table)
      {

        $currentDate= date('Y-m-d');
        $pastDate = date('Y-m-d',strtotime($currentDate) - (24*60*60*7));

        $sql = "SELECT * FROM $table WHERE  date BETWEEN   '$pastDate' AND  '$currentDate' order by date desc";

		$query = $this->db->query($sql);
		return $query->result();
    }


    // delete information from table
    public function deleteData($table, $where) {
        $this->_table_name = $table;
        return $this->delete($where);
    }


    //get max value of specific column
    public function readMax($table,$column,$subject){
        $sql="SELECT MAX($column) AS highest_marks FROM $table where subject='$subject'";
        $res=$this->db->query($sql);
        if($res->num_rows()>0){
            return $res->result();
        }else{
            return FALSE;
        }
    }

    public function readOrderby($table,$order_by,$where=array(),$sort='asc'){
        $this->db->order_by($order_by,$sort);
        $this->db->where($where);
        $query = $this->db->get($table);

        return $query->result();
    }



}
