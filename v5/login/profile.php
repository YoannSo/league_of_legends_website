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

	<div class="profile-image"></div>
	<div class="my-profile">My profile
		<?php
		if(isset($_SESSION["useruid"])){ 
			$username =  $_SESSION["useruid"];
			echo "
			<p id='username'>Username: " . $_SESSION["useruid"].  "</p>
			";
		}
		?>
	</div>

	<div class="profile-info">


		<table class="profile-table">
			Favorite Champions: 
			<tr> 
				<td id="aatrox">
					<a href="../champions/aatrox/aatrox.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779708864819232848/AatroxSquare.png">
					</a>
				</td>
				<td id="mordekaiser">
					<a href="../champions/mordekaiser/mordekaiser.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710019745873958/MordekaiserSquare.png">
					</a>					
				</td>
				<td id="pantheon">
					<a href="../champions/pantheon/pantheon.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710020983455744/PantheonSquare.png">
					</a>	
				</td>
				<td id="vayne">
					<a href="../champions/vayne/vayne.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710022161662003/VayneSquare.png">
					</a>					
				</td>
				<td id="yasuo">
					<a href="../champions/yasuo/yasuo.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710023931789322/YasuoSquare_Unreleased.png">
					</a>				
				</td>
				<td id="akali">
					<a href="../champions/akali/akali.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710024984690708/AkaliSquare.png">
					</a>		
				</td>
				<td id="ashe">
					<a href="../champions/ashe/ashe.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710026520199188/AsheSquare.png">
					</a>
				</td>
				<td id="aurelionsol">
					<a href="../champions/aurelionsol/aurelionsol.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710028009439232/Aurelion_SolSquare.png">
					</a>
				</td>
				<td id="swain">
					<a href="../champions/swain/swain.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879696815849502/SwainSquare.png">
					</a>
				</td>
				<td id="riven">
					<a href="../champions/riven/riven.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879689345531936/RivenSquare.png">
					</a>
				</td>
			</tr>
			<tr>
				<td id="ahri">
					<a href="../champions/ahri/ahri.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879398374735872/AhriSquare.png">
					</a>
				</td>
				<td id="chogath">
					<a href="../champions/chogath/chogath.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879406616150066/Cho27GathSquare.png">
					</a>				
				</td>
				<td id="evelynn">
					<a href="../champions/evelynn/evelynn.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879494700335134/EvelynnSquare.png">
					</a>				
				</td>
				<td id="ezreal">
					<a href="../champions/ezreal/ezreal.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879502372765696/EzrealSquare.png">
					</a>				
				</td>
				<td id="fizz">
					<a href="../champions/fizz/fizz.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879510044016690/FizzSquare.png">
					</a>				
				</td>
				<td id="ornn">
					<a href="../champions/ornn/ornn.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879681142259730/OrnnSquare.png">
					</a>
				</td>
				<td id="bard">
					<a href="../champions/bard/bard.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/781477035838275594/BardSquare.png">
					</a>
				</td>
				<td id="blitzcrank">
					<a href="../champions/blitzcrank/blitzcrank.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/781477043107135488/BlitzcrankSquare.png">
					</a>
				</td>
				<td id="draven">
					<a href="../champions/draven/draven.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/781477050459488256/DravenSquare.png">
					</a>
				</td>
				<td id="karma">
					<a href="../champions/karma/karma.html">
						<img src="https://cdn.discordapp.com/attachments/779434027081138186/781477057610907678/KarmaSquare.png">
					</a>
				</td>
			</tr>
		</table>


		<?php

		if(isset($_SESSION["useruid"])){ 
			
			$sql = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username';";
			$res = mysqli_query($conn, $sql);
			$resCheck = mysqli_num_rows($res);
			//IDEA: put table out of php, display:none , if in array display :block
			if($resCheck > 0){

				while( $row = mysqli_fetch_array($res) ){


					if( in_array("aatrox", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('aatrox').style.display = 'inline-table';
						</script>";
					}
					if( in_array("mordekaiser", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('mordekaiser').style.display = 'inline-table';
						</script>";
					}
					if( in_array("pantheon", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('pantheon').style.display = 'inline-table';
						</script>";
					}
					if( in_array("vayne", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('vayne').style.display = 'inline-table';
						</script>";
					}
					if( in_array("yasuo", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('yasuo').style.display = 'inline-table';
						</script>";
					}
					if( in_array("akali", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('akali').style.display = 'inline-table';
						</script>";
					}
					if( in_array("ashe", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('ashe').style.display = 'inline-table';
						</script>";
					}
					if( in_array("aurelionsol", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('aurelionsol').style.display = 'inline-table';
						</script>";
					}
					if( in_array("swain", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('swain').style.display = 'inline-table';
						</script>";
					}
					if( in_array("riven", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('riven').style.display = 'inline-table';
						</script>";
					}
					if( in_array("ahri", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('ahri').style.display = 'inline-table';
						</script>";
					}
					if( in_array("chogath", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('chogath').style.display = 'inline-table';
						</script>";
					}
					if( in_array("evelynn", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('evelynn').style.display = 'inline-table';
						</script>";
					}
					if( in_array("ezreal", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('ezreal').style.display = 'inline-table';
						</script>";
					}
					if( in_array("fizz", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('fizz').style.display = 'inline-table';
						</script>";
					}
					if( in_array("ornn", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('ornn').style.display = 'inline-table';
						</script>";
					}
					if( in_array("bard", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('bard').style.display = 'inline-table';
						</script>";
					}
					if( in_array("blitzcrank", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('blitzcrank').style.display = 'inline-table';
						</script>";
					}
					if( in_array("draven", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('draven').style.display = 'inline-table';
						</script>";
					}
					if( in_array("karma", $row) ){
						echo "<script type='text/javascript'>
						document.getElementById('karma').style.display = 'inline-table';
						</script>";
					}

				}

			}

				// while($row = mysqli_fetch_assoc($res)){ //$res is an array with all the favorite champions
				// 	echo "
				// 	<a href=../champions/" . $row['favoritesFavorited'] . "/" . $row['favoritesFavorited'] . ".html>" . $row['favoritesFavorited'] . "</a><br>
				// 	";
				// }
		}

		?>
	</div>


</body>
</html>