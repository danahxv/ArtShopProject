<!-- all group members participated -->
<?php
include_once("connection.php");
?>
<!DOCTYPE html>




<html>
<head>

    
<title>Artist's Home</title>
<meta charset = "utf-8">
<link rel = "stylesheet" type ="text/css" href = "css/stylesheet.css">
<meta name="description" content="Discover everything you need for Painting, Drawing, and Print Making. Shop Art Supplies and artists' materials online at Artists Home today!">



<!-- only a font for "welcome to artist's home-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">

</head>


 <?php include 'header.php'?>
	
 <div class="card" id="artpaint">
	 		 
	 <h2>Art Paint</h2>
	<br>
  <div class="row"> 
	 <?php
	 include_once("connection.php");
	 $query="select * from products where productCatpgoryID='50' order by productID desc";
//start show products
$run=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($run)){
$productID=$rows['productID'];
$productName=$rows['productName'];
$productPrice=$rows['productPrice'];
$productPicture=$rows['productPicture'];
$productDescription=$rows['productDescription'];



	 ?>
	 
	 
	 
	   <div class="column">
  <img src="<?php echo $productPicture ?>" alt="Acrylic Paint" style="width:100%">
  <h3><a href="product_discription.php?id=<?php echo $productID ?>" style="text-decoration:none; color:#BAAE8B;"><?php echo $productName ?> </a></h3>
  <p class="price">$<?php echo $productPrice ?></p>
  <p><?php echo $productDescription ?></p>
 <?php 
  if(!isset($_SESSION["user"])){ echo ' <p> <button>Login Required</button></p>';} else {
  ?> 
  <p> <button onClick="window.location.href='add_cart.php?id=<?php echo $productID ?>'">Add to Cart</button></p>
  <?php } ?>
	  </div>
	  
<?php  } ?>
	  
	 
  </div>
  </div>
	
	
	
  
   <div class="card" id="drawing">
	   	  <h2>Drawing</h2>
  <br>
  <div class="row"> 
<?php $query="select * from products where productCatpgoryID='40' order by productID desc";
//start show products
$run=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($run)){
$productID=$rows['productID'];
$productName=$rows['productName'];
$productPrice=$rows['productPrice'];
$productPicture=$rows['productPicture'];
$productDescription=$rows['productDescription'];



	 ?>
	 
	 
	 
	   <div class="column">
  <img src="<?php echo $productPicture ?>" alt="Acrylic Paint" style="width:100%">
  <h3><a href="product_discription.php?id=<?php echo $productID ?>" style="text-decoration:none; color:#BAAE8B;"><?php echo $productName ?> </a></h3>
  <p class="price">$<?php echo $productPrice ?></p>
  <p><?php echo $productDescription ?></p>
 <?php 
  if(!isset($_SESSION["user"])){ echo ' <p> <button>Login Required</button></p>';} else {
  ?> 
  <p> <button onClick="window.location.href='add_cart.php?id=<?php echo $productID ?>'">Add to Cart</button></p>
  <?php } ?>
	  </div>
	  
<?php  } ?>
	  
	 



	 
  </div>
	  </div>
  
	<div class="card" id="canvas">
		  <h2>Canvases &#38; Sketchbooks</h2>
  <br>
  <div class="row"> 
	  
	<?php
	$query="select * from products where productCatpgoryID='80' order by productID desc";
      
//start show products
$run=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($run)){
$productID=$rows['productID'];
$productName=$rows['productName'];
$productPrice=$rows['productPrice'];
$productPicture=$rows['productPicture'];
$productDescription=$rows['productDescription'];


	 ?>
	 
	 
	 
	   <div class="column">
  <img src="<?php echo $productPicture ?>" alt="Acrylic Paint" style="width:100%">
  <h3><a href="product_discription.php?id=<?php echo $productID ?>" style="text-decoration:none; color:#BAAE8B;"><?php echo $productName ?> </a></h3>
  <p class="price">$<?php echo $productPrice ?></p>
  <p><?php echo $productDescription ?></p>
 <?php 
  if(!isset($_SESSION["user"])){ echo ' <p> <button>Login Required</button></p>';} else {
  ?> 
  <p> <button onClick="window.location.href='add_cart.php?id=<?php echo $productID ?>'">Add to Cart</button></p>
  <?php } ?>
	  </div>
	  
<?php  } ?>
	  
	 
	
	  
	</div>
	 </div>
  
	<div class="card" id="paint">
		 <h2>Paint Brushes</h2>
  <br>
  <div class="row">
	 
	 <?php
	 $query="select * from products where productCatpgoryID='20' order by productID desc";
//start show products
$run=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($run)){
$productID=$rows['productID'];
$productName=$rows['productName'];
$productPrice=$rows['productPrice'];
$productPicture=$rows['productPicture'];
$productDescription=$rows['productDescription'];



	 ?>
	 
	 
	 
	   <div class="column">
  <img src="<?php echo $productPicture ?>" alt="Acrylic Paint" style="width:100%">
  <h3><a href="product_discription.php?id=<?php echo $productID ?>" style="text-decoration:none; color:#BAAE8B;"><?php echo $productName ?> </a></h3>
  <p class="price">$<?php echo $productPrice ?></p>
  <p><?php echo $productDescription ?></p>
 <?php 
  if(!isset($_SESSION["user"])){ echo ' <p> <button>Login Required</button></p>';} else {
  ?> 
  <p> <button onClick="window.location.href='add_cart.php?id=<?php echo $productID ?>'">Add to Cart</button></p>
  <?php } ?>
	  </div>
	  
<?php  } ?>
	  
	 
		</div>
	 </div>
	
   
 
<p></p>

    <?php include 'footer.php'?>
	
</body>
</html>
