<?php

declare(strict_types=1);

/*
 * Crea una única función (importante que sólo sea una) que sea capaz de calcular y retornar el área de un polígono.
 * - La función recibirá por parámetro sólo UN polígono a la vez.
 * - Los polígonos soportados serán Triángulo, Cuadrado y Rectángulo.
 * - Imprime el cálculo del área de un polígono de cada tipo.
 *
 * Blog Post Link: https://desarrollowp.com/blog/tutoriales/reto-de-programacion-4-area-de-un-poligono/
 */
function printArea(Polygon $polygon): float
{
    return $polygon->calcArea();
}

interface Polygon
{
    public function calcArea();
}

class Triangle implements Polygon
{
    private $base;
    private $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calcArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}

class Square implements Polygon
{
    private $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function calcArea(): float
    {
        return $this->side * $this->side;
    }
}

class Rectangle implements Polygon
{
    private $width;
    private $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calcArea(): float
    {
        return $this->width * $this->height;
    }
}

echo "El área del triángulo es " . printArea(new Triangle(2.2, 4)) . "\n";
echo "El área del cuadrado es " . printArea(new Square(3)) . "\n";
echo "El área del rectángulo es " . printArea(new Rectangle(5, 6)) . "\n";
