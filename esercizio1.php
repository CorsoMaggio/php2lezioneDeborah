<?php

$EURO = 1000; //importo
const BUDGET = 1000;
$EURO = readline('QuantO e l importo?');
if ($EURO > MAX) { 
    echo 'Superiore a 1000 euro';           
} elseif ($EURO < MAX) {
echo 'Inferiore';
}


    else {
        echo 'Il tuo importo e superiore';
    }
