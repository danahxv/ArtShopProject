<!-- Wafa & Nouf & Renad -->
<!DOCTYPE>
<html>  
<head>
    
    <meta charset="UTF-8"> 
    <title>Order History</title>
    <link rel = "stylesheet" href="css/checkoutSS.css" >
	<style>
	
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
h3{
color:#CDC79B;
}
	</style>
	
	</head>
	
    <body>

        
        <div class="wrapper">
    <div class="container">
        
    <!-- start of the form -->
    
            
            <!-- shipping part -->
           
			<h1>
               <a href="index.php" class="button"> Go Back to Home </a>
            </h1>
		
			
			
			     <div> 
            <br>
           <h3>Here's your past purchases ! </h3>
            <br> 
			<center>
        <table width="80%" border="3px">

          <tr>
            <td>Items</td>
            <td>Orders ID</td>
            <td>Total Bill</td>
          </tr>
          
            
        <?php
			include_once("connection.php");
		if(isset($_SESSION["userid"])){
		$usern=$_SESSION["userid"];
		}
		else { $usern=0;}
       $sql = "SELECT * FROM orders where userID='$usern' ";
            $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
            
        <tr width="80%" border="3px">
            <td ><?php
			$orid=$row["orderID"];
			 $sql1 = "SELECT * FROM orderdetails where orderID='$orid' ";
            $result1 = mysqli_query($connection, $sql1);
        while($row1 = mysqli_fetch_array($result1)) {
			
			echo $row1["orderProductName"]; echo "("; echo $row1["orderProductQuantity"]; echo ")";
 
			  echo "<br>";} ?>
			 
			</td>
            <td><?php echo $row["orderID"]; ?></td>
            <td ><?php echo $row["orderTotalPrice"]; ?></td>

        </tr>
      
          

        <?php
		}
             ?>
			   </table>
			   </center>
            </div>  
			
			<?php
		
			
			if(isset($_POST['order'])){
			$usern=$_SESSION["userid"];
$street=$_POST['street'];
$city=$_POST['city'];
$country=$_POST['country'];
$houseno=$_POST['houseno'];
$nebor=$_POST['nebor'];
			$querysave="insert into locations (country,city,street,House_no,neborhood,userID ) values ('$country','$city','$street','$houseno','$nebor','$usern')";
$save=mysqli_query($connection, $querysave);
			$tamount=0;
			$totalbill=0;
			$query2="select * from cart where username='$usern'";
$select2=mysqli_query($connection, $query2);
while($row=mysqli_fetch_array($select2)){
$proid=$row['id'];
$tprice=$row['tprice'];
$amount=$row['iamount'];

$tamount+=$amount;

$totalbill+=$tprice;

}
	$querysave1="insert into orders (orderDate, orderQuantity, orderTotalPrice, userID, productID ) values (CURDATE(),'$tamount','$totalbill','$usern','$proid')";
$save1=mysqli_query($connection, $querysave1);


	$query1="select * from orders ORDER BY orderID DESC";
$select=mysqli_query($connection, $query1);
$row=mysqli_fetch_array($select);
$orderID=$row['orderID'];		
	

$query3="select * from cart where username='$usern'";
$select3=mysqli_query($connection, $query3);
while($row3=mysqli_fetch_array($select3)){
$proid=$row3['id'];
$tprice=$row3['tprice'];
$amount=$row3['iamount'];

	$query5="select * from products where productID='$proid'";
$select5=mysqli_query($connection, $query5);
$row5=mysqli_fetch_array($select5);
$productName=$row5['productName'];	


$querysave1="insert into orderdetails (orderDate,orderProductName, orderProductQuantity, orderProductPrice, orderID, productID ) values (CURDATE(),'$productName','$amount','$tprice','$orderID','$proid')";
$save1=mysqli_query($connection, $querysave1);

}

		
			$delquery="delete from cart where username='$usern'";
$run=mysqli_query($connection,$delquery);
			
			}
			?>
			
			
           
    </div>
</div>
      
        
    </body> 
    
    <!--end of body  -->


</html>

<!-- end of the html tag -->


