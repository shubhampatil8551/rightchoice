<!DOCTYPE html>
<html>
<head>
<header>
				<title>Right choice career guidance service </title>
				<meta charset="UTF-8"></meta>
				<meta></meta>
				<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
				<link rel="stylesheet" href="rightchoiceexternal.css"></link>
				<link rel="stylesheet" href="bootstrap.min.css"></link>
				
</header>
				<style>
					body {font-family: "Times New Roman", Georgia, Serif;}
						h1, h2, h3, h4, h5, h6 {
											font-family: "calibri bold";
												letter-spacing: 0px;
												}
</style>

<div class="nav-top" id="header">

	  <a href="#home" class="nav-top-home"style="color:blue;">HOME</a>
      <a href="#test" class="nav-top-contact"style="color:blue;">TEST</a>
	  <a href="#career" class="nav-top-career"style="color:blue;">CAREER</a>
      
	  <a href="#about" class="nav-top-about" style="color:blue;">ABOUT</a>
	  <a href="http://localhost/rightchoice/pages/login.php" class="login-page" id="log"style="color:blue;" >LOG IN</a>
</div>

<br>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#login">log in<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>	
	


<!-- Navbar (top) -->
<div class="nav-top-2">
  <div class="logo" style="letter-spacing:0px;">
		<table ><tr><td>
		<img src="http://localhost/rightchoice/pages/assets/images/rightchoice_logo.png">
		</td><td><h1 ></h1></td><tr></table>
		
   </div>
    
</div>

  <h3><marquee direction="" behavior="alternate">An one stop solution to your search</marquee></h3>


</head>
<!-- Header closed -->


<body class="top-header" style="max-width:1600px;min-width:500px" id="home">
  <!--<img class="header-image" src="F:\MCA study material\2nd Year\semester III\AIT\my project\images\top2.jpg" alt="header image" width="1340" height="350">-->
  <div class="content-top">
    
	
	<table>
		<tr>
	
			<td>
				<img src="http://localhost/rightchoice/pages/assets/images/tree.jpg" ></img>
			</td>
	
	
		<td>Career:
		<br>
	 
		Career is imporatnt part of student life. 
		<br>
		An accurate choice of career track gives you all satisfaction and life time achivements.
		<br>Therefore career should be of your interest.<br>
		We provide a way to search your interest areas and what is your desire.
	   </td>
	   
	</tr>
	
	
	</table>
	<img class="header-image" src="http://localhost/rightchoice/pages/assets/images/mission.jpg" alt="header image" width="1340" height="350">
  </div>
  
  
  <div>
	<?php
		session_start();
		error_reporting(0);
		echo "welcome ".$_SESSION['user_name'];
	
	?>
	<div>
	<a href="logout.php">logout</a>
	</div>
	 
		  
		 <?php
session_start();
include("connect.php");
?>



          
	
	
  


<!-- Page content -->
            <!-- Portfolio Controller/Buttons -->
			
            
              
              <br>
<center><h2>Careers</h2></center>
<p class="career-content">Begin planning of your career strategy 
as soon as possible to identify possible 
career paths and build a strong portfolio. 
Discuss career paths with advisors and make 
use of the <strong>Right Chioce Services</strong> early and often to get a head start on 
career planning and job searching.
</p>
			  
<center id="career">

        <table>
			  <tr>
			 <td> 
            <div class="flip-box1">
				<div class="flip-box-inner1">
				
				
					<div class="flip-box-front1">
					<img src="http://localhost/rightchoice/pages/assets/images/img-1.jpg" width="200" height="200"></img>
						</div>
					<div class="flip-box-back1">
					<center>
					<p>
					Choose a job you love, and you will never have to work a day in your life.
					</p>
					</center>
					</div>
				</div>
</div>

</td>
<td>


<div class="flip-box2">
				<div class="flip-box-inner2">
				
				
					<div class="flip-box-front2">
					<img src="http://localhost/rightchoice/pages/assets/images/img-2.jpg" width="200" height="200"></img>
						</div>
					<div class="flip-box-back2">
					<center>
					<p>
					"Without continual growth and progress, such words as improvement, 	
					achievement, and success have no meaning."
					-Benjamin Franklin
					</p>
					</center>
					</div>
				</div>
</div>



</td>
<td>
<div class="flip-box3">
				<div class="flip-box-inner3">
				
				
					<div class="flip-box-front3">
					<img src="http://localhost/rightchoice/pages/assets/images/img-3.jpg" width="200" height="200"></img>
						</div>
					<div class="flip-box-back3">
					<center>
					<p>
					"Try not to become a man of success, but rather try to become a man of value."<br>-Albert Einstein
					</p>
					</center>
					</div>
				</div>
</div>

</td>
</tr>


<tr>
<td>
<div class="flip-box4">
				<div class="flip-box-inner4">
				
				
					<div class="flip-box-front4">
					<img src="http://localhost/rightchoice/pages/assets/images/img-4.jpg" width="200" height="200"></img>
						</div>
					<div class="flip-box-back4">
					<center>
					<p>
					"Happiness lies in the joy of achievement and the thrill of creative effort."
						<br>-Franklin D. Roosevelt
					</p>
					</center>
					</div>
				</div>
</div>
</td>





<td>
<div class="flip-box5">
				<div class="flip-box-inner5">
				
				
					<div class="flip-box-front5">
					<img src="http://localhost/rightchoice/pages/assets/images/img-5.jpg" width="200" height="200"></img>
						</div>
					<div class="flip-box-back5">
					<center>
					<p>
					
					"However difficult life may seem, there is always 
					something you can do and succeed at."<br>-Stephen Hawking
					</p>
					</center>
					</div>
				</div>
</div>
</td>




<td>
<div class="flip-box6">
				<div class="flip-box-inner6">
				
				
					<div class="flip-box-front6">
					<img src="http://localhost/rightchoice/pages/assets/images/img-6.jpg" width="200" height="200"></img>
						</div>
					<div class="flip-box-back6">
					<center>
					<p>
					“It’s not what you achieve, it’s what you overcome. That’s what defines your career.” 
					<br>-Carlton Fisk

					</p>
					</center>
					</div>
				</div>
</div>
</td>
</tr>
</table>
</center>
 

<!-- home page Section -->
  


<!-- Footer -->

 <!-- About Section -->
  
<footer class="footer">
	<p>Hover on image to see Details</p>
  <div class="flip-box">
				<div class="flip-box-inner">
				<div class="flip-box-front">
				<img src="http://localhost/rightchoice/pages/assets/images/bg-1.jpg" alt="about" >
				</div>
				<div class="flip-box-back">
				<h2>
				<div class="addressbar"id="about">
				About Us
				<p>
				Right Choice<br>
				Career guaidance services<br>
											<br>
					Address:<br>
			Opposite DYP college,<br>
			Ravet Road,Akurdi<br>
	
				Pune 411 035
				</p>
	<p>Copyright ©2019 All Right Reserved</p>
	</h2>
  </div>
</div>
</div>
</div>
</footer>
 
</body>
</html>
