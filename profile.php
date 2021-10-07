<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-voting Candidates</title>

  <!------------------  Required Meta Tags ------------------>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------------------  Bootstrap css ------------------>

<link rel="stylesheet" href="css/bootstrap.min.css">

  <!------------------  FontAwesome CDN ------------------>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!------------------  Custom css------------------>

<link rel="stylesheet" href="css/style.css">

<!------------------  Fonts CDN ------------------>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!------------------  Internal Css ------------------>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
    .card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border:4px #a517ba solid;
			border-radius:5px;	
		}    


</style>
</head>
<body>
  <!------------------  Navbar Section ------------------>
  <div class="container-fluid" id="cont-3">
    <header id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.html"  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
            <li class="nav-item" >
              <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="year.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
            </li>          
            <li class="nav-item" >
              <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
            </li>
          
          </ul>
        </div>
    </nav>
</header>

<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
          
           <h1 class="text-center" style="margin-bottom: 10px;">VOTER CARD</h1>
         </div>
</dvi>
</div> 

<?php 
   
   $email = $_GET['username'];
   $sql = "select * from voterlogin where email = '".$email."' ";
   include("dbConnect.php");
    
       $rs = mysqli_query($conn, $sql);
      
     foreach($rs as $row){
?>



<div class="col-md-12 " style=" margin-left:25px; padding-top: 30px;">
<div class="card" style="width: 30 rem;">
<img class="card-img-top" src="img/9.svg" alt="shinzo" height="350px">

    <!-- the username -->
    <h1>
        <?php echo $row['name']; ?>
    </h1>

    <!-- and role or location -->
    <h2>
       VoterID: <?php echo $row['voterid']; ?>
     </h2>

  </header>

    <p> <?php echo $row['branch']; ?>
     </p>
    <p> <?php echo $row['email']; ?>
     </p>
    <p> <?php echo $row['mobile'];?> 
     </p>
    <?php } ?>
    </p>
  <p>
  <a href="can_vote.php"><button class="magnifyBtn">VOTE NOW</button></a>
  <?php
    if($row['IsCand']=='Yes')
      {
       ?>
      <a href="withdraw.php"><button class="magnifyBtn">WITHDRAW</button></a>
  <?php
       }
  ?>
     </p>
     </div>
     </div>

</section>


</body>
</html>