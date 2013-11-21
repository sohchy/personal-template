<?php

$username = "";
$password = "";
$hostname = "localhost";
$db_name = "";

$mysqli = new mysqli($hostname, $username, $password, $db_name);

if($mysqli->connect_errno){
	echo "Failed to connect to MySQL : (".$mysqli->connect_errno.")".$mysqli->connect_error;
}
?>