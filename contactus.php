<?php
session_start();
require('connect.php');
?>
<html>
<div class="nav-top-1">
  <div class="logo" style="letter-spacing:0px;">
		<table><tr><td><!--LOGO OF RIGHT CHOICE-->
		<img src="http://localhost/rightchoice/pages/assets/images/rightchoice_logo.png">
		</td><td><h1 ></h1></td><tr></table>
		
   </div>
    
</div>
<header><!-- CSS and scripts  start-->
				
				<!--external CSS and scripts 
				 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
				  -->
				  
				  <!-- local CSS and scripts in right choice-->
				  
					<link rel="stylesheet" href="css/bootstrap.min.css"></link>
					<script src="css/jquery.js"></script>
				  
				  
				<!-- CSS and scripts  END--></header>
				
  <h3><marquee direction="" behavior="alternate">An one stop solution to your search</marquee></h3>				
				
				
<img class="header-image" src="http://localhost/rightchoice/pages/assets/images/mission2.jpg" alt="header image" width="1340" height="350"></img>
<body>
<div>
<br>
<a href="index.php" class="btn btn-info">HOME</a>
</div>
<div class="container" style="width:600px;">
  <div class="contact-section">
    <h2 class="ct-section-head">CONTACT US</h2>
    <div class="row contact-fields">
      <div class="col-md-8 left-form">
       <form method="post" action="" class="form-horizontal">
        <div class="form-group">
          <label  for="fname">First Name </label>
          <input class="form-control" id="fname" name="fname" placeholder="First Name&nbsp;" type="text"  required>
        </div>
		 <div class="form-group">
          <label  for="fname">Middle Name </label>
          <input class="required form-control" id="mname" name="mname" placeholder="Middle Name&nbsp;" type="text"  required>
        </div>
        <div class="form-group">
          <label for="lname">Last Name </label>
          <input class="required form-control" id="lname" name="lname" placeholder="Last Name&nbsp;" type="text"  required>
        </div>
        <div class="form-group">
          <label  for="contactEmail">Email </label>
          <input  id="email" class="form-control" name="email" placeholder="Email&nbsp;" type="email"  required>
        </div>
        <div class="form-group">
          <label  for="contactPhone">Phone </label>
          <input class="required form-control h5-phone" id="contact" name="contact" placeholder="Phone&nbsp;" type="tel"  required pattern="[0-9]{10}">
        </div>
        <div class="form-group">
          <label  for="comment">Type your message here</label>
          <textarea class="required form-control" id="comment" name="comment" placeholder="Type your message here&nbsp;" rows="6" required></textarea>
        </div>
        <input class="btn btn-info" type="submit" name="submit" value="Submit"> 
      </form>
    </div>
	<?php
if(isset($_POST['submit']))
    {
		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$emailid=$_POST['email'];
		$contact=$_POST['contact'];
		$comment=$_POST['comment'];
	
		$query ="INSERT INTO contactus(fname,mname,lname,email,contact,comment) 
		VALUES('$fname','$mname','$lname','$emailid','$contact','$comment')";

	//	$data = mysqli_query($conn, $query); 
		
		if ($conn->query($query) === TRUE) {
			// Javascript alert to the user
			$message = "Submitted Successfully..!! Happy to help you....!!";
			
			echo "<script type='text/javascript'>alert('$message');</script>";
			
			
			
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}

		$conn->close();
	}?>
	
	
	
	<br>
    <div class="col-md-4 contact-info">
      <div class="phone">
        <h2>Call</h2>
        <a href="">+91&nbsp;&nbsp;&nbsp;8551&nbsp;&nbsp;&nbsp;049763</a>
      </div>
      <div class="email">
        <h2>Email</h2>
        <a href="">info@rightchoice.com</a>
		<a href="mailto:info@webcorpco.com">shubhampatil8551@gmail.com</a>
      </div>
      <div class="location" style="width:300px;">
        <h2>Visit :</h2>
        <p>One Town Center <br>
        Right Choice Career guidance services<br>

		Address: Opposite DYP college, <br>Ravet Road,Akurdi <br>Pune - 411 035<br>			
		
        <br>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>