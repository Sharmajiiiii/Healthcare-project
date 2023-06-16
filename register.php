<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body Style="text-align: center;>
  <div class="header">
  	<h2>Please Enter Your Details Carefully.</h2>
  </div>
	<pre>
  <form method="post" action="connection.php">
  	  Username :  	<input type="text" name="username" placeholder="Enter username" required>
  	  Email    :	<input type="email" name="email" Placeholder="Enter your Email id" required>
  	  Password :	<input type="password" name="password" Placeholder="Enter Password" required>
  	  Address  :	<input type="text" name="address" Placeholder="Enter Address" required>
  	  <button type="submit" name="register">Register</button>
  	
  	Already a member? <a href="login.php">Login<a></br>
	<a href="index.php">Go back to home</a> 
  	</pre>
	
  </form>
</body>
</html>