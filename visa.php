<?php

include("config.php");
if(isset($_POST["send"])) {

    $NAME= $_POST['cardname'];
    $CARDNO= $_POST['cardnumber'];
    $EXP= $_POST['exp'];
    $CVV=$_POST['cvv'];
    $METH='visa';
    $INSERT="INSERT INTO payments (name_on_card , bank_acc_number , validthru ,pin, payment_method ) VALUES ('$NAME','$CARDNO','$EXP','$CVV','$METH')";
    mysqli_query($config , $INSERT);
    mysqli_close($config);
    echo "<script>alert('Thank you for Your Time , The Confirmation Mail Sent');</script>";
    echo "<script>location.replace('home3.html')</script>";
    
}
  
?>