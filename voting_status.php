<?php


include('dbConnect.php');




if(isset($_GET['status'])){
    $status = $_GET['status'];

    $sql = "update comm set start=$status";
    $rs = mysqli_query($conn,$sql);
   
    header("location:admin_dashboard.php");
}

?>