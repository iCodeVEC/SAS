<html>
    <head>
      <title>Icode Login</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">      
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
    </head>

    <body>
	<div class="row">
		<div class="col s12 m8 offset-m2 l4 offset-l4" style="padding-top: 6%;">
        <div class="card-panel grey lighten-5 z-depth-1">
			<h4 class="header2" style="vertical-align:center;">iCode Login</h4>
			<form action="‪icodelogin.php" method="post">
			  <div class="row">
				<div class="input-field col s12">
				  <i class="material-icons prefix">email</i>
				  <input id="id" type="text" class="validate" name="Pharmacy-id" autofocus required>
				  <label for="id">Admin ID</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s12">
				  <i class="material-icons prefix">lock</i>
				  <input id="password" type="password" name="Password" class="validate" required>
				  <label for="password">Password</label>
				</div>

				<div class="input-field col s12">
					<button class="btn waves-effect waves-light right submit" type="submit" name="action">Login
					  <i class="mdi-content-send right"></i>
					</button>
				</div>
			  </div>
			  
			</form>
			

			<p>New to us? <a href="pharmacy-reg.html">Sign Up</a></p>
        </div>
    </div>
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
      <!--Import jQuery & materialize.js-->
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>