<?php

// Guarda la edad a evaluar
$edad = 1;

// Si la edad es exactamente 18
if ($edad == 18) {
    echo "Eres mayor de edad";

// Si la edad es mayor a 18 y menor a 64
} elseif ($edad > 18 && $edad < 64) {
    echo "Eres mayor a 18 años";

// Si la edad es 65 o más
} elseif ($edad >= 65) {
    echo "Eres adulto mayor";

// Si no se cumple ninguna condición anterior
} else {
    echo "Eres menor de edad";
}
