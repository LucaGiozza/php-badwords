<!-- Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare
viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo
e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze
della parola da censurare. -->


<?php

$testo = " Oggi devo creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare
viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo
e la sua lunghezza, dopo aver sostituito con tre asterischi e tutte le occorrenze
della parola da censurare.";



$parola = $_GET['parola'];

 $stringa_cambiata = str_replace($parola, '***', $testo);

 $lunghezza = strlen($stringa_cambiata);


// echo $stringa_cambiata;





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- <p><?php echo  $testo; ?></p> -->


<img src="img/censura.jpg" alt="">

<h1 class="title"  > Inserire la parola del testo che vuoi venga censurata :</h1>

 <!-- <p><?php echo $parola ;  ?></p>  -->
<p><?php echo $stringa_cambiata;   ?></p>
<h3>La lunghezza di questo testo è <?php echo $lunghezza; ?> caratteri(Attenzione, il numero dei caratteri del testo varia a seconda della parola censurata);</h3>





    
    
</body>
</html>