<html>
<head>
<title>Right choice career guidance service </title>
				<meta charset="UTF-8"></meta>
				<meta></meta>
				<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
				<link rel="stylesheet" href="css/external.css"></link>
				<!--external CSS and scripts -->
				 <!-- CSS and scripts  start-->
				
				<!--external CSS and scripts 
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
				  <!-- local CSS and scripts in right choice-->
				  <link rel="stylesheet" href="registrationexternal.css"></link>
					<link rel="stylesheet" href="css/bootstrap.min.css"></link>
					
				  
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
<?php
		
		error_reporting(0);
		echo "welcome ".$_SESSION['user_name'];
	
	?>
<div>
	<a href="logout.php" class="btn btn-info">logout</a>
	</div>	

		<center>
			<form action="" method="post" style="width:400px;text-align:left;">
						<!--Social form for selection-->
						<!-- are you-->
						<div class="form-group">
						<label style="text-align:left;">Are You?*</label>
						</div>
						<select id="areyou" class="form-control">
						<option value = "0">--</option>
						<option value = "1">Health concious.</option>
						<option value = "2">Responsible.</option>
						<option value = "3">Idealistic.</option>
						<option value = "4">Cooperative.</option>
						</select>
						
						
						<!-- can you-->
						<div class="form-group">
						<label>Can You?*</label>
						</div>
						<select id="canyou" class="form-control">
						<option value = "0">--</option>
						<option value = "1">Teach/train others.</option>
						<option value = "2">Lead group.</option>
						<option value = "3">Express yourself clearly.</option>
						<option value = "4">Mediate disputes.</option>
						</select>
						
						
						
						<!-- like to-->
						
						
						<div class="form-group">
						<label style="text-align:left;">Like to?*</label>
						</div>
						<select id="liketo" class="form-control">
						<option value = "0">--</option>
						<option value = "1">Work in group.</option>
						<option value = "2">Serve Ohers.</option>
						<option value = "3">Help people with their problem.</option>
						<option value = "4">Participate in social activities.</option>
						
						</select>
						<br><br>
						<button class="btn btn-info" onclick="checkSocial()">Check</button>
					
			</form>
		</center>
		<!--<script>
					
					function checkSocial()
					
					{
						
						var x = document.getElementById("areyou").value;
					
						var y = document.getElementById("canyou").value;
					
						var z = document.getElementById("liketo").value;
						
						if(x==0 && y==0 && z==0)
						{
						   alert("Please select options");
						}
							
						else if(x==1&&y==1&&z==1)
						{
							alert("All first 3");
						}
						else 
							alert("You have selected other options");
					}

			</script>-->
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

</body>


</html>				
						