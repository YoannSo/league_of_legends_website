<!-- AUTHOR: Matt TAYLOR / Yoann SOCHAJ
  PROJET: Web L3 -->

  <?php
  include_once "includes/dbh.php";
  session_start();
  ?>

  <!DOCTYPE html>
  <html>
  <head>
   <link rel="stylesheet" type="text/css" href="homestyle.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link type="text/css" rel="stylesheet" href="https://lolstatic-a.akamaihd.net/awesomefonts/1.0.0/lol-fonts.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <title>Home</title>
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


  <div class="welcome-text" id="welcome-text" name=welcome-text>League of Legends 
    <p style="font-size: 20px" id="clickme">Click on me !</p>

    <?php

    if(isset($_SESSION["useruid"])){ 
      echo "
      <p style='font-size: 50px' id='clickme'>Hello " . $_SESSION["useruid"] . " !</p>
      ";
    }

    ?>

  </div>

  <div class="top-image" id="top-image">
  </div>

  <script type="text/javascript">
    var x = document.getElementById("welcome-text");
    x.onclick = function unblur(){
      var b = document.getElementById("top-image");
    //demo();
    var c = document.getElementById("welcome-text");
    c.style.display = "none";
  }

  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  async function demo() {
    var b = document.getElementById("top-image");
    var time = 50;
    b.style.filter = "blur(7px)";
    await sleep(time);
    b.style.filter = "blur(6px)";
    await sleep(time);
    b.style.filter = "blur(5px)";
    await sleep(time);
    b.style.filter = "blur(4px)";
    await sleep(time);
    b.style.filter = "blur(3px)";
    await sleep(time);
    b.style.filter = "blur(2px)";
    await sleep(time);
    b.style.filter = "blur(1px)";
    await sleep(time);
    b.style.filter = "blur(0px)";
  }

</script>

<div class = "bg-text" style="height:40%; width: 100%;">
  <h1 style="font-size:80px;text-align: center;">Description:</h1>


  <p>League of Legends est un jeu de strategie en equipe dans lequel deux equipes de cinq champions s'affrontent pour detruire la base adverse. Faites votre choix parmi plus de 140 champions disponibles, partez au combat, eliminez vos adversaires avec adresse et abattez les tourelles ennemies pour decrocher la victoire!</p>
</div>




<div class = "bg-text" style="height:40%; width: 100%;">
  <h1 style="font-size:40px; text-align: center;">Jouer !</h1>
  <h1 style="font-size:80px; text-align: center;">Recevez des recompenses !</h1>
  <img src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/fr-fr/production/fr-fr/static/day-1-3851405e6d5a11687a1bd0de330364ad.png" id="rewards">
</div>


<div class = "bg-text" style="height:40%; width: 100%;">
  <h1 style="font-size:80px; text-align: center;">Comment jouer !</h1>
  <a href="https://signup.euw.leagueoflegends.com/fr/signup/index#/" style="margin-left: 37% ">Telechargez le jeu ici</a>
</div>

<div class="footer">
  <h1 style="float:left">Contact</h1>
  <ul style="  font-size: 20px;  margin-top:1% ;float:left">
    <li><a href="mailto:matthew.taylor@etu.unilim.fr">matthew.taylor@etu.unilim.fr</li>
      <li><a href="mailto:yoann.sochaj@etu.unilim.fr">yoann.sochaj@etu.unilim.fr</li>
      </ul>
      <a href="#nav-placeholder"> <h1 style="float:right">Haut de la page</h1></a>

    </div>


  </body>
  </html>