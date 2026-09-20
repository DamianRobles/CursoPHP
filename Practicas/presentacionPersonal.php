<?php

/*
1.	Presentación personal 
Declara variables para guardar:
•	Nombre. 
•	Edad. 
•	Estatura. 
•	Si es estudiante. 
Muestra una oración con todos los datos usando echo.
Conceptos: variables, tipos de datos, concatenación e interpolación.
*/

$nombre = "Dali";
$edad = 25;
$estatura = 1.82;
$esEstudiante = true;

echo "Hola, mi nombre es $nombre, tengo $edad años de edad, mido $estatura metros y " . ($esEstudiante ? "soy estudiante." : "no soy estudiante.");