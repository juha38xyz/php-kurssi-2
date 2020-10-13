<?php

class Calculator{
    public array $numbers;

    public function addNumber(int $number): self
    {
        $this->numbers[] = $number;
        //[5, 7]

        return $this;

    }

    public function calculate()
    {
        $total = 0;

        foreach($this->numbers as $number){
            $total += $number;
        }

        return $total;
    }
}

$calculator = new Calculator();
$calculator->addNumber(5)->addNumber(7)->calculate();