<?php

$host = "localhost";
$user = "root";
$password = "tokky12";
$db = "match";


$con = mysqli_connect($host, $user,$password,$db);

if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  
?>