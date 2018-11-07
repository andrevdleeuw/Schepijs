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
		
		
		<div id="pageHeader">
			
			<div id="headerText">
				De Schepijs Winkel
			</div>
		</div>
		<div id="menuBalk">
			<button class="menuButton" id="homeButton" onclick = homeButton();>
				Home
			</button>
			<button class="menuButton" id="shopButton" onclick = shopButton(); style="border-width: .1em;">
				Shop
			</button>
			<button class="menuButton" id="contacButton" onclick = contactButton();>
				Contact	
			</button>
			<button class="menuButton" id="loginButton" onclick= loginButton();>
				Login
			</button>
		</div>
		<div id="spacer">

		</div>
		<div id="catHead">
			Categorien:
		</div>
		<div id="categoryContainer">
			<img src="plaatjes/ice-cream.png" class="catImg">
			<img src="plaatjes/ice-cream (1).png" class="catImg">
			<img src="" class="catImg">
			<img src="" class="catImg">
		</div>
</body>
</html>