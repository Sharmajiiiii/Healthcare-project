<html>
<body>
<?php
session_start();
include('connect.php'); 
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$q="insert into users(username,email,password,address) values('$username','$email','$password','$address')";
$i=mysqli_query($con,$q); 
if($i==1)
echo "you are registered";
?>
<a href="login.php"> Go Back to login</a>
</body>
</html>