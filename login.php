
	<!-- this is for donor registraton -->
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" Style="text-align: center;">User Login</h1>	
		
		<form action="" method="post" class="" Style="text-align: center;>
			<div class="col-md-12">
				<div class="col-md-4"></div>
				<div class="col-md-4">
							Email 	  :	<input type="email" name="email"  placeholder="Enter your email" required></br></br>
							Password  : 	<input type="password" name="password"  placeholder="Enter your password" required></br></br>
	
					
					<!-- <button name="submit" type="submit">Login</button> <br> -->
					
						<input type="submit" value="Login" name="submit">
					
					<!-- login validation -->
			<?php 
		
				// $_SESSION['userstatus']="";

							include('connect.php');
							if(isset($_POST["submit"])){
							$sql= "SELECT * FROM users WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $con->query($sql);

									if ($result->num_rows > 0) {
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
										    echo "<script>location.replace('dashboard.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$con->close();		
					}
					
 			?>
			<!-- login validation End-->
			
			
		</form><br><br>
			
					
					Not A User?<a href="register.php" style="color:#C30">Click here</a> to Register.<br></br>
					<a href="index.php">Go back to home</a> 



			

				</div>
				<div class="col-md-4"></div>
			</div> <!-- col-md-12 -->
			
		
	</div>
	
	




	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
