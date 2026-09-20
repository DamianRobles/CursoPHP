<?php

/*
2.	Función para calcular un promedio 
Crea una función llamada calcularPromedio() que reciba un arreglo de calificaciones y retorne su promedio.
Después, muestra si el estudiante está “Aprobado” o “Reprobado”. Considera 60 como calificación mínima.
Conceptos: funciones, parámetros, return, arreglos, ciclos y condicionales.
*/

$calificaciones = [70, 50, 50, 55, 60]; // promedio = 57.0, reprobado
$promedio = calcularPromedio($calificaciones);
echo "Tu calificacion es $promedio " . " y estás " . ($promedio>=60 ? "aprobado" : "reprobado");

function calcularPromedio(array $calificacion){
    $suma = 0;
    $contador = 0;
    foreach ($calificacion as $nota) {
        $suma += $nota;
        $contador++;
    }
    if ($contador > 0) {
        $promedio = $suma / $contador;
        return $promedio;
    } else {
        return "No hay calificaciones registradas"; // Retorna "Reprobado" si el arreglo está vacío
    }
}