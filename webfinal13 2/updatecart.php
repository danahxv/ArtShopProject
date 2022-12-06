<!-- Lamia & Danah -->
<?php
function err(){
echo "	<script>
			window.alert('Your Email or Password is Wrong!!');
			window.history.back();
		</script>";
}
include_once("connection.php");
if(isset($_POST['update'])){
 $usern=$_SESSION["userid"];
 $addid=$_POST['pid'];
	 $itemamount=$_POST['amount'];

$query5="select * from products where productID='$addid'";
$run5=mysqli_query($connection,$query5);
$rows5=mysqli_fetch_array($run5);
$cstock=$rows5['productStock'];

if($itemamount<=0 || $itemamount==null){ echo'<div class="alert alert-warning alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> Please Enter Positive Number!
  </div>';}
 else if($itemamount>$cstock){ 
 $getquery="select * from products where productID='$addid'";
$runpget=mysqli_query($connection,$getquery);
$sst=mysqli_fetch_array($runpget);
$ssto=$sst['productStock'];
 
 echo "	<script>
			window.alert('We have limited stock!');
			window.history.back();
		</script>";
 
 
 }
else{

$cquery="select * from cart where id='$addid' and username='$usern'";
$runq=mysqli_query($connection,$cquery);
$row=mysqli_fetch_array($runq);
$cid=$row['id'];
$amount=$row['iamount'];
$price=$row['price'];

$tprice=$price*$itemamount;
$updatequery="update cart set iamount='$itemamount', tprice='$tprice' where id='$addid' and username='$usern'";
$save=mysqli_query($connection, $updatequery);

 
 echo "	<script>
			window.alert('Card Update Succfully!');
			window.history.back();
		</script>";

//header("location: cart.php");
}
	
	}

?>