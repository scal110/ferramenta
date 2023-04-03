<?php
require_once 'indexC.php';


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




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>La Ferramenta di San Biagio Platani è un negozio specializzato nella vendita di attrezzi e materiali per il bricolage, il fai-da-te e la manutenzione domestica. Situata nel cuore della città, la ferramenta offre una vasta selezione di prodotti di alta qualità, dalle tradizionali chiavi inglesi ai moderni trapani elettrici, dalle viti e bulloni alle vernici per il legno. Il personale esperto e cordiale è sempre pronto ad assistere i clienti nella scelta del prodotto più adatto alle loro esigenze e a fornire consigli utili per il loro utilizzo. Grazie alla sua ampia scelta di prodotti e alla competenza del personale, la Ferramenta di San Biagio Platani è diventata il punto di riferimento per gli appassionati di fai-da-te, i professionisti del settore edilizio e tutti coloro che hanno bisogno di strumenti e materiali di qualità per i loro progetti.
        <a href="https://www.instagram.com/michelangelo_montana_/" target="_blank" rel="noopener noreferrer" title="INSTA_M.M.">INSTA_M.M.</a>.</p>

        <p>Inoltre, la Ferramenta di San Biagio Platani si distingue per la sua ampia gamma di servizi, tra cui la riparazione e la manutenzione di attrezzi e macchinari, la creazione di duplicati di chiavi, l'affilatura di utensili da taglio e la preparazione di vernici personalizzate per soddisfare le esigenze specifiche dei clienti. Inoltre, la ferramenta offre anche servizi di noleggio attrezzi, come trapani, seghe circolari e martelli demolitori, per coloro che hanno bisogno di strumenti più potenti per lavori occasionali o di breve durata. La Ferramenta di San Biagio Platani è quindi un'azienda completa, in grado di fornire ai propri clienti tutto ciò di cui hanno bisogno per realizzare i propri progetti, dalla scelta dei materiali alla fornitura degli strumenti e dei servizi necessari.</p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy;Ferramenta San Biagio Platani</p>
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
