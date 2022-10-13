<?php

declare(strict_types=1);

/*
 * Escribe una función que reciba dos palabras (String) y retorne verdadero o falso (Bool) según sean o no anagramas.
 * - Un Anagrama consiste en formar una palabra reordenando TODAS las letras de otra palabra inicial.
 * - NO hace falta comprobar que ambas palabras existan.
 * - Dos palabras exactamente iguales no son anagrama.
 *
 * Blog Post Link: https://desarrollowp.com/blog/tutoriales/reto-de-programacion-1-es-un-anagrama/
 */
function isAnagram(string $string1, string $string2): bool
{
    $string1 = normalizeString($string1);
    $string2 = normalizeString($string2);

    return ! isSameWord($string1, $string2) && containSameLetters($string1, $string2);
}

function normalizeString(string $str): string
{
    $str = htmlentities($str, ENT_NOQUOTES, 'utf-8');

    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    $str = preg_replace('#&[^;]+;#', '', $str);

    return mb_strtolower($str);
}
function isSameWord(string $string1, string $string2): bool
{
    return $string1 === $string2;
}

function containSameLetters(string $string1, string $string2): bool
{
    $arrayOfLetters1 = mb_str_split($string1);
    $arrayOfLetters2 = mb_str_split($string2);

    sort($arrayOfLetters1, SORT_STRING);
    sort($arrayOfLetters2, SORT_STRING);

    return $arrayOfLetters1 === $arrayOfLetters2;
}

// Test
$string1 = 'Japonés';
$string2 = 'Esponja';
echo sprintf("Las palabras %s y %s, %s anagramas\n", $string1, $string2, isAnagram($string1, $string2) ? 'son' : 'no son');

$string1 = 'aaa';
$string2 = 'Esponja';
echo sprintf("Las palabras %s y %s, %s anagramas\n", $string1, $string2, isAnagram($string1, $string2) ? 'son' : 'no son');

$string1 = 'somos';
$string2 = 'somos';
echo sprintf("Las palabras %s y %s, %s anagramas\n", $string1, $string2, isAnagram($string1, $string2) ? 'son' : 'no son');
