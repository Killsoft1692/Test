<?php

namespace Killsoft\Test;

use Killsoft\Sum;

class SumTest extends \PHPUnit_Framework_TestCase
{
        public function testAddValues()
    {
                $sum = new Sum();
                $this->assertEquals(3, $sum->addValues(1,2));
    }
}