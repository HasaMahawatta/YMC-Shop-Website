<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/mdb.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">

<style>

body{
	
background-color:#939;
	}

.mycard{
	
	width:500px;
	margin-left:380px;
	margin-top:170px;
	
	}
</style>

</head>
<body>
<?php

	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else
		
?>
<div class="card mycard">
<div class="card-body">
<div class="form">
<h4 class="card-title">log in</h4>
<form class="formcontrol" action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input class="btn btn-light-blue" name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php' class="btn btn-elegant">Register Here</a></p>


</div>
</div>
</div>




<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min"></script>
<script src="js/mdb.min"></script>
</body>
</html>
