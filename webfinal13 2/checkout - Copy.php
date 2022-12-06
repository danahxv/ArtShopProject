<!-- checkout page: lamia -->
<!DOCTYPE>
<html>  
<head>
    
    <meta charset="UTF-8"> 
    <title>Checkout</title>
    <link rel = "stylesheet" href="css/checkoutSS.css" >
	<script type="text/javascript" src="js/javacode.js"></script>
	
	<script>
function formValidate() {
  var fm = document.forms["form1"]["f-name"].value;
  var em = document.forms["form1"]["l-name"].value;
    var st = document.forms["form1"]["street"].value;
  var ci = document.forms["form1"]["city"].value;
    var co = document.forms["form1"]["country"].value;
  var ho = document.forms["form1"]["houseno"].value;
    var ne = document.forms["form1"]["nebor"].value;
  var cn = document.forms["form1"]["card_number"].value;
   var ex = document.forms["form1"]["expire"].value;
    var se = document.forms["form1"]["security"].value;
 
  if (fm == "") 
  {
    alert("First Name must be filled out!");
    return false;
  }
  
  if (em == "") 
  {
    alert("Last Name must be filled out!");
    return false;
  }
   if (st == "") 
  {
    alert("Street must be filled out!");
    return false;
  } 
  if (ci == "") 
  {
    alert("City must be filled out!");
    return false;
  } 
  if (co == "") 
  {
    alert("country must be filled out!");
    return false;
  }
   if (ho == "") 
  {
    alert("House must be filled out!");
    return false;
  }
  
   if (ne == "") 
  {
    alert("Neborhood must be filled out!");
    return false;
  }
  
   if (cn == "") 
  {
    alert("Card Number must be filled out!");
    return false;
  }
  
   if (ex == "") 
  {
    alert("Expire Date must be filled out!");
    return false;
  }
  
   if (se == "") 
  {
    alert("CCV must be filled out!");
    return false;
  }
  
  
  
   var phoneno = /^\d{16}$/;
  if(cn.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Card Number");
     return false;
  }
  
  
  
  
}
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


