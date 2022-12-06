<!-- Shahad & Deemah -->

<!DOCTYPE>
<html>
    
<head>
    
    <meta charset="UTF-8"> 
    <title>Sign Up</title>
    <link rel = "stylesheet" href="css/SignUp.css" >
	<script type="text/javascript" src="js/javacode.js"></script>
    </head>
    <body>

        
        <div class="wrapper">
    <div class="container">
    
       
            
            <br><br>
            <h1>
                Sign Up
            </h1>
			

			<?php
			include_once("connection.php");
			if(isset($_POST['adduser'])){
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$newpassword=$_POST['password'];
$phone=$_POST['phone'];
$cofpassword=$_POST['cofpassword'];
$type=2;
if($newpassword==$cofpassword){
$query="insert into users (firstName ,lastName ,password ,Email ,Phone_no ,TypeID) values ('$Fname','$Lname','$newpassword','$email','$phone','$type')";
$signup=mysqli_query($connection,$query);
if($signup){
echo '<br><center><h4>Registered Successfully!<a href="login.html">Click Here for Login</a> </h4><center>'; 
}
}
else{
echo '<br><center><h3> Your Both Passwords are not Matched! </h3><center>'; 
}

}
			
			?>
        <!-- end of Deemah's php code -->
        
        
            <!-- user must enter his information to create an acount in the our website -->
			 <form action="SignUp.php" method="post" name="signup">
            <div class="sec">
                <label>First Name: </label>
                <input type="text" name="Fname" required>
            </div>
            <div class="sec">
                <label>Last Name: </label>
                <input type="text" name="Lname" required>
            </div>
            
            <div class="sec">
                <label>Email Address: </label>
                <input type="email" name="email" required>
            </div>
            <div class="sec">
                <label>Phone: </label>
                <input type="text" name="phone" placeholder="xxxxxxxxxx" required>
            </div>
            <div>
                <div class="sec">
                    <label>Password: </label>
                    <input type="password" name="password" required>
                </div>
                <div class="sec">
                    <label>Confirm Password: </label>
                    <input type="password" name="cofpassword" required>
                </div>
            </div>

            <div>
			<input type="submit" class="btn" name="adduser" value="Sign Up" onClick="return regValidate()">
             
                
            </div>
        </form>
    </div>
</div>
        
       


        
        
        
        
        
    </body> 
    
    <!--End of body  -->


</html>

<!-- End of the Html tag -->


