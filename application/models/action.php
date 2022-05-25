<?php

class Action extends Lab_Model {

    function __construct() {
        parent::__construct();
    }

	private function custom_query($input){
		$output = implode(' and ', array_map(
			function ($v, $k) {
				if(is_array($v)){
					return $k.'[]='.implode('&'.$k.'[]=', $v);
				}else{
					return $k.'='.$v;
				}
			},
			$input,
			array_keys($input)
		));
		if(count($input)>0){
 		return $output;
		}
		return 1;

	}
    // for custom helper
    public function maxId($table) {
        $sql = "SELECT id AS maxId FROM $table ORDER BY id DESC LIMIT 1";

        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return 0;
    }

    // for custom helper
    public function forIdGenerator($table) {
        $this->_table_name = $table;
        $this->_order_type = 'desc';
        $this->_limit = '1';

        return $this->retrieve();
    }

    // retrieve unic value from database
    public function read_distinct($table, $where = array(), $column) {
        $this->db->distinct();
        $this->db->select($column);
        $this->db->where($where);

        return $this->db->get($table)->result();
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
    public function read($table, $where = array(), $by="asc") {
        $this->db->select('*');
        $this->db->where($where);
        $this->db->order_by("id", $by);
        $result = $this->db->get($table);
        return $result->result();
    }

    /*
    public function read($table, $where = array(), $by="asc") {
        $this->_table_name = $table;
        $this->_order_type = $by;

        if(count($where) > 0){
            return $this->retrieve_by($where);
        } else {
            return $this->retrieve();
        }
    }*/
    
    // read like method
    public function readLike($table = NULL, $news = NULL, $field = array()){
        $result = [];
        foreach($field as $row){
			$this->db->like($row, $news,'both');
			$query = $this->db->get($table);
			if($query->result() != null){
				$result[] = $query->result();
			}else{
				return false;
			}
		}        
        return $result;
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

    public function searchTransaction($table) {
        $bank= $this->input->post('bank_name');
        $account= $this->input->post('account_no');
        $fromDate= $this->input->post('date_from');
        $toDate= $this->input->post('date_to');

        $sql = "SELECT * FROM $table WHERE bank='$bank' AND account_number='$account' AND transaction_date BETWEEN   '$fromDate' AND  '$toDate' ";

		$query = $this->db->query($sql);
		return $query->result();
    }

	public function searchCost($table){
        $fromDate= $this->input->post('date_from');
        $toDate= $this->input->post('date_to');

        $sql = "SELECT * FROM $table WHERE  datetime BETWEEN   '$fromDate' AND  '$toDate' order by datetime asc";

		$query = $this->db->query($sql);
		return $query->result();
    }

    // retrieve from database
    public function showbyClass($table, $where = array()){
        $this->_table_name = $table;
        return $this->retrieve_by($where);
    }

	// retrieve from database
    public function show($table){
        $this->_table_name = $table;
		$this->_limit = '10';
        $this->_order_type = 'desc';
        return $this->retrieve();
    }

	// retrieve from database
    public function showbyDesc($table){
        $this->_table_name = $table;
        $this->_order_type = 'desc';
        return $this->retrieve();
    }

    // delete information from table
    public function deleteData($table, $where) {
        $this->_table_name = $table;

        if($this->delete($where)){
            return 'danger';
        }
    }

	public function getAllItems($table) {
        return $this->db->distinct('account_number')->from($table)->get()->result();
    }// for distinct value


    public function retrieve_cond($table, $where = array(), $order = 'asc') {
        $this->db->where($where);
        $this->db->order_by("id", $order);
        $query = $this->db->get($table);

        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return FALSE;
        }
    }

	// retrieve from database
    public function readDistinct($table, $field_name){
        $sql = "select distinct $field_name from $table";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function read_leftJoin($leftTable,$leftField,$rightTable,$rightField,$orderby=null){
        if ($orderby==null) {
            $orderby=$leftTable.".id";
        }
        $sql= "select * from $leftTable LEFT JOIN $rightTable ON $leftTable.$leftField=$rightTable.$rightField order by $orderby asc";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function check_existance($table, $where) {
        return $this->existance($table, $where);
    }

    public function update_profile($info, $where) {
        $this->_table_name = 'users';
        return $this->save($info, $where);
    }

    public function sms_between($table,$fromDate,$toDate) {
        $sql = "SELECT * FROM $table WHERE delivery_date BETWEEN   '$fromDate' AND  '$toDate' ";
        $query = $this->db->query($sql);
        return $query->result();
    }

        // retrieve from database
    public function attendance_DISTINCT($session,$class,$shift,$section,$group){
        $sql = "SELECT DISTINCT attendance_roll,attendance_class,attendance_section,attendance_session,attendance_group,attendance_shift FROM attendance where `attendance_session`='$session' and `attendance_class`='$class' and `attendance_shift`='$shift' and `attendance_section`='$section' and `attendance_group`='$group' ";
        $query = $this->db->query($sql);
        return $query->result();
    }

//for join admission and registration table
    public function readAttendanceInfo($table1,$table2,$cond=array()){
        $roll=$cond['roll'];
        $sql="SELECT * FROM $table1 , $table2  WHERE $table1 .student_id = $table2 .id and roll=$roll";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function readOrderby($table,$order_by,$where=array(),$sort='asc'){
        $this->db->order_by($order_by,$sort);
        $this->db->where($where);
        $query = $this->db->get($table);

        return $query->result();
    }

//for return last payment
    public function read_last_payment($table,$s_id){
        $sql="SELECT payment_date FROM $table WHERE students_id = $s_id ORDER BY payment_date DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

//Maruf's Function
    public function readGroupBy($table, $groupBy, $where=array(), $orderBy="id", $sort="desc"){
        $this->db->select('*');
        $this->db->group_by($groupBy);
        $this->db->order_by($orderBy, $sort);
        $this->db->where($where);
        $result = $this->db->get($table);

        return $result->result();
    }

    public function read_sum($table, $column, $where=array()){
        $this->db->select_sum($column);
        $this->db->where($where);
        $result = $this->db->get($table);

        return $result->result();
    }

    public function group_sum($table,$groupBy,$column,$sum,$where){

	$where = custom_query($where);

        $sql="SELECT `$column`, SUM(`$sum`)FROM $table GROUP BY `$groupBy` $where";
        $query = $this->db->query($sql);
        return $query->result();
    }




}
