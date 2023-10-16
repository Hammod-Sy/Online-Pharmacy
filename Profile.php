<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile - Online Pharmacy</title>
	<link rel="stylesheet" href="css/Profile.css">
    <link rel="stylesheet" href="css/all.min.css">

</head>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "1047552072559487", // Facebook page ID
            whatsapp: "+201141364674", // WhatsApp number
            call_to_action: "Order Now !", // Call to action
            button_color: "#666666", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,facebook", // Order of buttons
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<body>
    <header>
		<div class="container1">
		 
		  <a href="Home3.html"><img class="logo-image" src="images/Logo.png" alt="Online Pharmacy"></a>
		  <h1 class="logo">WelCome !</h1>
		  <nav>
			<ul>
			  <li><a href="Home3.html">Home</a></li>
			  <li><a href="catogory.html">Categories</a></li>

			</ul>
		  </nav>
		  <div class="search-box">
			<input type="text" placeholder="Search...">
			<button class="search-btn"><i class="fa fa-search"></i></button>
		  </div>
		</div>
	  </header>
	  <?php
	  include('config.php');
	  $RESULT= mysqli_query($config, "SELECT * FROM customers");
	  while($row = mysqli_fetch_array($RESULT)){
		echo "
		<main>
<form>
<div class='payment img'>
	<!--<img src='images/Delivery.jpg' width='30px' height='50px'>-->
  </div>
	<div class='inputbox'>
		<h2  style='font-family: Copperplate, Papyrus, fantasy;font-size: xx-large;color: dimgrey;font-weight: bolder;text-decoration: underline;'>Personal information</h2>
		<div class='right-box'>
			<span>Name</span>
			<input type='text'class='input-box' value='$row[first_name] $row[last_name]' readonly><br>
			<span>E-mail</span>
			<input type='text' class='input-box' value='$row[email]' readonly><br>
			<span>Address </span>
			<input type='text' class='input-box' value='$row[address]' readonly><br>
			<span>Phone</span>
			<input type='text' class='input-box' value='$row[CUSTOMER_PHONE]' readonly><br>
		</div>
		
	</div>
	
</form>
</main>
";}
?>

    <footer>
		<div class="container">
		  <div class="row">
			<div class="col-md-4">
			  <h4>About Us</h4>
			  <p>We are considered a pharmacy that specializes in delivering medicines via the Internet, and we provide this service by dealing with doctors who specialize in this field, and we help patients to search for all their medicines that will be available to us in order to deliver them to them.</p>
			</div>
			<div class="col-md-4">
			  <h4>Contact Us</h4>
			  <p>Email: hammod.syria2001@gmail.com <br>Phone: +201141364674<br>Address: ############# </p>
			</div>
			<div class="col-md-4">
			  <h4>Follow Us</h4>
			  <ul class="social-icons">
			  <li><a href="https://facebook.com/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://Twitter.com/"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </footer>
</body>
</html>