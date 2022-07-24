<?php


	$name = "user";
	$value = "moin";
	
	/*setcookie($name, $value, time()+10);
	
	if(isset($_COOKIE['user']))
	{
		echo "{$_COOKIE['user']}";
	}
	else{
		echo"cookie is not set";
	}*/
	
	session_start();
	
	$_SESSION["user"] = "Moin"


?>