<?php 
include_once("connection.php");
if($_SESSION["user"]=="admin")
echo "";
else
header("location: logout.php");
?>
<!-- DOCTYPE -->
<!-- login page: Wafa Mohammed - 2180004263 -->


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
			<?php
			//start php code
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
			
			
			
			<br>
            <h1>
                Add New Product
            </h1>
<form action="AddProduct.php" method="post" enctype="multipart/form-data">
            <!-- user must enter his information to create an acount in the our website -->
            <div class="sec">
                <label>Type: </label>
                <input type="text" name="Type" required>
            </div>
            <div class="sec">
                <label>Name: </label>
                <input type="text" name="Name" required>
            </div>
            
            <div class="sec">
                <label>Price: </label>
                <input type="text" name="Price" required>
            </div>
            <div class="sec">
                <label>Stock: </label>
                <input type="text" name="Stock" required>
            </div>
			 <div class="sec">
                <label>Category: </label>
                <select name="Category" >  
<option value="00">- Select Category -</option>   
<?php
$s2="select * from productcategory";
$s3=mysqli_query($connection,$s2);
?>
<?php while($catdata=mysqli_fetch_array($s3)) { ?>  <option value="<?php echo $catdata['productCatpgoryID']; ?>"><?php echo $catdata['productCatpgoryname']; ?></option>
           <?php } ?>
		 
           </select>
            </div>
			 <div class="sec">
                <label>Description: </label>
                <input type="text" name="Description" required>
            </div>
			 <div class="sec">
                <label>Picture: </label>
				<input type="file" name="Picture"  id="propic" />
                
            </div>
            

            <div>
			<input type="submit" class="btn" value="Add Product" name="addproduct">
                
                
            </div>
        </form>
    </div>
</div>
        
       


        
        
        
        
        
    </body> 
    
    <!--End of body  -->


</html>

<!-- End of the Html tag -->


