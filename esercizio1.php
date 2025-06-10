<?php


const BUDGET = 1000;
$EURO = readline('Quanto e l importo?');
if ($EURO > BUDGET) {
    echo 'Superiore a 1000 euro';
} else {

    $valore_calcolato = $EURO / 3;
    echo "Paga in 3 comode rate da: $valore_calcolato Euro";
}