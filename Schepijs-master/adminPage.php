<!DOCTYPE html>
<html>
<head>
	<title>De Schepijs Winkel</title> 
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
	<link rel="icon" href="plaatjes/favicon.ico" type="image/ico">
</head>
<body id="body">
	<?php
	$servername = "localhost:8080";
	$username = "root";
	$password = "";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=store", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully"; 
		}
	catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
	?>
	
		<script src="jscript.js"></script>
		

</body>
</html>