<?php
session_start();
include("connect.php");
?>


<html>
<head>
<title>Right choice career guidance service </title>
				
				
				<!-- CSS and scripts  start-->
				
				<!--external CSS and scripts 
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
				  <!-- local CSS and scripts in right choice-->
				  <link rel="stylesheet" type="text/css" href="css/external.css"></link>
					<link rel="stylesheet" href="css/bootstrap.min.css"></link>
					<script src="css/jquery.js"></script>
				 
				  
				<!-- CSS and scripts  END-->
				
				
<div class="nav-top-3">
  <div class="logo" style="letter-spacing:0px;">
		<table ><tr><td>
		<img src="http://localhost/rightchoice/pages/assets/images/rightchoice_logo.png">
		</td><td><h1 ></h1></td><tr></table>
		
   </div>
    
</div>

  <h3><marquee direction="" behavior="alternate">An one stop solution to your search</marquee></h3>				
<body>				
				
<img class="header-image" src="http://localhost/rightchoice/pages/assets/images/mission2.jpg" alt="header image" width="1340" height="350"></img>
</head>


<div>
<br>
<a href="index.php" class="btn btn-info">HOME</a>
</div>


  <center>
					
         <div style="width:600px; text-align:left;">
		 
					<form action="" method = "post" id="loginform">
						  <div class="form-group">
							<label for="Username">Username:</label>
							<input type="text" required class="form-control" id="username" name = "username" placeholder="Username">
						  </div>
						  <div class="form-group">
							<label for="password">Password:</label>
							<input type="password" required class="form-control" id="password" name = "password" placeholder="Password">
						  </div>
						  <div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						  </div>
						  <div class="form-group" align="left">
						  <button type="submit" class="btn btn-info" name="submit" >Log In</button>
						  <a href="index.php" name = "register" class="btn btn-info">Cancel</a>
						  </div>
						  
						  
					</form>
			           
				   
							<div class="form-group" align="center">
							<label for="not register">Not Registered</label>
							<a href="registration.php" name = "register" class="btn btn-info">Click Here</a></div>
					  
		   </div>
				</center>
           
		   
		   
         	
	
	
	
	<?php
		if(isset($_POST['submit']))
		{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$query = "SELECT username,password FROM user WHERE username='$username' && password='$password'";
		$data = mysqli_query($conn, $query); 
		$total=	mysqli_num_rows($data);
		
		
		if($total==1)
		{
			$_SESSION['user_name']=$username;
			header('location:test.php');
			
		}
		else
		
		{
			// Javascript alert to the user
			$message = "Log in failed! Please try again!!!";
			echo "<script type='text/javascript'> alert('$message');</script>";
		
		}
		
		}
	
	
	?>

<!-- About Section -->
  
<footer>
<div class="footer"id="about">
About Us<br>
Right Choice Career guidance services<br>
Contact: +91 8551 049763 &nbsp;&nbsp;&nbsp;&nbsp;
Email ID : shubhampatil8551@gmail.com<br>

Address: Opposite DYP college, Ravet Road,Akurdi Pune - 411 035<br>			
Copyright ©2019 All Rights Reserved
  </div>
</footer>