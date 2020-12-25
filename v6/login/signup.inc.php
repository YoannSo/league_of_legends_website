<?php

#this if statement check if the user got to this page by clicking on the sumit button on the signup.php page and not just by entering the url : "signup.inc.php"
if (isset($_POST["submit"])) {   

	$username = $_POST["username"];
	$pwd = $_POST["pwd"];
	$pwdrepeat = $_POST["pwdrepeat"];

	require_once '../includes/dbh.php';
	require_once 'functions.php';

	#check if all the inputs are filled in
	if(emptyInputSignup($username, $pwd, $pwdrepeat) !== false){
		header("location: signup.php?error=emptyinput");
		exit();
	}

	#make sure its a proper username
	if(invalidUid($username) !== false){
		header("location: signup.php?error=invalidUid");
		exit();
	}

	#make sure if boths passwords: pwd and pwdrepeat match
	if(pwdMatch($pwd, $pwdrepeat) !== false){
		header("location: signup.php?error=passwordsdontmatch");
		exit();
	}

	#make sure the username the person is trying to create doesn't already exist
	if(uidExists($conn, $username) !== false){
		header("location: signup.php?error=ussernametaken");
		exit();
	}

	createUser($conn, $username, $pwd);

}

#if they try to directly type "signup.inc.php" we redirect them to signup.php
else{ 
	header("location: signup.php");
	exit();
}