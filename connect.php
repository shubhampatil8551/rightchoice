<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database ="rightchoice";


//connection to the database
$conn = mysqli_connect("$hostname", "$username", "$password","$database");
  
  if($conn)
  {
	echo"";
  
  }
  else {
  
	die ("Conection failed bacause".mysqli_connect_error());
  }
  

 ?>
