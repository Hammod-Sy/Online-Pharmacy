<?php

include("config.php");
if(isset($_POST["regester"])) {

    $FIRST_NAME= $_POST['fname'];
    $LAST_NAME= $_POST['lname'];
    $EMAIL= $_POST['email'];
    $PHONE=$_POST['phone'];
    $PASSWORSD= $_POST['psw'];
    $PASSWORDRE=$_POST['re-psw'];
    $ADDRESS=$_POST['address'];
    

    $ALERT="<script>alert('The confirmation password  does not match');</script>";
    
    if($PASSWORSD != $PASSWORDRE){
        
        //header("Location: signup.html?error=The confirmation password  does not match");
     echo $ALERT;
     echo "<script>location.replace('signup.html');</script>";
    } 
    else{

    $INSERT="INSERT INTO customers (first_name , last_name , email ,CUSTOMER_PHONE, password ,address ) VALUES ('$FIRST_NAME','$LAST_NAME','$EMAIL','$PHONE','$PASSWORSD','$ADDRESS')";
    mysqli_query($config , $INSERT);
    mysqli_close($config);
    header('location:login.html');
    }
}
  
?>