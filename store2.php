<!DOCTYPE html>
<html>
<head>
	<title>Contact</title> 
	<link rel="stylesheet" type="text/css" href="stylesheet1.css">
	<link rel="icon" href="plaatjes/favicon.ico" type="image/ico">
</head>
<body>
	<script src="jscript.js"></script>
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
		<div id="pageHeader">
			<div id="headerText">De Schepijs Winkel&#8482;</div>
		</div>
		<div id="menuBalk">
			<button class="menuButton" id="homeButton" onclick = homeButton(); >
				Home
			</button>
			<button class="menuButton" id="shopButton" onclick = shopButton(); style="border-width: .1em;">
				Shop
			</button>
			<button class="menuButton" id="contacButton" onclick = contactButton();>
				Contact	
			</button>
			<button class="menuButton" id="loginButton" onclick = loginButton();>
				Login
			</button>
		</div>
			
	

</body>
</html>