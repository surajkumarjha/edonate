<!--
	Done
	PROJECT MAIN PAGE
	LOGIN PAGE

-->
<?php

include_once("mysql-shim.php");
if (isset($_POST["Submit"])) {
	
	$Connection=mysql_connect('localhost','root','');
	$Selected=mysql_select_db('dig',$Connection);

	$user=$_POST["aadhar"];
	$pass=$_POST["password"];
	session_start();
// echo "<script>alert('correct');</script>";

	$searchquery = "SELECT * FROM login WHERE aadhar='$user' AND password='$pass'";
$Execute=mysql_query($searchquery);
	// echo "Executed successfully";
	if ($DataRows=mysql_fetch_array($Execute)) {

		$_SESSION['loggeduser']=$user;
		// echo "you are logged in as a normal user";
		echo "<script>alert('you are logged in as a normal user');</script>";

		header('location: index.html');
	}

	else{
		
		echo "<script>alert('rong creditionals');</script>";
	}
	
	}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="./css.css">
</head>

<body class="body">
<div>
	<nav>
		<img class="img" src="emblem.jpg" onClick="location.href='main.php'">
		<h2 class="nav">Digital Inclusion of Governance</h2>
		<button class="signin-button" onClick="location.href='signup.php'">Register</button>
	</nav>	
			<img class="img2" src="bkg.jpg">

	<div>
		<form class="form-signin3"  style="background-color: white; border: thick;border-color: black;width: 500px; margin-top: 50px;" method="Post">
			<div>
                <h2 class="heading-font" style="text-align: center;">Please Log-in</h2>
            </div>
                <input type="text" id="inputUID" name="aadhar" class="form-control" placeholder="Aadhar Number" required="" autofocus="" maxlength="12">

                <input type="password" name= "password" id="inputPassword" class="form-control" placeholder="Password" required="">
                
                <button id="sign-in-button" class="signin-button2" name ="Submit" type="Submit">Sign in</button>
                <br><br>
                <a href="reset.php" class="font">Forgot password?</a><br><br>
                <a href="change-password.php" class="font">Change Password</a>
            </form>
        </div>

	</div>
</body>
</html>