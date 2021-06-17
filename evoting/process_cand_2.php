<?php
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
$number = $_POST['txtNumber'];
$branch =  $_POST['txtbranch'];
$rollno =  $_POST['txtRollNo'];
$voterid =  $_POST['txtvID'];
$pword =  $_POST['txtPword'];






//database connection
include('dbConnect.php');

$sql = "INSERT into voterlogin(name,email,mobile,branch,rollno,voterid,password) values('$name','$email',$number,'$branch',$rollno,$voterid,'$pword')";

if (mysqli_query($conn, $sql)) {
  header('location:index.html');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
