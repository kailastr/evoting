<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evoting";

// Create connection

// Check connection


try{
	$conn = new mysqli($servername, $username, $password, $dbname);

 
  
 

}
catch(Exception $e)
{
	die("Connection failed: " . $conn->connect_error);

}
?>