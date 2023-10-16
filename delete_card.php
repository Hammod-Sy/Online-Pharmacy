<?php
 
 include("config.php"); 
 $ID=$_GET['id'];
 mysqli_query($config,"DELETE FROM cart WHERE cart_id=$ID");
 header('location:cart.php');




?>