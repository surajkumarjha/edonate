
<?php
// TODO: image upload
@session_start();
include_once("mysql-shim.php");
if (isset($_POST["submit"])) {

    $uname=$_POST["email"];
    $pass=$_POST["pass"];
   
    if ($uname == "Admin" && $pass == "admin"  ) {
        header('location: Adminhome.html'); 
}

else {
  echo "<script>alert('You are not an Admin Contact Admin');</script>";

    }

}

?>



<html>
<head>
	<title>
		Admin
	</title>
<style type="text/css">
	

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #c0c0c0;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form input[type=submit] {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form input[type=submit]:hover,.form input[type=submit]:active,.form input[type=submit]:focus {
  background: #43A047;

}

body {
  background: #e5e5e5 ; 
  }
 input[type=submit]{
 	
 	background-color:green;
 }

h1{
color:green;
border: red;
}  
        


	</style>
</head>
<body>
<div class="login-page">
  <div class="form">
   
    <form class="login-form"  method="post">
    	<div id="head"><h2 align="center">ADMIN</h2></div>
      <input type="text" placeholder="email" name="email" required />
      <input type="password" placeholder="password" name="pass" required />
      
      <input type="submit" value="login" name="submit"/>

    </form>
  </div>
</div>
</body>