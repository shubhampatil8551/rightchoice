<?php
require('connect.php');?>
<html>
<head>
<title>Realistic</title>
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
		<!-- Navbar (top) -->
		<div class="nav-top-3">
			<div class="logo" style="letter-spacing:0px;">
		<table><tr><td>
		<img src="http://localhost/rightchoice/pages/assets/images/rightchoice_logo.png">
		</td><td><h1 ></h1></td><tr></table>
		
   </div>
    <img class="header-image" src="http://localhost/rightchoice/pages/assets/images/mission2.jpg" alt="header image" width="1340" height="350">
</div>

</head>
<body>
<?php
require('connect.php');

?>
<br><br><br><?php
		session_start();
		error_reporting(0);
		echo "welcome ".$_SESSION['user_name'];
	?>
	<a href="logout.php"   class="btn btn-info" style="color:white">logout</a>
	<br><br>

	

			<center>
			<h1 class="btn btn-info" style="width:1340px; background-color:#333;">Admin Page</h1>
			<div class="navbar-collapse">
					<form method="post">
					<input type="submit" name="submit" value="Users" class="btn btn-info">
					<!--<input type="submit" name="con" value="Contact Us Info" class="btn btn-info">-->
					</form>
					
			</div>
			
			</center>

<?php 
	if(isset($_POST['submit']))
		{
		 $query = "SELECT * FROM user";
		 //$data = mysqli_query($conn, $query); 
	     //$total=	mysqli_num_rows($data);
					//Associative array
					//$row=mysqli_fetch_assoc($data);
					
				if($result = mysqli_query($conn, $query))
				
				{
					if(mysqli_num_rows($result) > 0)
							{
								echo "<center>";
								echo "<table border=1px solid;>";
								echo "<tr>";
								echo "<th>User Id</th>";
								echo "<th>First Name</th>";
								echo "<th>Middle Name</th>";
								echo "<th>Last Name</th>";
								echo "<th>Date of Birth</th>";
								echo "<th>Email ID</th>";
								echo "<th>Contact</th>";
								echo "<th>Address</th>";
								echo "<th>Username</th>";
								echo "<th>Password</th>";
								echo "</tr>";
							
							  while($row = mysqli_fetch_array($result))
							     {
							       echo "<tr>";
									echo "<td>" . $row['uid'] . "</td>";
									echo "<td>" . $row['fname'] ."</td>";
									echo "<td>" . $row['mname'] . "</td>";
									echo "<td>" . $row['lname'] . "</td>";
									echo "<td>" . $row['dob'] . "</td>";
									echo "<td>" . $row['emailid'] . "</td>";
									echo "<td>" . $row['contact'] . "</td>";
									echo "<td>" . $row['address'] . "</td>";
									echo "<td>" . $row['username'] . "</td>";
									echo "<td>" . $row['password'] . "</td>";
									echo "</tr>";
								}
								echo "</table>";
								echo "</center>";
				            }
        
							// Free result set
							mysqli_free_result($result);
                } 
	
	            else{
                      echo "No records matching your query were found.";
                    }
					


		}
		else
		{
			//echo "ERROR: Could not able to execute " . mysqli_error($conn);
		}	
		// Close connection
		mysqli_close($conn);
?>
<!-- contact us retrival-->
<!--






<!-- About Section -->
  <br><br>
<footer>
<div class="footer" id="about">
About Us<br>
Right Choice Career guidance services<br>
Contact: +91 8551 049763 &nbsp;&nbsp;&nbsp;&nbsp;
Email ID : shubhampatil8551@gmail.com<br>

Address: Opposite DYP college, Ravet Road,Akurdi Pune - 411 035<br>			
Copyright ©2019 All Rights Reserved
  </div>
</footer>


</body>

</html>