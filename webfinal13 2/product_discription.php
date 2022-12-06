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
<style>
.left_div{
width:40%;
height:auto;
margin-left:5%;
align:left;
float:left;
}
.right_div{
width:48%;
height:auto;
align:right;
float:right;
background-color:#00CC00;
}
button{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #CDC79B;
  text-align: center;
  cursor: pointer;
  
  font-size: 16px;
}

button:hover {
  opacity: 0.7;
}

</style>
</head>


 <?php include 'header.php'?>



	<?php
	$id=0;
	if(isset($_GET['id'])){

	
	$id=$_GET['id'];
	
	
	
	}
	
	?>
	
 <div id="artpaint" style="margin-bottom:400px;">
	 		 	 <center>
	 <h2>Product Detail</h2>
	<br>
  <div> 
	 <?php
	 include_once("connection.php");
	 $query="select * from products where productID='$id'";
//start show products
$run=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($run)){
$productID=$rows['productID'];
$productName=$rows['productName'];
$productPrice=$rows['productPrice'];
$productPicture=$rows['productPicture'];
$productDescription=$rows['productDescription'];



	 ?>
	 
	 

	<div class="left_div">   
  <img src="<?php echo $productPicture ?>" alt="Acrylic Paint" style="width:400px; height:450px;"> <br><br> </div>
  <h3>Name: <?php echo $productName ?></h3> <br>
  <h3> Price: $<?php echo $productPrice ?></h3> <br>
  <h3>Description: <?php echo $productDescription ?></h3> <br>
	 
	 <?php 
  if(!isset($_SESSION["user"])){ echo ' <p> <button>Login Required</button></p>';} else {
  ?> 
  <p> <button onClick="window.location.href='add_cart.php?id=<?php echo $productID ?>'">Add to Cart</button></p>
  <?php } ?> 



  </div>
  </div>
	
	
		 </center>
		 
		 
		 <br>
 
 <?php  } ?>
<p></p>
<br>
      <?php include 'footer.php'?>
	  <script>
	  
			window.open("help_window.php", "", "width=300,height=300");
			
		</script>
</body>
</html>
