
<?php
// TODO: image upload
@session_start();
include_once("mysql-shim.php");
if (isset($_POST["Submit"])) {
	echo("Error : ");

    $nname=$_POST["nname"];
    $aname=$_POST["aname"];
    $phone=$_POST["mnumber"];
	$email=$_POST["email"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$zip=$_POST["zip"];
	$ach=$_POST["ach"];
	$bname=$_POST["bname"];
	$ifsc=$_POST["ifsc"];
    $browser=$_POST["browsers"];


    if ($nname == "" || $aname == "" || $phone == "" || $email == ""  || $state == "" || $city == "" || $zip == "" || $ach == "" || $bname == "" || $ifsc =="" || $browser =="") {
    echo "Please enter all the details";
    return;
}
else{
    $Connection=mysql_connect('localhost','root','');
	$Selected=mysql_select_db('donate',$Connection); //Selecting db
	


    $Query="INSERT INTO ngo(ngo_name,Acc_number,Mob_number,email,state,city,zip_code,Account_holder,branch_name,ifsc_code,browsers)
                      VALUES('$nname','$aname','$phone','$email','$state','$city','$zip','$ach','$bname','$ifsc','$browser')";
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
<title>NGO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<!--<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>NGO Registration</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form  method="post">
					<input class="text" type="text" name="nname" placeholder="NGO Name" required><br>
					<input class="text" type="text" name="aname" placeholder="Authorized Person" required><br>
					<input class="text" type="text" name="mnumber" placeholder="Mobile Number" required>
					<input class="text email" type="email" name="email" placeholder="Email" required>
					<input class="text" type="text" name="state" placeholder="State" required><br>
					<input class="text" type="text" name="city" placeholder="City" required><br>
					<input class="text" type="text" name="zip" placeholder="Zip" required><br>
					<input class="text" type="text" name="ach" placeholder="Account Holder Name" required><br>
					<input class="text" type="text" name="acn" placeholder="Account Number" required><br>
					<input class="text" type="text" name="bname" placeholder="Bank Name" required><br>
					<input class="text" type="text" name="ifsc" placeholder="IFSC" required><br>
					  <input list="browsers" name="browsers" required>
  <datalist id="browsers">
    <option value="Flood">
    <option value="Tsunami">
    <option value="Earthquake">
    <option value="Famine">
    <option value="Cyclone">
  </datalist>

				
				<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="Submit" name="Submit" value="Submit">
				</form>
				
			</div>
		</div>
		</div>
	
</body>
</html>