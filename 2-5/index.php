<?php

class Calculator
{
    public array $numbers;

    public function add(int $a, $b): int
    {
      

       return $a+$b;
    }

}

$calculator = new Calculator();

foreach([[1, 1], [3, 7], [1024, 2048]] as $numbers)
{
    printf(
        "%d+%d=%d<br>\n",
        $numbers[0],
        $numbers[1],
        $calculator->add($numbers[0], $numbers[1])
    );
}
