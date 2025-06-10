<?php

$age = 18; //intero
const MAX = 18;
//se(eta maggiore o uguale di 18) fai qualcosa altrimenti fai altro

//if (!($age >= MAX)) { 
    // echo 'Sono maggiorenne';               //area di competenza (scope) fa qualcosa
//}

//if ($age >= MAX) { 
    // echo 'Sono maggiorenne';           
//}else{
//echo 'Sono minorenne';
//}
$age = readline('Quanti anni hai?');
if ($age > MAX) { 
    echo 'Sono maggiorenne e ho piu di 18 ANNI';           
} elseif ($age < MAX) {
echo 'Sono minorenne';
}


    else {
        echo 'Sono maggiorenne e ho esattamente 18 ANNI';
    }





