<?php
$age = 36;

switch ($age) {
    case $age > '18':
        echo "Sono maggiorenne";
        break;
    case $age < '18':
        echo "Sono Minorenne";
        break;
    case $age <= '18':
        echo "Sono boenne";
        break;

    default:
        echo "Allora non so cosa sei";
        break;
}