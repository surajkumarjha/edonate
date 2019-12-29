<?php #include(reg.php)?>

<?php
// TODO: image upload
@session_start();
include_once("mysql-shim.php");
if (isset($_POST["Submit"])) {
	echo("Error : ");

    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $phone=$_POST["mnumber"];
    $email=$_POST["email"];
    $password=$_POST["pw"];


    if ($fname == "" || $phone == "" || $email == "" || $password == "" ) {
    echo "Please enter all the details";
	return;
	header('location: pay.php');
}
else{
    $Connection=mysql_connect('localhost','root','');
    $Selected=mysql_select_db('donate',$Connection); //Selecting db
    $Query="INSERT INTO signup(name,lname,mobile,email,password)
                      VALUES('$fname','$lname','$phone','$email','$password')";
                    //  $Execute=mysql_query($Query);

                      if (mysql_query($Query)or die(mysql_error())) {
  echo 'Success';
  header('location: about.html');
  return;
} else {
  echo 'Fail';
  echo "Username not available";
  
  echo "<script>alert('Aadhar number already Registered');</script>";
exit();
}
$_SESSION['loggeduser']=$user;
// header('location: signin.php'); 
}
echo ("finished php");
echo("Please choose another aadhar");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form  method="Post">
					<input class="text" type="text" name="fname" placeholder="First Name" required><br>
					<input class="text" type="text" name="lname" placeholder="Last Name" required><br>
					<input class="text" type="text" name="mnumber" placeholder="Mobile Number" required>
					<input class="text email" type="email" name="email" placeholder="Email" required>
					<input class="text" type="password" name="pw" placeholder="Password" required>
					<input class="text w3lpass" type="password" name="psw-repeat" placeholder="Confirm Password" required>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required>
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="Submit" name="Submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	
</body>
</html>