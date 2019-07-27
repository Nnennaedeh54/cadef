<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "cadef";

	$con =mysqli_connect("$servername",  "$dbname") ;
	if (!$con)
	{
		die('could not connect:'.mysql_error());
	}
	mysql_select_db("$dbname");
	$sql="INSERT INTO complaint(name, email, subject, description)
	Values
	('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[description]')";
	If (!mysql_query($sql,$con))
	{
		die('Error:'.mysql_error());
	}
	echo "1 record added";
	mysql_close($con)
	?>

	</body>
</html>