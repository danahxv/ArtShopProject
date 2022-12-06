<!-- Shahad & Deemah -->
<?php 
include_once("connection.php");
if($_SESSION["user"]=="admin")
echo "";
else
header("location: logout.php");
?>
<!DOCTYPE>



<html>
    
<head>
    
    <meta charset="UTF-8"> 
    <title>Update Product</title>
    <link rel = "stylesheet" href="css/update.css" >
    </head>
    <body>

        
        <div class="wrapper">
    <div class="container">       
            <br>
        

			<?php
			include_once("connection.php");
			
			
		if(isset($_GET['id'])){
$id2=$_GET['id'];
	$query = "DELETE FROM products WHERE productID='$id2'";
	$result = mysqli_query($connection, $query);
	if($result)
	 echo '
    <strong>Succefully!</strong> Product Deleted.
 ';
}			
			?>
			<br>
            <h1>
                Delete Or Update Product
            </h1>
		
		
<?php

$query="select * from products order by productID desc";
echo"<div><table class='table table-bordered' border='2px'> <thead> <tr> <th> Product Name</th><th> Product Stock</th><th> Product Price</th><th> Product Discription</th><th> Product Image</th><th> Update/Delete</th></tr> </thead>";
$run=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($run)){
$id1=$rows['productID'];
$pname=$rows['productName'];
$price=$rows['productPrice'];
$stock=$rows['productStock'];
$pdiscription=$rows['productDescription'];
$picpath=$rows['productPicture'];


echo"
<tbody>
<tr>
<th>". $pname."</th>
<th>".$stock."  </th>
<th>$".$price."</th>
<th>".$pdiscription." </th>
<th><img src='$picpath' width='200px' height='200px'> </th>
<th><a href='update.php?id=$id1' class='btn btn-danger'>Delete</a><br><br><br><a href='updateproduct.php?idd=$id1' class='btn btn-primary'>Update</a></th>

</tr>";
} 
echo " </tbody></table></div>";



?>
		
			<div> 
		<form method="post" action="admin.php" >
		<input type="submit" class="btn" value="back to admin page" name="back to admin page">
		
		</form>
			</div>	
		
    </div>
</div>
        
     
    </body> 
    
    <!--End of body  -->


</html>

<!-- End of the Html tag -->


