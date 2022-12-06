<!-- Admin page Lamia & Danah -->
<?php
include_once("connection.php");
?>
<?php 
if($_SESSION["user"]=="admin")
echo "";
else
header("location: logout.php");
?>

=


<!-- html -->
<!DOCTYPE>
<html>  
<head>
    
    <meta charset="UTF-8"> 
    <title>Admin</title>
    <link rel = "stylesheet" href="css/checkoutSS.css" >
    
    <!-- CSS -->
	<style>
	h1,h4{
	font-family:Georgia, serif;
	}

	.button{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #CDC79B;
  text-align: center;
  cursor: pointer;
  width: 60%;
  font-size: 16px;
  text-decoration:none;
  font-family:Georgia, serif;
}

.button:hover {
  opacity: 0.7;
}

.btt{
padding-top:15%;
}

h4 a{
margin-top:5%;
 text-decoration:none;
 color: #CDC79B;
 
}
	</style>
	  <!-- end of CSS -->  
    
	</head>
    
    
    
    <body>

        
        <div class="wrapper">
    <div class="container">
        
    <!-- start of the form -->
    
            
            <!-- shipping part -->
            <h1>
                Welcome Admin <?php echo $_SESSION["name"]; ?>
            </h1>
			 <div class="btt">
		 <h2>
             <a href="AddProduct.php" class="button">   Add New Products </a>
            </h2>
			<br>
			<h2>
             <a href="update.php" class="button">   Modify Products </a>
            </h2>
			<br><br>
			<h4>
             <a href="logout.php">   Logout </a>
            </h4>
			</div>
			
			<?php
			
			?>
			
			
           
    </div>
</div>
        
      
        
        
    </body> 
    
    <!--end of body  -->


</html>

<!-- end of the html tag -->


