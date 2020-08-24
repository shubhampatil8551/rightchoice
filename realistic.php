<?php
require('connect.php');
?>

<html>
<head>
<title>Right choice career guidance service </title>
				
				
				<!-- CSS and scripts  start-->
				
				<!--external CSS and scripts 
				 <link rel="stylesheet" href=https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
				  <!-- local CSS and scripts in right choice-->
				  <link rel="stylesheet" href="css/external.css"></link>
					<link rel="stylesheet" href="css/bootstrap.min.css"></link>
					<script src="js/jquery.js"></script>
				  
				  
				<!-- CSS and scripts  END-->
				
<div class="nav-top-3">
  <div class="logo" style="letter-spacing:0px;">
		<table ><tr><td>
		<img src="http://localhost/rightchoice/pages/assets/images/rightchoice_logo.png">
		</td><td><h1 ></h1></td><tr></table>
		
   </div>
    
</div>

  <h3><marquee direction="" behavior="alternate">An one stop solution to your search</marquee></h3>				
				
				
<img class="header-image" src="http://localhost/rightchoice/pages/assets/images/mission2.jpg" 
															alt="header image" width="1340" height="350"></img>
</head>
<body>
<div>
			<div class="welcomemessage">
			<?php
					session_start();
					error_reporting(0);
					echo "welcome ".$_SESSION['user_name'];
				
				?>
			</div>
			<div class="btn btn-info">
			<a href="logout.php" style="color:white">logout</a>
			</div>
	</div>	
<center>
		<div>
		
			<form action="career.php" method="post" style="width:400px;text-align:left;">
					
						<!--Realistic form for selection-->
						
						<!-- are you-->
						 <div>
						<label style="text-align:left;">Are You?*</label>
						</div>
						<div>
						<select id="areyou" class="form-control" name="areyou">
						<option value = "0">--</option>
						<option value = "1">Practical.</option>
						<option value = "2">Systematic.</option>
						<option value = "3">A nature lover.</option>
						<option value = "4">Curious about facts.</option>
						</select>
						</div>
						
						
						<!-- can you-->
						 <div>
						<label style="text-align:left;">Can You?*</label>
					    </div>
						<div>
						<select id="canyou"  name="canyou"  class="form-control">
						<option value = "0">--</option>
						<option value = "1">Fix electrical things.</option>
						<option value = "2">Solve critical problem.</option>
						<option value = "3">Take care of trees/natural heritage.</option>
						<option value = "4">Search for ancient heritage.</option>
						
						</select></div>
						
						
						
						
						<!-- like to-->
						
						 <div>
						<label style="text-align:left;">Like to?*</label>
						</div>
						<div>
						<select id="liketo" name="liketo" class="form-control">
						<option value = "0">--</option>
						<option value = "1">Tinker with machines.</option>
						<option value = "2">Lead team/person.</option>
						<option value = "3">Journey in forest.</option>
						<option value = "4">Travel around country/world.</option>
						</select>
						</div><br>
						<button type="submit" name="submit" class="btn btn-info" >Check</button>
			</form>
			
		</div>
</center>		


<!-- Footer -->

 <!-- About Section -->
 <br>
 
<footer>
<div class="footer"id="about">
<br>
<b>Right Choice Career guidance services</b><br>
Contact: +91 8551 049763 &nbsp;&nbsp;&nbsp;&nbsp;
Email ID : shubhampatil8551@gmail.com<br>

Address: Opposite DYP college, Ravet Road,Akurdi Pune - 411 035<br>			
Copyright ©2019 All Rights Reserved
  </div>
</footer> 
</body>
</html>					