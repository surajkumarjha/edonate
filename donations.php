<!--
	Done

	USER
	USER HOMEPAGE
-->


<!DOCTYPE html>
<html>
<head>
	<title> User Home page</title>
	<link rel="stylesheet" href="./css3.css">
		<link rel="stylesheet" href="./css2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

</head>
<body>
	<header>
	<div class="wrapper" >
		<div class="logo">
			<img  src="emblem.jpg">
			<center><h1  class="nav">Edonate </h1></center>
			
		</div>
	</div>
	</header>

		<div class="body">
			<ul class="nav-area">
                
			</ul>
		</div>
		<br/>
		<form class="example" action="search-complaint.html"  style="margin:auto;max-width:500px ">
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search transactions" name="search2" required="">
  <!-- <button type="submit" ><i class="fa fa-search"></i></button> -->
</form>
<div class="wrapper">
	
</div>
<h1 class="heading-font"><center><u> Transaction status status</u></center></h1>
<br/>
<table id="myTable" class="showbuses" width="100%" border="1" align="center">
	
	<h2 class="availbus" align="center"></h2>
	<tr align="center" class="header" >

		<th>Sl No</th>
		<th>Order Id</th>
        <th>Amount</th>
		<th>Date</th>
     
	</tr>


<?php
session_start();
include_once("mysql-shim.php");
$Connection=mysql_connect('localhost','root','');
	$Selected=mysql_select_db('donate',$Connection);
    $slno=0;
    $totalamt=0;
	$logged = $_SESSION['loggeduser'];
	$searchquery = "SELECT * FROM transaction";
$Execute=mysql_query($searchquery);
	
	while ($datarows=@mysql_fetch_array($Execute)) {
	
	$oid=$datarows['orderid'];
	$dateandtime=$datarows['date'];
	//$inid=$datarows['indid'];
    //$chid=$datarows['channelid'];
   // $user=$datarows['user'];
    $amt=$datarows['amount'];

    $temp=(float)$amt;
    $totalamt=$totalamt+$temp;

	$slno++;
	
?>
<tr class="tablerow">
<td align="center"><?php echo $slno; ?></td>
<td align="center"><?php echo $oid; ?></td>
<td align="center"><?php echo $amt; ?></td>
<td align="center"><?php echo $dateandtime; ?></td>

<!--<input class="bookbutton" type="Submit" name="Submit" value="Book">-->


</tr>

<?php

}
?>
<tr>

<td align="center"></td>


<td><th>Total Donated Amount </th>
    <th><?php echo $totalamt; ?></th></td></tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td,td1, i, txtValue,txtValue1;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    td1 = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
      	if (td1) {
      txtValue1 = td1.textContent || td1.innerText;
      if (txtValue1.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        return;
      } else {
        tr[i].style.display = "none";
      }
    } 
        tr[i].style.display = "none";
      }
    }
          
  }
}
</script>

 <div class="wrapper">
        
    </div>
        
    <div class="footer font">
            <div class="footer-bottom">
                 &copy; 
            </div>
        </div>
    </div>
</body>
</html>
