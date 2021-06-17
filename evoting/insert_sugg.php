<?php
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
$number = $_POST['txtNumber'];
$rollno =  $_POST['txtRollNo'];
$Suggestion =  $_POST['txtSuggestion'];





//database connection
include('dbConnect.php');

$sql = "INSERT into suggestion(name,email,number,rollno,suggestion) values('$name','$email','$number','$rollno','$Suggestion')";

$stmt = $conn->query($sql);



header('location: successfully.php');

?> 