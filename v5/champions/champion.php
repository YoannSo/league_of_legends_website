<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="champion_main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>


	<!--Navigation bar-->
	<div id="mynavbar">

	</div>

	<script>
		$(function(){
			$("#mynavbar").load("navbar_champion_main.php");
		});
	</script>
	<!--end of Navigation bar-->


	<div class="champ-header">
		<div class="all-champs">
			<h1 id="title">Champions</h1>
			<table class="myTable">
				<tr> 
					<td>
						<a href="aatrox/aatrox.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779708864819232848/AatroxSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="aatrox" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="mordekaiser/mordekaiser.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710019745873958/MordekaiserSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="mordekaiser" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="pantheon/pantheon.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710020983455744/PantheonSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="pantheon" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="vayne/vayne.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710022161662003/VayneSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="vayne" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="yasuo/yasuo.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710023931789322/YasuoSquare_Unreleased.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="yasuo" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="akali/akali.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710024984690708/AkaliSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="akali" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="ashe/ashe.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710026520199188/AsheSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="ashe" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="aurelionsol/aurelionsol.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/779710028009439232/Aurelion_SolSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="aurelionsol" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="swain/swain.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879696815849502/SwainSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="swain" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="riven/riven.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879689345531936/RivenSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="riven" id="fav-button">Favorite</button>
						</form>
					</td>
				</tr>
				<tr>
					<td>
						<a href="ahri/ahri.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879398374735872/AhriSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="ahri" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="chogath/chogath.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879406616150066/Cho27GathSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="chogath" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="evelynn/evelynn.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879494700335134/EvelynnSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="evelynn" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="ezreal/ezreal.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879502372765696/EzrealSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="ezreal" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="fizz/fizz.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879510044016690/FizzSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="fizz" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<a href="ornn/ornn.html">
							<img src="https://cdn.discordapp.com/attachments/779434027081138186/780879681142259730/OrnnSquare.png">
						</a>
						<form action="favorite.php" method="POST">
							<button type="submit" name="ornn" id="fav-button">Favorite</button>
						</form>
					</td>
					<td>
						<p>17</p>
					</td>
					<td>
						<p>18</p>
					</td>
					<td>
						<p>19</p>
					</td>
					<td>
						<p>20</p>
					</td>
				</tr>
			</table>

			<?php
			if(isset($_GET["error"])){

				// if($_GET["error"] == "alreadyfavorite"){
				// 	echo "<p id='fav-result-negative'> You have already favorited this champion !</p>";
				// }
				if($_GET["error"] == "none"){
					echo "<p id='fav-result-positive'> Champion has been added to favorites !</p>";
				}
				else if($_GET["error"] == "remove"){
					echo "<p id='fav-result-negative'> Champion has been removed from favorites !</p>";
				}
			}
				?>

			</div>
		</div>




	</body>
	</html>