<?php

?>

<!--background image-->
<center>
<div class="background_image"><a href="index.php"> <img src="images/logo.jpeg" alt="background" style="width:35%;"> </a>
	</div>
</center>
<body>
 <div class="icon">
<i class="fa fa-shopping-cart"> </i>   
	   
        </div>

<h1>Welcome To Artist's Home</h1>

<div class="navbar">

  <a href="index.php">Home</a>
  <a href="about.html">About Us</a>
  
  <div class="dropdown">
    <button class="products">Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
         <a href = "index.php#artpaint">Art Paint</a>
         <a href = "index.php#drawing">Drawing</a>
         <a href = "index.php#canvas">Canvases and Schetchbook</a>
         <a href = "index.php#paint">Paint Brushes</a>
    </div>
  </div>
  <a href="community.php">Community</a>
    
  
  <?php 
  if(!isset($_SESSION["user"])){
  ?>
  <a href="login.html">Sign In</a>
  <a href="SignUp.php">Sign Up</a>
  <?php  } else {?>
  <a href="orderhistory.php">Order History</a>
  <a href="cart.php">Cart</a>
    <a href="logout.php">Logout</a>
	<?php  }?>
	   
    
    
  <div class="navbar-right">
  <input type="text" placeholder="Search..">
 
	</div>  
	  
<!-- this is the cart icon code -->
	 
	<div class="navbar-right"> <div class="navbar-right1"><!--<a href="cart.php" class="jhh"> cart </a>--></div> </div> 
  
</div>