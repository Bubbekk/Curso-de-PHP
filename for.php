<?php

// Ciclo for:
// Empieza en 3
// Se repite mientras $i sea menor que 10
// Aumenta de 1 en 1
for ($i = 3; $i < 10; $i++) {

    // Muestra el valor actual de $i
    echo $i;

    // Verifica si el número es par
    if ($i % 2 == 0) {

        // Detiene el ciclo si encuentra un número par
        break;
    }
}
