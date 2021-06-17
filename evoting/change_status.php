<?php


include('dbConnect.php');

if(isset($_GET['status'])){
    $status = $_GET['status'];
    $id = $_GET['id'];

    $sql = "update candidates set approve_status=$status where id=$id";
    $rs = mysqli_query($conn,$sql);
   
    header("location:user_cand.php");
}

?>