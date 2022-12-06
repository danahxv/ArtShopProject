<!-- Wafa & Nouf & Renad -->
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
    <title>Add Product</title>
    <link rel = "stylesheet" href="css/AddProduct.css" >
    </head>
    <body>

        
        <div class="wrapper">
    <div class="container">
    
        
            
            <br>
        
        <!-- PHP code -->
			<?php
			
			include_once("connection.php");
			if(isset($_POST['addproduct'])){
$Type=$_POST['Type'];
$Name=$_POST['Name'];
$Price=$_POST['Price'];
$Stock=$_POST['Stock'];
$Category=$_POST['Category'];
$Description=$_POST['Description'];

if(isset($_FILES['Picture']['name']))
$picname=$_FILES['Picture']['name'];
$tmp=$_FILES['Picture']['tmp_name'];

$ext="png";
 $picpath="ProductImage/$Name.$ext";
$query="insert into products (productType, productName, productPrice, productStock, productPicture, productDescription, productCatpgoryID) values ('$Type','$Name','$Price','$Stock','$picpath','$Description','$Category')";
$save=mysqli_query($connection,$query);
if($save){  move_uploaded_file($tmp,$picpath); 
echo '<h3> Product Added Successfully </h3>'; }

}		
			?>
        
        <!-- end of PHP -->
			
			
			
			<br>
            <h1>
                Update Product
            </h1>
			<?php
				include_once("connection.php");
				
				if(isset($_POST['updateproduct'])){
				$pidd=$_POST['idd'];
$Type=$_POST['Type'];
$Name=$_POST['Name'];
$Price=$_POST['Price'];
$Stock=$_POST['Stock'];
$Category=$_POST['Category'];
$Description=$_POST['Description'];


$query="update products set productType='$Type', productName='$Name', productPrice='$Price', productStock='$Stock', productDescription='$Description', productCatpgoryID='$Category' where productID='$pidd'";
$save=mysqli_query($connection,$query);
if($save){ 
echo '<h3> Product update Successfully </h3>'; 

header("location: update.php");
}

}
				
				
			if(isset($_GET['idd'])){
$id3=$_GET['idd'];
$query1="select * from products where productID='$id3'";
$update=mysqli_query($connection,$query1);
$row=mysqli_fetch_array($update);
$pid=$row['productID'];
$productType=$row['productType'];
$productName=$row['productName'];
$productPrice=$row['productPrice'];
$productStock=$row['productStock'];
$productCatpgoryID=$row['productCatpgoryID'];
$productDescription=$row['productDescription'];

}
			
			?>
			
<form action="updateproduct.php" method="post">
            <!-- user must enter his information to create an acount in the our website -->
            <div class="sec">
                <label>Type: </label>
				<input type="hidden" name="idd" value="<?php echo $pid  ?>">
                <input type="text" name="Type" value="<?php echo $productType  ?>" required>
            </div>
            <div class="sec">
                <label>Name: </label>
                <input type="text" name="Name" value="<?php echo $productName  ?>" required>
            </div>
            
            <div class="sec">
                <label>Price: </label>
                <input type="text" name="Price" value="<?php echo $productPrice  ?>" required>
            </div>
            <div class="sec">
                <label>Stock: </label>
                <input type="text" name="Stock" value="<?php echo $productStock  ?>" required>
            </div>
			 <div class="sec">
                <label>Category: </label>
                <select name="Category" >  
<option value="00">- Select Category -</option>   
<?php
$s2="select * from productcategory";
$s3=mysqli_query($connection,$s2);
?>
<?php while($catdata=mysqli_fetch_array($s3)) { ?>  <option value="<?php echo $catdata['productCatpgoryID']; ?>" <?php if($catdata['productCatpgoryID']==$productCatpgoryID){ echo"selected";}?> ><?php echo $catdata['productCatpgoryname']; ?></option>
           <?php } ?>
		 
           </select>
            </div>
			 <div class="sec">
                <label>Description: </label>
                <input type="text" name="Description" value="<?php echo $productDescription  ?>" required>
            </div>
			
            

            <div>
			<input type="submit" class="btn" value="Update Product" name="updateproduct">
                
                
            </div>
        </form>
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


