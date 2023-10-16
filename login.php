<?php
include("config.php");
if(isset($_POST["login"])) {
    $EMAIL= $_POST['email'];
    $PASSWORD= $_POST['psw'];

    $ALERT="<script>alert('Invalid Username Or Password');</script>";

        $QUERY="SELECT * FROM customers where email='$EMAIL' AND password='$PASSWORD'";
        $RES=mysqli_query($config , $QUERY);
        $ROWS= mysqli_fetch_array($RES);
        if($ROWS["email"]==$EMAIL && $ROWS["password"]==$PASSWORD){

            header('location:home3.html');
        }else{
          echo $ALERT;
          echo "<script>location.replace('login.html')</script>";

        }
        
    }


?>