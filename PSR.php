<?php
declare(strict_types=1);
class Сalculator
{
    // можно через функцию pi(), но для примера написал так
    const PI = 3.14;
    public int $result = 0;
    public function add(int $a, int $b): int
    {
        $this->result = $a + $b;
        return $this->result;
    }
}