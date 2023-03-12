<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];

if ($http_origin == "https://codepen.io")
{  
}
    header("Access-Control-Allow-Origin: https://cdpn.io");

	//echo $http_origin;
	if ($_REQUEST['action']==1) {
	echo "success";
	}
	
?>