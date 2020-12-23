<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="https://lolstatic-a.akamaihd.net/awesomefonts/1.0.0/lol-fonts.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Log in</title>
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

  <div class="signup-text">Log in
    <div class="signup-info">
      <div class="signup-info-user">

        <form action="login.inc.php" method="POST">
          <input type="text" name="uid" placeholder="Username...">
          <input type="password" name="pwd" placeholder="Password...">
          <br>
          <button type="submit" name="submit">Log in</button>
        </form>

        <div class="php-return">
          <?php

          if(isset($_GET["error"])){

            if($_GET["error"] == "emptyinput"){
              echo "<p> Fill in all fields !</p>";
            }

            else if($_GET["error"] == "wronglogin"){
              echo "<p> Incorrect username or password ! </p>";
            }

          }
          ?>
        </div>

      </div>

    </div>
  </div>

  <div class="signup-image"></div>




</body>
</html>
