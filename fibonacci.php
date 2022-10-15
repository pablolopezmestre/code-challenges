<?php

declare(strict_types=1);

/*
 * Escribe un programa que imprima los 50 primeros números de la sucesión de Fibonacci empezando en 0.
 * - La serie Fibonacci se compone por una sucesión de números en la que el siguiente siempre es la suma de los dos
 * anteriores: 0, 1, 1, 2, 3, 5, 8, 13...
 *
 * Blog Post Link: https://desarrollowp.com/blog/tutoriales/reto-de-programacion-2-la-sucesion-de-fibonacci/
 */
function printFibonacci(): array
{
    $number1 = 0;
    $number2 = 1;
    $numbers = [];

    for ($i = 0; $i < 50; $i++) {
        $numbers[] = $number1;

        $next = $number1 + $number2;
        $number1 = $number2;
        $number2 = $next;
    }

    return $numbers;
}

// Test
echo implode(', ', printFibonacci());
