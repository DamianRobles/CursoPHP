<?php

$edad = 61;

if ($edad == 18) {
    echo "eres mayor de edad";
} else if ($edad > 18 && $edad < 60) {
    echo "eres mayor a 18";
} else if($edad >= 60){
    echo "eres una persona de tercera edad";
} else{
    echo "eres menor de edad";
}