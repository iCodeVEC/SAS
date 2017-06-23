<?php 
			session_start(); 
			$dbname="confidential";
			
			$conn = new mysqli("localhost","root","","$dbname"); 
			
	
			
			if($_SERVER["REQUEST_METHOD"]== "POST") 
				
			{ 
			
		     $myusername = $_POST['username'];
			 
			 $mypassword = $_POST['password']; 
      
		     $sql = "SELECT * FROM table WHERE Email = '$myusername' and Password= '$mypassword'";
			
			 $result = mysqli_query($db,$sql) or die("error in inserting data in db" . mysql_error());
			 
			 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			  
			 $count = mysqli_num_rows($result);
			   
			if($count == 1) 
		   {
			   $_SESSION['login_user'] = $myusername;
			   exit;
			  }
	            else 
	            {
                 $error = "Your Email or Password is invalid";
                }
			}
 ?>
      
