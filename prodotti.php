<?php
require_once 'indexC.php';

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');

          if($result){


            
            while($obj = $result->fetch_object()) {
              $prezzo_con_simbolo_euro = '€ ' . number_format($obj->price, 2);

              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Codice Prodotto</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Descrizione</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Disponibili</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Prezzo (x1)</strong>: '.$prezzo_con_simbolo_euro.'</p>';

              
              if($obj->qty > 0){
                if(isset($_SESSION['username'])){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="AGGIUNGI AL CARRELLO" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
                }
                else{
                  echo '<p><a href="login.php"><input type="submit" value="AGGIUNGI AL CARRELLO" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
                  
                }
              
              }
              else {
                
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

        <div class="row" style="margin-top:10px;">
          <div class="small-12">




        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; Ferramenta San Biagio Platani</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
