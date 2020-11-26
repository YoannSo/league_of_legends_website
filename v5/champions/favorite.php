<!-- AUTHOR: Matt TAYLOR / Yoann SOCHAJ
PROJET: Web L3 -->


<?php
session_start();
include_once '../includes/dbh.php';

$username = $_SESSION["useruid"];


if(isset($_POST["aatrox"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'aatrox' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'aatrox'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
		//header("location: champion.php?error=alreadyfavorite");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'aatrox');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["mordekaiser"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'mordekaiser' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'mordekaiser'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'mordekaiser');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["pantheon"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'pantheon' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'pantheon'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'pantheon');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["vayne"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'vayne' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'vayne'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'vayne');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["yasuo"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'yasuo' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'yasuo'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'yasuo');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}


if(isset($_POST["akali"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'akali' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'akali'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'akali');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["ashe"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'ashe' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'ashe'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'ashe');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["aurelionsol"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'aurelionsol' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'aurelionsol'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'aurelionsol');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["swain"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'swain' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'swain'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'swain');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["riven"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'riven' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'riven'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'riven');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["ahri"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'ahri' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'ahri'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'ahri');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["chogath"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'chogath' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'chogath'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'chogath');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["evelynn"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'evelynn' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'evelynn'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'evelynn');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["ezreal"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'ezreal' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'ezreal'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'ezreal');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["fizz"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'fizz' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'fizz'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'fizz');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["ornn"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'ornn' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'ornn'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'ornn');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["bard"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'bard' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'bard'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'bard');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["blitzcrank"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'blitzcrank' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'blitzcrank'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'blitzcrank');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["draven"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'draven' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'draven'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'draven');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}

if(isset($_POST["karma"])){
	$sql1 = "SELECT favoritesFavorited FROM favorites where favoritesUsersId = '$username' and favoritesFavorited = 'karma' ";
	$res = mysqli_query($conn, $sql1);
	$resCheck = mysqli_num_rows($res);
	if($resCheck > 0){ #si on a un resultat alors le champion est deja dans la base de donne
		$sql2 = "DELETE FROM favorites WHERE favoritesUsersId = '$username' and favoritesFavorited = 'karma'";
		mysqli_query($conn, $sql2);
		header("location: champion.php?error=remove");
	}
	else{ #sinon on l'insert dans la base de donnee
		$sql = "INSERT INTO favorites(favoritesUsersId, favoritesFavorited) VALUES ('$username', 'karma');";
		mysqli_query($conn, $sql);
		header("location: champion.php?error=none");
	}
}