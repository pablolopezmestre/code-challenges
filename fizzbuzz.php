<?php

declare(strict_types=1);

/*
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */
function FizzBuzz()
{
    for ($i = 1; $i <= 100; $i++) {
        if (isDivisibleBy3And5($i)) {
            print("fizzbuzz\n");
        } elseif (isDivisibleBy3($i)) {
            print("fizz\n");
        } elseif (isDivisibleBy5($i)) {
            print("buzz\n");
        } else {
            print($i . "\n");
        }
    }
}

function isDivisibleBy3(int $number): bool
{
    return ($number % 3) == 0;
}

function isDivisibleBy5(int $number): bool
{
    return ($number % 5) == 0;
}

function isDivisibleBy3And5(int $number): bool
{
    return ($number % 3) == 0 && ($number % 5) == 0;
}

FizzBuzz();
