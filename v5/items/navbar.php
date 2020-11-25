<?php
session_start();
?>

<link type="text/css" rel="stylesheet" href="https://lolstatic-a.akamaihd.net/awesomefonts/1.0.0/lol-fonts.css" />
<link rel="stylesheet" type="text/css" href="homestyle.css">


<nav class="navbar navbar-dark bg-dark" id="navbartop">
  <a class="navbar-brand" id="brand" href="https://euw.leagueoflegends.com/en-gb/" target="_blank"><img src="https://lolpy.readthedocs.io/en/latest/_images/lol-logo.png" width="70"></a>

  <ul class="nav navbar-nav" id="nav1">
   <li class="nav-item">
    <a class="nav-link" href="index.php">Home <!-- <span class="sr-only">(current)</span> --></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../champions/champion.php">Champions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="items.html">Items</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../maps/maps.html">Maps</a>
  </li>

  <?php
  #if the user is logged in we show profile and logout
  if( isset($_SESSION["useruid"]) ){
    echo "<li class='nav-item'> <a class='nav-link' href='../login/profile.php'>Profile </a> </li>"; 
    echo "<li class='nav-item'> <a class='nav-link' href='../login/logout.inc.php'>Log out </a> </li>";
    
  }
  #if the user is not logged in or signed up we show sign up aand login
  else{ 
    echo "<li class='nav-item'> <a class='nav-link' href='../login/signup.php'>Sign up</a> </li>";
    echo "<li class='nav-item'> <a class='nav-link' href='../login/login.php'>Log in</a> </li>";
    
  }
  ?>

</ul>

<form class="form-inline navbar-form pull-right" action="../search/search.php" method="POST" style="font-size:40px;padding:10px;margin-right: 50px;" >
  <input class="form-control" type="text" placeholder="Search" name="search">
  <button class="btn btn-success-outline" type="submit" name="submit-search">Search</button>
</form>


</nav>
