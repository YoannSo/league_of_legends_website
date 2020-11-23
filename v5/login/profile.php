<?php
include_once "../includes/dbh.php";
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="https://lolstatic-a.akamaihd.net/awesomefonts/1.0.0/lol-fonts.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>My profile</title>
</head>
<body>

	<!--Navigation bar-->
	<div id="nav-placeholder">

	</div>

	<script>
		$(function(){
			$("#nav-placeholder").load("navbar.php");
		});
	</script>
	<!--end of Navigation bar-->


	<div class="my-profile">My profile
	</div>

	<div class="profile-info">
		<?php

		if(isset($_SESSION["useruid"])){ 
			echo "
			<p>Username: " . $_SESSION["useruid"].  "</p>
			";
		}

		?>
	</div>

	<div class="profile-image"></div>
	
	
</body>
</html>