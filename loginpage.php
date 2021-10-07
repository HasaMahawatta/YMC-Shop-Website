<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>


<?php

$db = new mysqli("localhost", "root", "", "register");



  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  $newusername = mysqli_real_escape_string($db,$_POST['newusername']);
      $newpassword = mysqli_real_escape_string($db,$_POST['newpassword']); 
      
      $sql = "UPDATE users SET username='$newusername', password='$newpassword' WHERE password='$mypassword'";

	  
if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}
   }
?>



<html lang="en">
<head>
<title>YCM Computer Shop</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>




<style>
.center {
    padding: 110px 0;
 
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;           #9e80f2
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
	background-color: #9e80f2
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #f97080;
	color: #f97080;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #5f6060;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[name=reg] {
    width: 100%;
	
    background-color: #83aff7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #93eded;
}

.divc {
    border-radius: 5px;
    background-color: #f858;
    padding: 20px;
}
      </style>














</head>
<body id="page1">
<div class="body3"></div>
<div class="body1">
  <div class="main">
    <header>
      <div id="logo_box">
        <h1><a href="#" id="logo">YCM Computer Shop</a></h1>
      </div>
      <nav>
        <ul id="menu">
          <li ><a href="index.php">Home</a></li>
          <li id="menu_active"><a href="#">Update</a></li>
          <li><a href="Delete.php">Delete</a></li>
          <li><a href="loginpage.php">
		  
		   <?php 
		
		
		if(isset($_SESSION['username'])){
		
		echo $_SESSION['username'] ;
		
		}
	if (isset($_GET['logout'])) {
		
		$_SESSION['username']="";
		unset ($_SESSION['username']);
		header("location: index.php");
	
	}
	
	if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
		
		echo "Login";
		
		}
	
			
?>
		  
		  </a></li>
          <li class="bg_none"><a href="index.php?logout='1'">Logout</a></li>
		  
        </ul>
      </nav>
	  
	  
	  <body bgcolor = "#FFFFFF">
	<div class="center">
      <div align = "center">
         <div style = "width:300px; border: solid 0px #333333; " align = "left">
            <center><div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Update</b></div></center>
				
            <div style = "margin:30px">
               
               <form action = "loginpage.php" method = "post">
			   <label>Current User Name  :</label><input type = "text" name = "username" class = "box"/><br />
                  <label>Current Password  :</label><input type = "password" name = "password" class = "box" /><br/>
				  
				  <label>New User Name  :</label><input type = "text" name = "newusername" class = "box"/><br />
				  <label>New Password  :</label><input type = "password" name = "newpassword" class = "box" /><br/>
                  <input type = "submit" value = " Update "/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>
</div>
	  
      
</body>
</html>




<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>
</body>
</html>
