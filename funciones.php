<?php

// Llamada comentada a la función Hola()
// Si la activas, mostrará un saludo con el nombre indicado
# Hola("Javier");

// Llama a la función suma, le pasa dos números y muestra el resultado
echo suma(1, 2);

// Función que recibe un nombre y muestra un saludo
function Hola($nombre) {
    echo "Hola $nombre";
}

// Función que recibe dos números, los suma y devuelve el resultado
function suma($a, $b) {
    $suma = $a + $b;
    return $suma;
}
