<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// genetate tender code
function generator($table, $prefix = '') {
    $code = '';
    // get codeigniter instanse
    $CI = & get_instance();
    // load model
    $CI->load->model('action');
    // use model method
    $val = $CI->action->forIdGenerator($table);

    if(!empty($val)){
        $id = intval($val[0]->id) + 1;
    } else {
        $id = 1;
    }

    if($prefix != ''){
        $code = $prefix.$id;
    } else {
        $code = $id;
    }

    return $code;
}

// genetate tender code
function generateUniqueId($table) {
    $code = '';
    $counter = 1;

    // get codeigniter instanse
    $CI = & get_instance();

    // load model
    $CI->load->model('action');

    // use model method
    $val = $CI->action->maxId($table);


    if(is_array($val)){
        $counter = intval($val[0]->maxId) + 1;
    } else {
        $counter = 1;
    }

    if(strlen($counter) == 2) {
        $counter = '00' . $counter;
    } elseif(strlen($counter) == 3) {
        $counter = '0' . $counter;
    } else {
        $counter = '000' . $counter;
    }
    return $counter;
}

// genetate tender code
function memberId($table, $b, $t) {
    $branch = $b;
    $year = date('y');
    $team = $t;
    $id = generateUniqueId($table);

    $memberId = $branch . $year . $team . $id;
    return $memberId;
}

function age($date){
    list($year, $month, $day) = explode("-", $date);

    $doy = date('Y') - $year;
    $dom = date('m') - $month;
    $dod = date('d') - $day;

    if($dod < 0 || $dom < 0) $doy--;

    return $doy;
}

/*
// set default CRUD message
function message($type, $emit = '<p>Undefine warning ! Error not detected.</p>') {
    $message = '';

    switch ($type) {
        case 'success':
            $message = '<div class="alert alert-info" style="margin-top:15px;">'
            . '<h3><i class="fa fa-check-circle"></i> Success message</h3>'
            . '<p>Data saved successfully completed ! Message confirm.</p>'
            . '</div>';

            break;
        case 'update':
            $message = '<div class="alert alert-success" style="margin-top:15px;">'
            . '<h3><i class="fa fa-pencil-square-o"></i> Update message</h3>'
            . '<p>Data update successfully completed ! Message confirm.</p>'
            . '</div>';

            break;
        case 'delete':
            $message = '<div class="alert alert-danger" style="margin-top:15px;">'
            . '<h3><i class="fa fa-times-circle"></i> Delete message</h3>'
            . '<p>Data remove successfully completed ! Message confirm.</p>'
            . '</div>';

            break;
        case 'warning':
            $message = '<div class="alert alert-warning" style="margin-top:15px;">'
            . '<h3><i class="fa fa-exclamation-triangle"></i> Warning message</h3>'
            . $emit
            . '</div>';

            break;

			 case 'warning_login':
             $message = $emit;

            break;
        case 'operation':
            $message = '<div class="alert alert-primary" style="margin-top:15px;">'
            . '<h3><i class="fa fa-certificate"></i> Operation confirmation</h3>'
            . $emit
            . '</div>';

            break;
        default:
            $message = '<div class="alert alert-primary" style="margin-top:15px;">'
            . '<h3><i class="fa fa-bolt"></i> Default message</h3>'
            . '<p>Unknown message confirmation!</p>'
            . '</div>';

            break;
    }

    return $message;
}
*/
/*Maruf hasan's Helper*/
    function custom_fetch($var,$field){
        if ($var!=null) {
            return $var[0]->$field;
        }
    }

    function image($link){
        if ($link==null) {
            return site_url("private/images/placeholder.png");
        }else{
            return site_url($link);
        }
    }

    function filter($value){
        $capitalize="";
        $rmv_scor=str_replace("_"," ", $value);
        if (mb_detect_encoding($rmv_scor)!='UTF-8') {
            $capitalize=ucwords($rmv_scor);
        }else{
            $capitalize=$rmv_scor;
        }

        return $capitalize;
    }



function view_more($string,$amount,$link=null,$text="View More"){
        $strings=explode(" ", $string);

        if (count($strings)<=$amount) {
            return(implode(" ",$strings));
        }
        else{
            $out_string=array();
            for ($i=0; $i<$amount; $i++) {
                $out_string[]=$strings[$i];
            }
            $final=implode(" ",$out_string).'<div class="view_more"> <a href="'.$link.'">'.$text.'</a> </div>';
               return($final);
        }
}

