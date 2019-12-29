<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
	
</head>
<body>
	<center>
		<div class="flex">
<form  method="POST" class="flex-item">
  <h3>Total Amount</h3>
<input type="text" name="amount"><br>


<?php

include_once("mysql-shim.php");
$Connection=mysql_connect('localhost','root','');
	$Selected=mysql_select_db('donate',$Connection);

    $searchquery = "SELECT * FROM ngo";
    $Execute=mysql_query($searchquery);
    
    ?>
<select>
<?php 
	while ($datarows=mysql_fetch_array($Execute)) {
        $cid=$datarows['id'];
        ?>
<option value=""> 
<?php echo $cid; ?>
</option>

}
?>

</select>
 
</form>
</div>
</center>
</body>
</html>