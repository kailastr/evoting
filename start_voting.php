<?php

	include('dbConnect.php');
	$sql = "select * from comm ";	
	$rs = mysqli_query($conn, $sql);
    echo "<table border='2'>";
	foreach($rs as $row){		
			
			
			
			if($row['start']==2){
				echo '<a href="voting_status.php?status=1" class="btn btn-success">Start Voting</a>';
			}else if($row['start']==1){
				echo '<a href="voting_status.php?status=2" class="btn btn-danger">Stop Voting</a>';
			}else if($row['start']==0){
				echo '<a href="voting_status.php?status=1" class="btn btn-success">Start Voting</a>';
				echo '<a href="voting_status.php?status=2" class="btn btn-danger">Stop Voting</a>';
			}
	}
	echo "</table>";
    
?>