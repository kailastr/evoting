<?php
session_start();

// form data received

$uname = $_POST['username'];
$pword = $_POST['password'];

include('dbConnect.php');

$sql = "select * from admin where username='".$uname."' and password='".$pword."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // changing 'result' to associative arr and stored to 'row'
  while($row = mysqli_fetch_assoc($result)) {
   // created a session key and allocated values to iy
        $_SESSION['aid'] = $row['aid'];
		$_SESSION['admin_id'] = $uname;
		$_SESSION['aname']  = $row['aname'];
		header("location:admin_dashboard.");
  }
} else {
 		$_SESSION['error'] = "Wrong Username or Password";
	    header("location:admin_login.php");
}

mysqli_close($conn);


?>