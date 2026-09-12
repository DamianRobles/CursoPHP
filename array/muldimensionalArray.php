<?php

$beers = [
    [
        "name" => "Corona",
        "type" => "Lager",
        "alcohol" => 4.5,
        "origin" => "Mexico"
    ],
    [
        "name" => "Corona 2",
        "type" => "Lager",
        "alcohol" => 4.5,
        "origin" => "Mexico"
    ]
];

// echo $beers[0]["name"];

foreach ($beers as $beer) {
    foreach ($beer as $k => $v) {
        echo $k." ".$v.";";
    }
}