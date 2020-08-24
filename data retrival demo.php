
<html>

<?php
include_once('connect.php');
//$conn=mysqli_connect("localhost","root","","rightchoice");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to retrive MySQL: " . mysqli_connect_error();
  }

$sql="SELECT career,description FROM pattern where op1=1 and op2=1 and op3=1";
$result=mysqli_query($conn,$sql);

// Associative array
$row=mysqli_fetch_assoc($result);
printf ("%s",$row["career"]); 
echo "<br/>";
printf ("%s",$row["description"]); 





// Free result set
mysqli_free_result($result);

mysqli_close($conn);
?>

</html>