<?php

declare(strict_types=1);

/*
 * Escribe un programa que se encargue de comprobar si un número es o no primo.
 * Hecho esto, imprime los números primos entre 1 y 100.
 *
 * Blog Post Link: https://desarrollowp.com/blog/tutoriales/reto-de-programacion-3-es-un-numero-primo/
 */
function PrimeNumber(): void
{
    for ($i = 2; $i <= 100; $i++) {
        if (isPrime($i)) {
            echo "{$i}\n";
        }
    }
}

function isPrime(int $number): bool
{
    for ($i = $number - 1; $i > 1; $i--) {
        if (($number % $i) === 0) {
            return false;
        }
    }

    return true;
}

// Test
PrimeNumber();
