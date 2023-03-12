<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];

if ($http_origin == "https://codepen.io" || $http_origin == "https://cdpn.io")
{  
}
    header("Access-Control-Allow-Origin: http://localhost:1841/");

	if ($_REQUEST['action']==3) {
		file_put_contents(__DIR__ . '/server.log', print_r($_SERVER, true) . PHP_EOL, FILE_APPEND);
	echo $http_origin;
	echo "<br>".$_SERVER['REMOTE_ADDR']."<br>".$_SERVER['REMOTE_HOST']."<br>".$_SERVER['REMOTE_PORT']."<br>".$_SERVER['REMOTE_USER']."<br>".$_SERVER['REDIRECT_REMOTE_USER']."<br>".$_SERVER['']."<br>".$_SERVER['']."<br>success";
	}
	
?>