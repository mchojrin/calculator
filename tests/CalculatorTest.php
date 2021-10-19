<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
	public function testAddAdds()
	{
		$sut = new Calculator();
		$this->assertEquals(8, $sut->add(5, 3));
	}
}
