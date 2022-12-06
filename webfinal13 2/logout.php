<!-- Shahad & Deemah -->
<?php
include_once("connection.php");
$usern=$_SESSION["userid"];
$delquery="delete from cart where username='$usern'";
$run=mysqli_query($connection,$delquery);


session_destroy();
setcookie("usernid", "", time()-3600);
header("location: index.php");
//end 

?>