<?php

$beer = [
    "name" => "Corona",
    "type" => "Lager",
    "alcohol" => 4.5,
    "origin" => "Mexico"
];
$beer["alcohol"] = 5.0;
echo $beer["alcohol"];