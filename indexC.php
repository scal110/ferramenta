<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferramenta San Biagio Platani</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Ferramenta SBP</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="prodotti.php">Prodotti</a></li>      
          <li><a href="contatti.php">Contatti</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="carrello.php">Carrello</a></li>' ;
            echo '<li><a href="ordini.php">Miei ordini</a></li>';
            echo '<li><a href="account.php"> Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            
          }
          ?>
        </ul>
      </section>
    </nav>
   





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
