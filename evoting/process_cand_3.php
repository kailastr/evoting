<?php
session_start();

// form data received

$uname = $_POST['username'];
$pword = $_POST['password'];

include('dbConnect.php');
$sqlchk = "select * from users where email='".$uname."'";
$resultchk = mysqli_query($conn, $sqlchk);
if (mysqli_num_rows($resultchk) > 0) {
	header("location:already.php");
}
else
{
$sql = "select * from voterlogin where email='".$uname."' and password='".$pword."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // changing 'result' to associative arr and stored to 'row'
  while($row = mysqli_fetch_assoc($result)) {
   // created a session key and allocated values to iy
        $_SESSION['vid'] = $row['voterid'];
		
		header("location:confirmation.php");
  }
} else {
 		$_SESSION['error'] = "Wrong Username or Password";
	    header("location:login.php");
}
}
mysqli_close($conn);


?>