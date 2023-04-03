<?php
require_once 'indexC.php';

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

   
    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <p>Salve,

Siamo lieti di annunciare che la nostra ferramenta è pronta a soddisfare tutte le vostre esigenze. siamo sempre pronti ad offrire il nostro supporto esperto e consigli utili per aiutarvi a scegliere i prodotti giusti per il vostro progetto. E se avete bisogno di assistenza post-vendita, il nostro team di assistenza clienti è sempre a vostra disposizione per rispondere alle vostre domande e risolvere eventuali problemi.Non esitate a visitare il nostro negozio o a contattarci per ulteriori informazioni. Siamo qui per aiutare e vi ringraziamo per aver scelto la nostra ferramenta. Cordiali saluti,
Il team della Ferramenta SBP. <a href="mailto:forexma24@gmail.com">forexma24@gmail.com</a></p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Ferramenta San Biagio Platani</p>
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
