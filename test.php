
	<?php
		session_start();
		error_reporting(0);
		echo "welcome ".$_SESSION['user_name'];
	?>
	
	 
		  <?php

require('connect.php');
?>
		


<html>

<head>
<title>Right choice career guidance service </title>
				<meta charset="UTF-8"></meta>
				<meta></meta>
				<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
				<link rel="stylesheet" href="css/external.css"></link>
				<!-- CSS and scripts  start-->
				
				<!--external CSS and scripts 
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
				  <!-- local CSS and scripts in right choice-->
				  
					<link rel="stylesheet" href="css/bootstrap.min.css"></link>
					<link rel="stylesheet" href="css/external.css"></link>
					
					<script src="js/jquery.js" type="text/javascript"></script>
				  
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
	<div class="">
			<div class="welcomemessage">
			<?php
					
					error_reporting(0);
					echo "welcome ".$_SESSION['user_name'];
				
				?>
			</div>
			<div class="btn btn-info">
			<a href="logout.php" style="color:white">logout</a>
			</div>
	</div>	
	
	
	
<div class="test" id="test">
		<center>
					<h1>Before you start to test yourself.</h1>


					<p>Please read how to go through the process.
					  Where you have various options.See what is the meaning of these options for selection.<br><br>
					  <img src="http://localhost/rightchoice/pages/assets/images/instructions.png" alt="instructions" width="700" height="400"></img>
		</center><br>
					  
					  <h2>This will help you to understand meaning</h2>
					<h4>1.Realistic :</h4>
						<p>People who have athletic or mechanical ability, 
							prefer to work with objects, machines, tools, plants or animals, or to be outdoors.
					   </p>
					<h4>2.Social :</h4>
					<p>People who have artistic, innovating or intuitional abilities 
						and like to work in unstructured situations using their imagination and creativity.</p>
						
					<h4>3.Enterprizing :</h4><p>People who like to work with people, influencing, persuading, performing, leading
						or managing for organizational goals or economic gain.</p>
						
						
</div>
<br>

	<center style="margin:0px 400px; text-align:center;">
	 <!--option form for selection realistic social enterprizing.-->
			<h2><b>Test yourself.</b></h2>
			<p>* are mandatory</p>
				
						<div class="form-group">
						<label>What do u feel your nature of type? Select on from following:</label>
						</div>
						<select id="nature" class="form-control" >
						<option value = "0">------------</option>
						<option value = "1">Realistic</option>
						<option value = "2">Social</option>
						<option value = "3">Enterprizing</option>
						</select>
						<br>
						<br>
						<button onclick="validateForm()" class="btn btn-info">Go</button>
	</center>
		
			<script>
					function validateForm() 
					{
							var x = document.getElementById("nature").value;
							if (x == 0) 
							{
								    
								alert("Please select one option..!! ");
								return false;
								}
							else if(x==1)
							{
									
									window.location.href="realistic.php";
								}
							else if(x==2)
							{
									
									window.location.href="social.php";
								}
								else
							{
									
									window.location.href="enterprizing.php";
								}
					}
			</script>


			
			
			
	
		





		<?php
		
		
		?>
		
	<div>
	   <h3><marquee direction="" behavior="alternate">Our mission: To search your interest area.</marquee></h3>
	
	</div>
	 
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