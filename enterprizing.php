<html>
<head>
<title>Right choice career guidance service </title>
				<meta charset="UTF-8"></meta>
				<meta></meta>
				<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
				<link rel="stylesheet" href="registrationexternal.css"></link>
				<!--external CSS and scripts -->
				<!-- CSS and scripts  start-->
				
				<!--external CSS and scripts 
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
				  <!-- local CSS and scripts in right choice-->
				  <link rel="stylesheet" href="css/external.css"></link>
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
<body class="universal" id="body">
<?php
		session_start();
		error_reporting(0);
		echo "welcome ".$_SESSION['user_name'];
	
	?>
<div>
	<a href="logout.php" class="btn btn-info">logout</a>
	</div>	
<center>
		<div>
		
			<form action="" method="post" style="width:500px;text-align:left;">
					
						<!--Realistic form for selection-->
						
						<!-- are you-->
						 <div>
						<label style="text-align:left;">Are You?*</label>
						</div>
						<div>
						<select id="areyou" class="form-control">
						<option value = "0">--</option>
						<option value = "1">Talkative</option>
						<option value = "2">Energetic</option>
						<option value = "3">Ambitious</option>
						<option value = "4">optimistic</option>
						</select>
						</div>
						
						
						<!-- can you-->
						 <div>
						<label style="text-align:left;">Can You?*</label>
					    </div>
						<div>
						<select id="canyou" class="form-control">
						<option value = "0">--</option>
						<option value = "1">Lead groups</option>
						<option value = "2">Motivate others</option>
						<option value = "3">Initiate things</option>
						<option value = "4">Persuade others</option>
						
						</select></div>
						
						
						
						
						<!-- like to-->
						
						 <div>
						<label style="text-align:left;">Like to?*</label>
						</div>
						<div>
						<select id="liketo" class="form-control">
						<option value = "0">--</option>
						<option value = "1">Start your own enterprize or service rendering company</option>
						<option value = "2">Deliver speeches</option>
						<option value = "3">Make decision</option>
						<option value = "4">Meet good personalities</option>
						</select>
						</div><br>
						<button onclick="checkEnterprizing()" class="btn btn-info" >Check</button>
			</form>
			
		</div>
</center>
        <script>
					
					function checkEnterprizing()
					
					{
						
						var x= document.getElementById("areyou").value;
					
						var y= document.getElementById("canyou").value;
					
						var z= document.getElementById("liketo").value;
						
						if(x==0&&y==0&&z==0)
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

			</script>
		
</body>
</html>				
						