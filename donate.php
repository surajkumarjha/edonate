<?php
session_start();
include_once("mysql-shim.php");
$Connection=mysql_connect('localhost','root','');
    $Selected=mysql_select_db('donate',$Connection);
    
     
	$totalamt=0;
    $totalamt1=0;
	$totalamt2=0;

	$searchquery = "SELECT * FROM transaction";
$Execute=mysql_query($searchquery);
	
	while ($datarows=@mysql_fetch_array($Execute)) {

    $amt=$datarows['amount'];

    $temp=(float)$amt;
    $totalamt1=$totalamt1+$temp;

    }
	
	
	$searchquery1 = "SELECT * FROM fund_transfer";
$Execute=mysql_query($searchquery1);
	
	while ($datarows=@mysql_fetch_array($Execute)) {

    $amt=$datarows['amount'];

    $temp=(float)$amt;
    $totalamt2=$totalamt2+$temp;

    }
	
	$totalamt=$totalamt1-$totalamt2;
    if (isset($_POST["submit"])) {
	
        $ngoid=$_POST["selected"];
     echo $ngoid;
    
     header('location: pay.php');
    }
    
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
	
</head>
<body>
	<center>
		<div class="flex">
<form  method="POST" class="flex-item">
  <h3>Total Available Balance : <?php echo $totalamt ; ?></h3>
  <h4> Select NGO To Transfer Donatiom </h4>

<select name="selected">
<?php
    $searchquery = "SELECT * FROM ngo";
    $Execute=mysql_query($searchquery);
    while($datarows=mysql_fetch_array($Execute)) {
        $name=$datarows['ngo_name'];
        $cid=$datarows['id'];
		$_SESSION['test']=$name;
        ?>

<option value="<?php echo $cid; ?>"><?php echo $name; ?></option>
    <?php } ?>

    </select>
    <br>
   <h4> <input type="submit" name="submit" value="Transfer"><h4>
</form>
</div>
</center>
</body>
</html>