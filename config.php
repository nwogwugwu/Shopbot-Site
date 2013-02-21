<?php

$con = mysql_connect("localhost","root","kinetic");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("kinetic") or die(mysql_error());
  
?>