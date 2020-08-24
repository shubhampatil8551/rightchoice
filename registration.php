<?php
session_start();
require'connect.php';


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
				  <link rel="stylesheet" href="css/external.css"></link>
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
				
				
<img class="header-image" src="http://localhost/rightchoice/pages/assets/images/mission2.jpg" alt="header image" width="1340" height="350"></img>
</head>

<body>


<div>
<br>
<a href="index.php" class="btn btn-info">HOME</a>
<a href="userloginpage.php" class="btn btn-info">Log In</a>
</div>
<div >

 
</div>
<center>
			<label class="btn btn-info" style="width:300px; background-color:#333;">Registration </label>
			<br>All fields are mandatory
				<div id="registrationform" style="width:600px; text-align:left;">
	
							<form action="registration.php" method="post" class="form-horizontal">
								<div class="form-group">
								<label >First Name</label>
								<input type="text" name="fname"class="form-control" placeholder="First Name" required></input>
								</div>	
								<div class="form-group">
								<label>Middle Name</label>
								<input type="text"name="mname"class="form-control" placeholder="Middle Name "required ></input>
								</div>	
								<div class="form-group">	
								<label>Last Name</label></td>
								<input type="text"name="lname"class="form-control" placeholder=" Last Name"required></input>
								</div>	
								
								<div class="form-group">
								<label>Date of Birth</label>
								<input type="date"name="dob"class="form-control"required></input>
								</div>	
								<div class="form-group">
								<label>Email ID</label>
								<input type="email"name="emailid"class="form-control" placeholder="Email ID"required></input>
								</div>	
								<div class="form-group">	
								<label>Contact</label></td>
								<input type="text" name="contact"class="form-control"placeholder="Contact Number"required pattern="[0-9]{10}"></input>
								</div>	
								<div class="form-group">
								<label>Address</label>
								<input type="text" name="address"class="form-control" placeholder="Address"required></input>
								</div>	
								
								<div class="form-group">
								<label>Username</label>
								<input type="text"name="username"class="form-control" placeholder="Username"required></input>
								</div>	
								<div class="form-group">
								<label>Password</label>
								<input type="password" name="password"class="form-control" placeholder="Password"required></input>
								</div>	
								
								<center><button type="submit" name="submit" class="btn btn-info">Submit</button></center>
							
							</form>
							
					</div>
		</center>
</body>
</html>


<?php
if(isset($_POST['submit']))
    {
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$dob=$_POST['dob'];
		$emailid=$_POST['emailid'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query ="INSERT INTO user(fname,mname,lname,dob,emailid,contact,address,username,password) VALUES('$fname','$mname','$lname','$dob','$emailid','$contact','$address','$username','$password')";

	//	$data = mysqli_query($conn, $query); 
		
		if ($conn->query($query) === TRUE) {
			// Javascript alert to the user
			$message = "You have registerd successfully! please Login Now";
			
			echo "<script type='text/javascript'>alert('$message');</script>";
			
			
			
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}

		$conn->close();
	}
		


?>
 
<!-- About Section -->
  <!--ABOUT CLASS-->
  
<footer>
<div class="footer"id="about">
Contact Us<br>
Right Choice Career guidance services<br>
Contact: +91 8551 049763 &nbsp;&nbsp;&nbsp;&nbsp;
Email ID : shubhampatil8551@gmail.com<br>

Address: Opposite DYP college, Ravet Road,Akurdi Pune - 411 035<br>			
Copyright ©2019 All Rights Reserved
  </div>
</footer>
</body>
</html>
		