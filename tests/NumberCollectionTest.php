<?php

use PHPUnit\Framework\TestCase;

class NumberCollectionTest extends TestCase
{
    public function testSum()
    {
        $numbersList = [6, 5, 6, 9];
        $numberCollection = new NumberCollection($numbersList, new Calculator());

        $this->assertEquals(array_sum($numbersList), $numberCollection->sum(), 'Sum doesn\'t match');
    }
}
