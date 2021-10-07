<?php
$name = $_POST['txtName'];
$email   = $_POST['txtEmail'];
$number = $_POST['txtNumber'];
$branch =  $_POST['txtbranch'];
$rollno =  $_POST['txtRollNo'];
$voterid =  $_POST['txtvID'];
$pword =  $_POST['txtPword'];

include('dbConnect.php');

if($rollno=='Yes')
{
  $sql = "INSERT into candidates(name,email,mobile,branch,approve_status) values('$name','$email',$number,'$branch','0')";
  mysqli_query($conn, $sql);
}



$sql = "INSERT into voterlogin(name,email,mobile,branch,IsCand,voterid,password) values('$name','$email',$number,'$branch','$rollno',$voterid,'$pword')";

if (mysqli_query($conn, $sql)) {
  header('location:index.html');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
