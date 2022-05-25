<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
// send sms the application
function send_sms($gsm, $txt) {
    
    //Getting SMS report Start here
    $CI = & get_instance();
    $CI->load->model("action");
    $total_sms = config_item("total_sms");
    $sent_sms_data = $CI->action->read_sum("sms_record","total_messages",array("delivery_report"=>"1"));
    $sent_sms = $sent_sms_data[0]->total_messages;
    //Getting SMS report End here

    $username = "LogicPoint";
    $password = "LogicPoint123";
    $mobile = trim($gsm);
    $url = "https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl";

    if ($sent_sms < $total_sms) {
        //Sending Request Start here
        try{    
            $soapClient = new SoapClient($url); 
            $paramArray = array(
                'userName'      => $username,
                'userPassword'  => $password,
                'mobileNumber'  => $mobile,
                'smsText'       => $txt,
                'type'          => "TEXT",
                'maskName'      => "8804445606087",
                'campaignName'  => ""
            );
            $value = $soapClient->__call("OneToOne", array($paramArray));

            if($value->OneToOneResult == 1900){
                return true;
            } 
            
            return false;
        } catch (Exception $e) {
            echo $e;
        }
        //Sending Request End here
    }else{
        return false;
    }
}
