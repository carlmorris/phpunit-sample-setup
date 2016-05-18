<?php

namespace Training\PHPUnit\SampleSetup\Test\demo;

use Training\PHPUnit\SampleSetup\demo\DummyObject;

class DummyObjectTest extends \PHPUnit_Framework_TestCase
{

    public function testTrue()
    {
        $dummyObject = new DummyObject();
        $this->assertTrue($dummyObject->getTrue());
    }
}

