<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
require_once 'indexC.php';
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

    
  <img  src="images/attrezzi.png" style="display: block;
    width: 100%;
    margin: 0 auto;
    height: 700px;
  ">

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
