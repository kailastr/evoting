<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
     <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
 

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <title></title>
</head>
<body>
<div class="container-fluid" id="cont-3">
        <header id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href=index.html  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="admin_dashboard.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Dashboard</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="user_suggestion.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Suggestions</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="show_contact.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Contact</a>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="user_details_year.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user_cand_year.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidates</a>
                </li>
              
                <li class="nav-item" >
                  <a class="nav-link" href="logout.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Logout</a>
                </li>
              
              </ul>
            </div>
          </nav>
        </header>
	<section style="padding-top:50px; padding-botton:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >

            
	<?php session_start();


	include('dbConnect.php');
	$sql = "select * from candidate_3rd order by id desc";

	$rs = mysqli_query($conn, $sql);

	echo "
		<table border='2'>
			<tr>
				<th>Sno.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Number</th>
				<th>Branch</th>
				<th>Roll No.</th>
				<th>Enroll ID</th>
				<th>status</th>
				<th>Action</th>
			</tr>
	";
	$i = 1;
	foreach($rs as $row){
		$cid = $row['id'];
		echo "
		<tr>
			<td>".$i."</td>
			<td>".$row['name']."</td>
			<td>".$row['email']."</td>
			<td>".$row['mobile']."</td>
			<td>".$row['branch']."</td>
			<td>".$row['rollno']."</td>
			<td>".$row['enrollid']."</td>
			<td>";
			if($row['approve_status']==0){
				echo "Pending";
			}else if($row['approve_status']==1){
				echo "Approved";
			}else{
				echo "Rejected";
			}
			
			echo "</td>
			<td>";
			if($row['approve_status']==2){
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=1" class="btn btn-success">Approve</a>';
			}else if($row['approve_status']==1){
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=2" class="btn btn-danger">Reject</a>';
			}else if($row['approve_status']==0){
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=1" class="btn btn-success">Approve</a>';
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=2" class="btn btn-danger">Reject</a>';
			}

			echo "</td>
        </tr>
		";
		$i++;
	}
	echo "</table>";
    ?>
        </div>
            </div>
        </div>
    </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
        <script src="js/jquery-3.2.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>    
        <script src="js/bootstrap.min.js"></script>  
        
</body>
</html>