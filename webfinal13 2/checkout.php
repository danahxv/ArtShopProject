<!-- checkout page: lamia -->
<!DOCTYPE>
<html>  
<head>
    
    <meta charset="UTF-8"> 
    <title>Checkout</title>
    <link rel = "stylesheet" href="css/checkoutSS.css" >
	<script type="text/javascript" src="js/javacode.js"></script>
	
	<script>

</script>
	
    </head>
    <body>

        
        <div class="wrapper">
    <div class="container">
        
    <!-- start of the form -->
        <form action="thankyou.php" method="post" name="form1">
            
            <!-- shipping part -->
            <h1>
                Shipping Details
            </h1>
            <div>
                <div class="sec">
                    <label>First Name: </label>
                    <input type="text" name="f-name">
                </div>
                <div class="sec">
                    <label>Last Name: </label>
                    <input type="text" name="l-name">
                </div>
            </div>
            <div class="sec">
                <label>Street: </label>
                <input type="text" name="street">
            </div>
            <div>
                <div class="sec">
                    <label>City: </label>
                    <input type="text" name="city">
                </div>
                <div class="sec">
                    <label>Country: </label>
                    <input type="text" name="country">
                </div>
				<div class="sec">
                    <label>House No: </label>
                    <input type="text" name="houseno">
                </div>
				
                <div class="sec">
                    <label>Neborhood: </label>
                    <input type="text" name="nebor">
                </div>
            </div>
            
            
            <!-- payment part -->
            <!-- using placeholders to hint the correct input -->
            <h1>
            Payment Information
            </h1>
            
            <div class="sec">
                <label>Credit Card Noumber: </label>
                <input type="text" name="card_number"  placeholder="1234-1234-1234-1234" required>
            </div>
            
            <div class="sec">
                <div class="sec">
                    <label>Expiration: </label>
                    <input type="text" name="expire" placeholder="MM / YY" required>
                </div>
                <div class="sec">
                    <label>CCV: </label>
                    <input type="text" name="security" placeholder="0000" maxlength="4" required>
                </div>
            </div>
            <div>
			<input type="submit" name="order" value="Purchase" onClick="return formValidate()">
                
            </div>
        </form>
    </div>
</div>
        
      
        
        
    </body> 
    
    <!--end of body  -->

</html>
<!-- end of the html tag -->


