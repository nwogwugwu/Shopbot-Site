<html>
<body>
<?php

include('config.php');

mysql_select_db("customer_info", $con);
$result = mysql_query("SELECT * FROM Items");

mysql_query("
INSERT INTO Items
VALUES (88, 'Seaweed', 3.0, 3, 1, 'seaweed.png')");		//	insert item named "seaweed"

while($row = mysql_fetch_array($result)){
  echo "ID is " . $row['ID']. " ".$row['Name'] . " costs " . $row['Price'];
  echo "<br />";
  }		// list items
  
mysql_close($con);
?>
</body>
</html>