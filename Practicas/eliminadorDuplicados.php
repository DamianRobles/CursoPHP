<?php

/*
4.	Eliminar valores duplicados 
Crea un arreglo con varios valores repetidos. Construye un nuevo arreglo que contenga solamente valores únicos.
No utilices array_unique().
Conceptos: arreglos, foreach, in_array() y condicionales.
*/

$valores = [1, 2, 3, 4, 5, 1, 2, 3, 6, 7, 8, 9, 10, 5];
echo "Valores originales: " . implode(", ", $valores) . "<br>";

$valoresUnicos = eliminarDuplicados($valores);
echo "Valores únicos: " . implode(", ", $valoresUnicos);

function eliminarDuplicados(array $valores): array {
    $valoresUnicos = [];

    foreach ($valores as $valor) {
        if (!in_array($valor, $valoresUnicos)) {
            $valoresUnicos[] = $valor;
        }
    }
    return $valoresUnicos;
}
