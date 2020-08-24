<?php
 

include("connect.php");
?>

<html>
<head>
<title>Right choice career guidance service </title>
				<!-- CSS and scripts  start-->
				
			<!--external CSS and scripts 
		<link rel="stylesheet" hrefhttps://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.cs">
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
		<img class="header-image" src="http://localhost/rightchoice/pages/assets/images/mission2.jpg" alt="header image" width="1340" height="350"></img>
</head>
<body>
<br>
<br>

			<div class="btn btn-info">
			<a href="logout.php" style="color:white">logout</a>
			</div>
<br>
<br>
<?php
			

			if(isset($_POST['submit']))
					{
					 $op1=$_POST['areyou'];
					 $op2=$_POST['canyou'];
					 $op3=$_POST['liketo'];
					
					 //$message="form submitted";
			 
					$query = "SELECT career ,description FROM pattern1 WHERE op1='$op1' && op2='$op2' &&op3='$op3'";
					
					
					$data = mysqli_query($conn, $query); 
					$total=	mysqli_num_rows($data);
					
				
					//Associative array
					$row=mysqli_fetch_assoc($data);
					echo "<center><h2>Congratulations..!!  You have successfully tested yourself. 
					</h2></center><br>";
					
					echo "<center><b class='btn btn-info'
					style='width:300px;background-color:#333;'>Career</b></center><br>";
					echo "<center>";
					printf ("%s",$row["career"]);
					echo "</center>";
					
					echo "<br/>";
					echo "<br/>";
					echo "<center><b class='btn btn-info'
					style='width:300px;background-color:#333;'>Description</b></center><br>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					printf ("%s",$row["description"]);

					}
					// Free result set
					mysqli_free_result($data);

					mysqli_close($conn);
					//echo $message;

?>

<center>
<br><br>
<div>

<h4>You also visit our institute for more information.<br>
Contact Us Now and feel free to ask. We are happy help you.</h4>
<br>
Click Below <br>
<a href="contactus.php" class="btn btn-info" role="button">CONTACT US</a>
<br>
</div>  
<!-- About Section -->
<br> 
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


