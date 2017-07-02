<?php 
	session_start(); 
	
	$dbname="personal";
	$conn = new mysqli("localhost","root","","$dbname"); 
	
	if($_SERVER["REQUEST_METHOD"]== "POST") 
	{ 
	 $myusername = $_POST['iCode-id'];
	 $mypassword = $_POST['Password']; 
	 $sql = "SELECT * FROM confidential WHERE Email = '$myusername' and Password= '$mypassword'";
	 $result = mysqli_query($conn,$sql) or die("error in inserting data in db" . mysql_error());
	 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	 $count = mysqli_num_rows($result);
	   
	 if($count == 1) 
   {
	   echo "Success";
	   exit;
	  }
		else 
		{
		 echo "Your Email or Password is invalid";
		}
	}
 ?>
