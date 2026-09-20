<?php

/*
3.	Contador de vocales 
Crea una función que reciba una palabra o frase y regrese la cantidad de vocales que contiene.
Debe funcionar con letras mayúsculas y minúsculas.
Conceptos: funciones, cadenas, bucles, condicionales y arreglos.
*/

$palabra = "Hola Mundo"; // 4 vocales
echo "\"$palabra\" tiene " . contadorVocales($palabra) . " vocales.";

function contadorVocales(string $palabra): int {
    $vocales = ['a', 'A', 'e', 'E', 'i', 'I',  'o', 'O', 'u', 'U'];
    $contador = 0;
    for ($i = 0; $i < strlen($palabra); $i++){
        if (in_array($palabra[$i], $vocales)) {
            $contador++;
        }
    }
    return $contador;
}