<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - Online Pharmacy</title>
<link rel="stylesheet" href="css/ChO.css"> 
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/Cart.css">
<script src="cart.js" defer></script>



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
		
		  <a href="Home3.html"><img class="logo-image" src="images/Logo.png" alt="Online Pharmacy"></a>
		  <h1 class="logo">WelCome !</h1>
		  <nav>
			<ul>
			  <li><a href="Home3.html">Home</a></li>
			  <li><a href="catogory.html">Categories</a></li>
			  <li><a href="products.php">Products</a></li>
			  <li><a href="Profile.php">Profile</a></li>
			 
			
			</ul>
		  </nav>
		  <div class="search-box">
			<input type="text" placeholder="Search..." id="searchInput">
			<button type="button" class="search-btn" ><i class="fa fa-search"></i> </button>
		  </div>
		</div>
	  </header>
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
			  
		<!--   end of cart modal -->
		  <div class="cart-btn">
			<i id="cart" class="fas fa-shopping-cart"></i>
			  <span class ="cart-quantity">0</span>
		  </div>
  
  <div class="container1">
    <h1 style="font-family: Copperplate, Papyrus, fantasy;font-size: xxx-large;color: dimgrey;font-weight: bolder;text-decoration: underline;">Checkout</h1>
    <?php
include("config.php");
$RESULT = mysqli_query($config, "
SELECT *
FROM cart 
");
   while($row=mysqli_fetch_array($RESULT)){
      //start After <main> Finish Before </main>
      //Replace product Name $row[product_name]
      //Replace product price $row[price]
    echo "
    <main>
    <form method='post'>
               
                
    <label for='fname'><b> Product</b></label>
     <input type='text' id='fname' name='fname' value='$row[product_name]' readonly>&nbsp &nbsp
     <label for='psw_rebeat'><b>Price</b></label>
     <input type='text' name='psw-repeat' value='$row[price] L.E' readonly>&nbsp &nbsp
     <a href='delete_card.php? id=$row[cart_id]'><button type='button' style='background-color: #ef3c3d; width: 100px ; height: 35px; padding-top: 5px; text-align: center;border-radius: 50px; '>Delete</button></a>

</form> 
</main>
  
      ";
   }
?>   
<h3 style="    background-color: white;
    color: blck;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;"> total
      <?php
include("config.php");
$RESULT=mysqli_query($config,"SELECT SUM(price) AS sum FROM cart");
while($row=mysqli_fetch_assoc($RESULT)){
    echo $sub_total = ($row['sum']);
     
     
};
      ?> L.E </h3>

      <button style="    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;"><a href="checkout.html " style="
    color: black;
    text-decoration: none;" >Process to payment</a></button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
