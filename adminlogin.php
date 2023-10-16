<?php
include("config.php");
if(isset($_POST["adminlogin"])) {
    $USERNAME= $_POST['uname'];
    $PASSWORD= $_POST['psw'];

    $ALERT="<script>alert('Invalid Username Or Password');</script>";

        $QUERY="SELECT * FROM admin where user_name='$USERNAME' AND password ='$PASSWORD'";
        $RES=mysqli_query($config , $QUERY);
        $ROWS= mysqli_fetch_array($RES);
        if($ROWS["user_name"]==$USERNAME && $ROWS["password"]==$PASSWORD){

            header('location:productedit.html');
        }else{
          echo $ALERT;
          echo "<script>location.replace('admin.html')</script>";

        }
        
    }


?>