<?php


hi("Juan");
echo add(5, 20);

function hi( string $name) {
    echo "Hola, $name!";
}

function add(int $a, int $b): int {
    return $a + $b;
}