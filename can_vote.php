<?php

include('dbConnect.php');

$sql = "select * from comm ";

$rs = mysqli_query($conn, $sql);
foreach($rs as $row)
if ($row['start']==1) {
		header("location:confirmation.php");
  }
else 
{	
	    header("location:wait.php");
}
mysqli_close($conn);

?>