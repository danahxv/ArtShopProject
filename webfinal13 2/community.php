<!-- Community Renad & Nouf & Wafa -->
<!-- PHP -->
<?php
include_once("connection.php");
?>



<!-- html -->
<!DOCTYPE html>


<html>
<head>
<title>community</title>
<meta charset = "utf-8">
<link rel = "stylesheet" type ="text/css" href = "css/stylesheet1.css">
<meta name="description" content="Discover everything you need for Painting, Drawing, and Print Making. Shop Art Supplies and artists' materials online at Artists Home today!">

<!-- only a font for "welcome to artist's home-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
<header> </header>
  
    <h1>  ONLINE COMMUNITY  </h1>
        
        <p>  <center> <a href="mailto:artistcommunity@gmail.com">share your arts with us </a> </center> </p>
     
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
         <a href = "index.php#paint">Paint Brushes</a>    </div>
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
 
<!-- this cart icon code is not appearing in html -->
		 
</div>
  
</div>

<div class="container">
    <img src="images/house.png" alt="house" class="image" > 
  <div class="middle">
    <div class="text"> 
POLINA POPKOVA  <br>
        Country: Ukraine</div>
  </div> 
</div>
     
<div class ="container">
     <img src="images/tree.png" alt="tree" class="image"  style ="widht:100%" >
  <div class="middle">
    <div class="text">
        
      RAPHAELA KRASSNITZER <br>
        Country: Austria </div> </div>
    </div>
        
<div class="container">
     <img src="images/face.png" alt="face" class="image" >
  <div class="middle">
    <div class="text">
      BRUNO TOYA  <br>
        Country:Angola </div>
  </div> 
</div>
  <!--2nd 3 images -->
  <br>  <br>  <br>
 
<div class="container">
    <img src="images/thinking.png" alt="house" class="image" > 
  <div class="middle">
    <div class="text"> 
MARIAMI AKHOBADZE <br>
        Country: Georgia</div>
  </div> 
</div>
     
<div class ="container">
     <img src="images/flowers.jpeg" alt="tree" class="image"  style ="widht:100%" >
  <div class="middle">
    <div class="text">
        
      
CAMILLE OCRE <br>
      country:France </div> </div>
    </div>
        
<div class="container">
     <img src="images/Dream.png" alt="face" class="image" >
  <div class="middle">
    <div class="text">
      LILIANE KRÖLL  <br>
        Country:Austria </div>
  </div> 
</div> 
  
 

    
           <br> 
 
        <footer>
         

    <center>
	<br>
    <a href="contact.html">CONTACT US</a>

    <h5>Artist's Home ©️ 2021</h5>
    
    </center>
    
    <br> <br>
    </footer>
	
	
    </body>  </html>