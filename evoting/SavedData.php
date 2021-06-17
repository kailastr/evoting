<?php
session_start();
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
$number = $_POST['txtNumber'];
$candi = $_POST['txtCand'];
$rollno =  $_POST['txtRollNo'];
$reason =  $_POST['txtVoterID'];
$Branch =  $_POST['txtBranch'];





//database connection
include('dbConnect.php');

$sql = "INSERT into users(name,email,Branch,number,candidate,rollno,reason,status) values('$name','$email','$Branch', $number,'$candi',$rollno,'$reason','yes')";

if (mysqli_query($conn, $sql)) {

	if(isset($_SESSION['vid'])){
					unset($_SESSION['vid']);
session_destroy();

			}
  header('location:successfully.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>  