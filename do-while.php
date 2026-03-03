<?php

// Valor inicial del contador
$i = 1;

// El bloque do se ejecuta primero al menos una vez
do {
    // Muestra el valor actual de $i
    echo "Entra $i <br>";

    // Aumenta el contador en 1
    $i++;

// Después de ejecutar el bloque, evalúa la condición
} while ($i <= 10);
