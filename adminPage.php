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
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		}
	catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
	?>
	
		<script src="jscript.js"></script>
		<div>
			
			<div id="adminHeader">

			</div>
			<img src=plaatjes/close.png class="adminMenuButton">
		</div>
</body>
</html>