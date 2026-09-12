<?php

$beers = [
    "Carlous",
    "London Porter",
    "Delirium red",
    "Corona"
];

$beers2 = [
    "Carlous 2",
    "London Porter 2",
    "Delirium red 2",
    "Corona 2"
];

$beerMixed = array_merge($beers, $beers2);
print_r($beerMixed);

array_push($beers, "Karmeliten");
$beer  = array_pop($beers);

// echo count($beers);
// print_r($beers);
// echo $beer;
// if(in_array("Corona", $beers)) {
//     echo "existe";
// }
