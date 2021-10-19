<?php

declare(strict_types=1);

class NumberCollection
{
    private array $numbers;
    private Calculator $calculator;

    public function __construct(array $numbers, Calculator $calculator)
    {
        $this->numbers = $numbers;
        $this->calculator = $calculator;
    }

    public function sum() : int
    {
        $acum = 0;

        foreach ($this->numbers as $number) {
            $acum = $this->calculator->add($acum, $number);
        }

        return $acum;
    }
}