<!-- Shahad & Deemah -->
<?php
include_once("connection.php");

if(isset($_GET['id'])){

	
	
	$addid=$_GET['id'];

$usern=$_SESSION["userid"];

$itemamount=1;

$getquery="select * from products where productID='$addid'";
$runpget=mysqli_query($connection,$getquery);
$rowget=mysqli_fetch_array($runpget);
$getpname=$rowget['productName'];
$getpamount=$rowget['productPrice'];
$getpicpath=$rowget['productPicture'];




$cquery="select * from cart where id='$addid'";
$runq=mysqli_query($connection,$cquery);
$row=mysqli_fetch_array($runq);
$cid=$row['id'];
$amount=$row['iamount'];
$price=$row['tprice'];

if(!isset($cid)){
$addquery="insert into cart (id, iamount, username, pname, price, tprice, picpath) values('$addid','$itemamount','$usern','$getpname','$getpamount','$getpamount','$getpicpath')";
$save=mysqli_query($connection, $addquery);

echo "	<script>
			window.alert('Product Add Successfully!');
			window.history.back();
		</script>";

}
else{
$nprice=$getpamount*$itemamount;
$tprice=$price+$nprice;
$addamount=$amount+$itemamount;
$updatequery="update cart set iamount='$addamount', tprice='$tprice' where id='$addid'";
$save=mysqli_query($connection, $updatequery);

echo "	<script>
			window.alert('Product Add Successfully!');
			window.history.back();
		</script>";
}


	
	
	}


function update(){
$updatequery="update cart set iamount='$addamount', tprice='$tprice' where id='$addid'";
$save=mysqli_query($connection, $updatequery);
}



?>