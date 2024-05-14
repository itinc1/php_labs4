<?php

namespace Triangle;

class TriangleChecker
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct(int $a, int $b, int $c)
    {
        if ($a > 0 && $b > 0 && $c > 0) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        } else {
            echo "С отрицательными числами ничего не выйдет!";
        }
    }

    public function isTriangle(): void
    {
        if (($this->a + $this->b > $this->c) && ($this->a + $this->c > $this->b) && ($this->b + $this->c > $this->a)) {
            echo "Ура, можно построить треугольник!";
        } else {
            echo "Жаль, но из этого треугольник не сделать.";
        }
    }
}

$checker = new TriangleChecker(3, 4, 5);
$checker->isTriangle();
