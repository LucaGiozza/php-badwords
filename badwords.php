<!-- Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare
viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo
e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze
della parola da censurare. -->


<?php

$testo = " Oggi devo creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare
viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo
e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze
della parola da censurare.";

$lunghezza = strlen($testo);





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><?php echo  $testo; ?></p>

<p>La lunghezza di questo testo è <?php echo $lunghezza; ?> caratteri;</p>




    
    
</body>
</html>