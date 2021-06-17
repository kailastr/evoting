<?php
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
$number = $_POST['txtNumber'];
$branch =  $_POST['txtbranch'];
$rollno =  $_POST['txtRollNo'];
$enroll =  $_POST['txtEnrollID'];





//database connection
include('dbConnect.php');

$sql = "INSERT into candidates(name,email,mobile,branch,rollno,enrollid) values('$name','$email',$number,'$branch',$rollno,$enroll)";
//echo $sql;
if (mysqli_query($conn, $sql)) {
  header('location: pending.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


//
?>
