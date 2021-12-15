<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "smart_health_consulting_service";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>