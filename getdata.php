<?php


$con = $con = mysql_connect("Host name","User Name","Password");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("DB Name", $con);

$result = mysql_query("SELECT * FROM TableName");

while($row = mysql_fetch_assoc($result))
  {
	$output[]=$row;
  }

print(json_encode($output));

mysql_close($con);


?>