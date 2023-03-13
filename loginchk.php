<?php
	$con=mysqli_connect("localhost","root","","wd");
	$a=$_POST['user'];
	$b=$_POST['password'];
	$c=$_POST['fname'];
	$d=$_POST['lname'];
               
  if(!$con)
	{
	  die("unable to connect");
	}
	mysqli_select_db($con,"wd");
	$query="insert into user values('$a','$b','$c','$d')";

	if(mysqli_query($con,$query))
	{
	  echo "Data inserted ";
	}
	mysqli_close($con);
?>
