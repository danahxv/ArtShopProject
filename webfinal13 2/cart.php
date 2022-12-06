<!-- cart page: Shahad & Deemah -->
<!DOCTYPE>
<html>
<head>
    <title>Cart</title>
    <meta charset=utf-8>
    <link rel="stylesheet" type="text/css" href="css/2cartSS.css">
    </head>
<body>

    <div class="wrapper"><div class="container">
        
    <!-- shopping cart usig table of 3 rows for the poducts and a heading -->
        <!-- start of table -->
    <table>
     
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
        
        <!-- PHP -->
 <?php
 include_once("connection.php");
 if(isset($_GET['delete'])){
$deleteid=$_GET['delete'];
$query2="delete from cart where id='$deleteid'";
$delete=mysqli_query($connection, $query2);
}
 
 $usern=$_SESSION["userid"];
 	$totalbill=0;
$query="select * from cart where username='$usern'";
$run=mysqli_query($connection,$query);
while($rows=mysqli_fetch_array($run)){
$pid=$rows['id'];
$pname=$rows['pname'];
$pamount=$rows['iamount'];
$pprice=$rows['price'];
$tprice=$rows['tprice'];
$picpath=$rows['picpath'];
 ?>
        <!-- end of PHP code -->
        
        <form action="updatecart.php" method="post">
		<input type="hidden" name="pid" value="<?php echo $pid; ?>">
    <tr>
        <td><img src="<?php echo $picpath ?>" style="width:120px; height:80px;" ></td>
        <td><input type="number" min="1" max="10" value="<?php echo $pamount ?>" name="amount"></td>       
        <td>$<?php echo $tprice ?></td> 
		    
        <td><a href="cart.php?delete=<?php echo $pid ?>">Remove</a></td> 
		<td><input type="submit" value="Update" name="update" style="width:70px;"></td>
    </tr>

	</form>
      <!-- php -->
        <?php   $totalbill+=$tprice; } ?>
        <!-- end of php -->
        
   
  
        
    </table>
    <!-- end of table -->
        
        
    <!-- calculating the total by summing all products prices -->
    <h2><strong> Your Total= <?php echo $totalbill ?>$</strong></h2> 
  
	<button class = "checkoutb" onClick="window.location.href='checkout.php'"> Proceed To Checkout </button>
	<br><br>
		<button class = "checkoutb" onClick="window.location.href='index.php'"> back to home page </button>
    
		
    </div></div> 
		
    </body></html>