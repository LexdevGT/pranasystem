<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'prana';


$conn = new mysqli($hostname, $username, $password, $db_name);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
?>