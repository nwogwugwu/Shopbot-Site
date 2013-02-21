<html>
<body>
<?php

include('config.php');

mysql_select_db("customer_info", $con);

$result = mysql_query("SELECT * FROM Items");

while($row = mysql_fetch_array($result))
  {
  echo "ID is " . $row['ID']. " ".$row['Name'] . " costs " . $row['Price'];
  echo "<br />";
  }
  
  	mysql_select_db("customer_info", $con);
	$result = mysql_query("SELECT * FROM Items");

	mysql_query(" INSERT INTO Items (Name, Price)
	 VALUES ('$_POST[item]', 700.0)");

mysql_close($con);
?>
</body>
</html>

/*
	<?php
	include('config.php');
		
	$result = mysql_query("SELECT FROM `current_order_id` WHERE  `current_id` =  'id_to_use'");
	$job_id = $row['number']
	
	mysql_query("INSERT INTO `customer_info`.`order` (`order_id`) VALUES ($job_id)");
	
	mysql_close($con);
	?>
	*/
	
	   			<?php
   				$to = "ngozin@bu.edu";
 				$subject = "POMEGRANATES!";	
 				$body = "slow burn.";
 				mail($to, $subject, $body)
  			?>