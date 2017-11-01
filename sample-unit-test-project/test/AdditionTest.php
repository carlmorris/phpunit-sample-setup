<?php

namespace Training\PHPUnit\SampleSetup\Test\demo;

use Training\PHPUnit\SampleSetup\demo\AdditionObject;

class AdditionTest extends \PHPUnit\Framework\TestCase
{
	private $adder;

	protected function setUp()
	{
		$this->adder = new AdditionObject();
	}

	public function validDataProvider()
	{
		return [
				[1, 1, 2],
				[10, 90, 100],
				[10, -10, 0]
		];
	}

	/**
	 * @dataProvider validDataProvider
	 */
	public function testAdditionObject($input1, $input2, $expected)
	{
		$actual = $this->adder->addthese($input1, $input2);
		$this->assertEquals($expected, $actual);
	}
}
