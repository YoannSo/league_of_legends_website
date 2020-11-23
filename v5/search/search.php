<?php
include_once "../includes/dbh.php";
session_start();
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="search.css">
	<link type="text/css" rel="stylesheet" href="https://lolstatic-a.akamaihd.net/awesomefonts/1.0.0/lol-fonts.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../homestyle.css">
</head>
<html>
<body>

	<!--Navigation bar-->
	<div id="mynavbar" style="">

	</div>

	<script>
		$(function(){
			$("#mynavbar").load("navbar_search.php");
		});
	</script>
	<!--end of Navigation bar-->

	<div class = "search">
		<div class= "insearch">
		<h1 id="search-header"> <img src="searchicon.png" id="searchicon"> Search page</h1>
	</div>
	</div>

	<div class="result-container">
		<?php
		if(isset($_POST["submit-search"])){
			$search = mysqli_real_escape_string($conn, $_POST["search"]);
			$sql = "SELECT * FROM champion WHERE name LIKE '%$search%' OR type LIKE '%$search%' OR lane LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);
			$count = 0;

			if($queryResult > 0){
				while($row = mysqli_fetch_assoc($result)){
					$count++;
					
					echo "<div class='search-results'>
					<h3 id='result'>".$count. ") Champion: </h3> <a href=../champions/".$row['name']."/".$row['name'].".html>".$row['name']."</a>
					<h3 id='result'> Role: </h3>".$row['type'].
					"<h3 id='result'> Lane: </h3>".$row['lane']."
					</div>";	
				}
				if($queryResult == 1){
					echo "<p id='numberofresults'>There is " .$count. " result </p>";
				}
				else{
					echo "<p id='numberofresults'>There are " .$count. " results</p>";
				}
			}
			else{
				echo "<p id='numberofresults'>There are no results matching your search !</p>";
			}
		}
		?>
	</div>
</body>
</html>