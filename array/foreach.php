<?php

$names = ["Juan", "María", "Pedro", "Carlos", "Ana"];
$beer = [
    "name" => "Corona",
    "type" => "Lager",
    "alcohol" => 4.5,
    "origin" => "Mexico"
];


foreach ($names as $name) {
    echo $name . ";";
}

foreach ($beer as $k => $v) {
    echo $k." ".$v.";";
}