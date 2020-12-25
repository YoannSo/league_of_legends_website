

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="https://lolstatic-a.akamaihd.net/awesomefonts/1.0.0/lol-fonts.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Sign up</title>
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

  <div class="signup-text">Sign up
    <div class="signup-info">
      <div class="signup-info-user">

        <form action="signup.inc.php" method="POST">
          <input type="text" name="username" placeholder="Username...">
          <input type="password" name="pwd" placeholder="Password...">
          <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
          <br>
          <button type="submit" name="submit">Sign up</button>
        </form>
        <div class="php-return">
          <?php

          if(isset($_GET["error"])){

            if($_GET["error"] == "emptyinput"){
              echo "<p> Fill in all fields !</p>";
            }

            else if($_GET["error"] == "invalidUid"){
              echo "<p> Chose a proper username ! </p>";
            }

            else if($_GET["error"] == "passwordsdontmatch"){
              echo "<p> Passwords don't match ! </p>";
            }

            else if($_GET["error"] == "ussernametaken"){
              echo "<p> This username is already taken ! </p>";
            }

            else if($_GET["error"] == "stmtfailed"){
              echo "<p> Something went wrong, try again ! </p>";
            }

            else if($_GET["error"] == "none"){
              echo "<p> You have signed up ! </p>";
            }

          }
          ?>
        </div>

        </div>

      </div>
    </div>

    <div class="signup-image">
    </div>

  </body>
  </html>