function message_length($strlength){
	$messLen = 0;
	if( $strlength <= 160){ $messLen = 1; }
	else if( $strlength <= 306){ $messLen = 2; }
	else if( $strlength <= 459){ $messLen = 3; }
	else if( $strlength <= 612){ $messLen = 4; }
	else if( $strlength <= 765){ $messLen = 5; }
	else if( $strlength <= 918){ $messLen = 6; }
	else if( $strlength <= 1071){ $messLen = 7; }
	else if( $strlength <= 1080){ $messLen = 8; }
	else { $messLen = "Equal to an MMS."; }
	return $messLen;
}
//Function for Dynamic Language Start
function caption($index){
    $CI = & get_instance();
    // load model
    $CI->load->model('action');
    // use model method
    $val = $CI->action->read('site_meta',array('meta_key'=>'language'));

    $label_lang = config_item('label_lang');

    return $label_lang[$index][$val[0]->meta_value];
}
//Function for Dynamic Language End

//Function updating site information
function site_update(){
    $CI = & get_instance();
    // load model
    $CI->load->model('action');
    // use model method
    $data = array(
        'meta_value' => date('Y-m-d H:i:s a')
    );
    $where = array(
        'meta_key' => 'update_date'
    );
    $CI->action->update('site_meta',$data,$where);
}
//Function updating site information

//Array Differance
function arrayDiff($a,$b){
	$c = array_diff($a, $b);
	$d = array_diff($b, $a);
	$e = array_merge($c,$d);
	$f = array_unique($e);
	return $f;
}
//Array Differance

    function selected($v1,$v2){
        if($v1==$v2){
            echo "selected";
        }
    }

    function checked($v1,$v2){
        if($v1==$v2){
            echo "checked";
        }
    }

    function valid_equal($v1,$v2){
        if($v1==$v2){
            return true;
        }
        return false;
    }

    function siteMeta($key){
        // create instance
        $CI = & get_instance();

        // load model
        $CI->load->model('action');

        // get the data
        $where = array(
            "meta_key" => $key
        );

        $records = $CI->action->read("site_meta", $where);

        return $records[0]->meta_value;
    }

//Ad's Function
// Function for checking this ad's place free or not
function locate_valid($locID){
    // get codeigniter instanse
    $CI = & get_instance();

    // load model
    $CI->load->model('action');

    // use model method
    $where = array(
        'from_date <=' => date('Y-m-d'),
        'to_date >=' => date('Y-m-d'),
        'ad_id' => $locID,
    );
    $val = $CI->action->read("ad", $where);

    if(count($val)){
        return true;
    }else{
        return false;
    }
}

function show_ads($locID,$size){
    // get codeigniter instanse
    $CI = & get_instance();

    // load model
    $CI->load->model('action');

    // use model method
    $where = array(
    'from_date <=' => date('Y-m-d'),
    'to_date >=' => date('Y-m-d'),
    'ad_id' => $locID,
    );
    $val = $CI->action->read("ad", $where);
    $dim = explode("x",$size);
    if(count($val)){
    $url = site_url($val[0]->path);
        $element = '<a href="'.$val[0]->url.'" target="_blank" ><img width="'.$dim[0].'" height="'.$dim[1].'" src="'.$url.'" alt="Image Not Found!" ></a>';
    }else{
        $element = '<a><img src="http://via.placeholder.com/'.$size.'/ddd/000000" alt="Image Not Found!" ></a>';
    }

    return $element;
}
// function view_more($string,$amount,$link=null,$text="View More"){
//         $strings=explode(" ", $string);

//         if (count($strings)<=$amount) {
//             return(implode(" ",$strings));
//         }
//         else{
//             $out_string=array();
//             for ($i=0; $i<$amount; $i++) {
//                 $out_string[]=$strings[$i];
//             }
//             $final=implode(" ",$out_string).' <a class="view_more" href="'.$link.'">'.$text.'</a>';
//                return($final);
//         }
// }



function makeShort($str =  null, $stringLength = null, $wordNo = null, $id = null){
    $string = explode(" ", $str);

    if (count($string) > $stringLength) {
        $fifty_word = array();
        for($i=0; $i<= $wordNo; $i++){
           $fifty_word[] = $string[$i];
        }
        $news = implode(" ",$fifty_word);
    }else{
        $news = $str;
    }
   return $news."&nbsp;<strong>.......<a href=".base_url("home/single?id=".$id)." target='_blank'>বিস্তারিত পড়ুন</a></strong>";
}

function getTags($id = null){
    // get codeigniter instanse
    $CI = & get_instance();

    // load model
    $CI->load->model('retrieve');

    $tags = array();
    $where = array("post_id" => $id);
    $val = $CI->retrieve->read("tags", $where);
    if($val != NULL){
       foreach ($val as $key => $value) {
          $tags[] = $value->tag_name;
       }
    }   

    $string = join("," , $tags);
    return $string;

}
