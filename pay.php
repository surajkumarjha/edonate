<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		PAY
	</title>
</head>
<body>
	<p>
		Select Amount
	</p>
	<form action="checkout.php" method="POST">
		<select name="amount">
			<option value="10">10</option>
			<option value="200">200</option>
		</select>
<input type="submit" value="PAY NOW">
	</form>
	<?php
	if(isset($_SESSION['test']) && !empty($_SESSION['test']))
	{
		$name = $_SESSION['test'];
		$_SESSION['mytest']=$name;
	}
	else
	{
		session_destroy();
	}
	?>
	
	
	
	
	</body>
	</html>