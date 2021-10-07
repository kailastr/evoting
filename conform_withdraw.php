<?php
$email   = $_POST['txtEmail'];
$voterid =  $_POST['txtvID'];

include('dbConnect.php');

$sql = "update candidates set approve_status = 2 where email = $email";
$rs = mysqli_query($conn,$sql);


$sql = "update voterlogin set IsCand = 'No' where voterid = $voterid";
$rs = mysqli_query($conn,$sql);

header("location:index.html");
?>