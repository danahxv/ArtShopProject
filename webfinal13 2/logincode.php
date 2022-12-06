<!-- Shahad & Deemah -->
<?php
function err(){
echo "	<script>
			window.alert('Your Email or Password is Wrong!!');
			window.history.back();
		</script>";
}
	include_once("connection.php");
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];


$query_login="select * from users where Email='$email'";
$select_user=mysqli_query($connection, $query_login);
$row=mysqli_fetch_array($select_user);
$TypeID=$row['TypeID'];
$userID=$row['userID'];
$firstName=$row['firstName'];
$emaildb=$row['Email'];
$passworddb=$row['password'];

if($emaildb==$email && $passworddb==$password){
 
if($TypeID==1) { 
$_SESSION["user"]="admin";
$_SESSION["name"]=$firstName;
header("location: admin.php"); }
else if($TypeID==2){

$_SESSION["user"]="user";
$_SESSION["userid"]=$userID;
setcookie("usernid", $userID, time()+30*24*60*60);
 header("location: index.php"); }
else {}


}
else {
err();
}


//end isset
}


?>