
<!DOCTYPE html>
<html>
<head>
	<title>Pharmacy - Products</title>
	<link rel="stylesheet" type="text/css" href="css/pro.css">
    	<link rel="stylesheet" href="css/all.min.css">
		<link rel="stylesheet" href="css/Cart.css">

		<meta charset="UTF-8">
	<script src="cart.js" defer></script>
	<!-- <script src="https://kit.fontawesome.com/8d0f1b9a9a.js" crossorigin="anonymous"></script> -->


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
		<div class="container">
		
		  <a href="Home3.html"><img class="logo-image" src="images/Logo.png" href="Home3.html" alt="Online Pharmacy"></a>
		  <h1 class="logo">WelCome !</h1>
		  <nav>
			<ul>
			  <li><a href="Home3.html">Home</a></li>
			  <li><a href="catogory.html">Categories</a></li>
			  <li><a href="Profile.php">Profile</a></li>
			 
			
			</ul>
		  </nav>
		  <div class="search-box">
			<input type="text" placeholder="Search..." id="searchInput">
			<button type="button" class="search-btn" ><i class="fa fa-search"></i> </button>
		  </div>
		</div>
	  </header>
	  
	
	<main1>
		<div class="cart-modal-overlay">
			<div class="cart-modal">
			  <i id="close-btn" class="fas fa-times"></i>
				<h1 class="cart-is-empty">Cart is empty</h1>
			  
				<div class="product-rows">
				</div>
				<div class="total">
				  <h1 class="cart-total">TOTAL</h1>
					<span class="total-price">$0</span>
					<a  class="CheckOut-btn">CheckOut</a>
					  <button class="Remove-btn">Remove</button>

				</div>
			  </div>
		</div>
			  
		<!--  end of cart modal -->
		  <div class="cart-btn">
			<i id="cart" class="fas fa-shopping-cart"></i>
			  <span class ="cart-quantity">0</span>
		  </div>
		<section id="products">
			<div class="container1">
				<h2 style="font-family: Copperplate, Papyrus, fantasy;font-size: xxx-large;color: dimgrey;font-weight: bolder;text-decoration: underline;" > Products  :</h2>
				<div class="product-grid">
					<?php
                     include('config.php');
                     $RESULT= mysqli_query($config, "SELECT * FROM products");
                     while($row = mysqli_fetch_array($RESULT)){
                     echo "
					 <main>
                <div class='box'>
                    
                       <div class='img-box'>
                            <img src='$row[image]'  />
                        </div>
                        <div class='detail-box'>
                            <h5> $row[product_name] </h5>
                            <br>
                            <h4> $row[price]L.E </h4>
                            <p> $row[description]  </p>
                            <a  href='confirm.php? id=$row[product_ID]' id='confirm'  target='_self' >Add to Cart</a>
                        </div>
                </div>
                        </main>
                        
                    ";} ?>
                </div>
			</div>
		</section>
		
	</main1>

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
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			  </ul>
			</div>
		  </div>
		</div>
	  </footer>

</body>
</html>
					
